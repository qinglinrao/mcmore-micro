<?php
use GuzzleHttp\Client;

class WeixinController extends Controller {

    protected $request;
    protected $content; // 回复内容

    protected $appid;
    protected $secret;
    protected $access_token;

    public function __construct()
    {
        \Debugbar::disable();

        $this->beforeFilter('weixin', ['except'=>['getRegistration', 'postRegistration']]);

        $this->appid = Config::get('weixin.appid');
        $this->secret = Config::get('weixin.secret');
    }

    public function getRegistration()
    {
        return View::make('weixin.registration');
    }

    public function postRegistration()
    {
        $rules = array(
            'name' => 'required',
            'mobile' => 'required|cnphone|unique:bookings,mobile,null,id,type,"tryout"',
            'email' => 'required|email',
            'detail' => 'required',
        );

        $message = array(
            'detail.required' => '请填写咨询内容',
            'name.required' => '请填写姓名',
            'mobile.required' => '请填写手机号码',
            'mobile.cnphone' => '手机号码格式不正确',
            'mobile.unique' => '该手机号码已登记',
            'email.required' => '请填写邮箱',
            'email.email' => '邮箱格式不正确',
        );

        $validator = Validator::make(Input::all(), $rules, $message);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        } else {
            $booking = new Booking();
            $booking->fill(Input::all());
            $booking->type = 'tryout';
            $booking->save();

            $success = true;
        }

        return View::make('weixin.registration', compact('success'));
    }

    public function getIndex()
    {
        echo Input::get('echostr');
    }

	public function postIndex()
	{
        $request = file_get_contents('php://input');

        $request = simplexml_load_string($request, 'SimpleXMLElement', LIBXML_NOCDATA);

        switch ($request->MsgType)
        {
            case 'event':
                $this->eventResponse($request);
                break;
            
            case 'text':
                $this->msgResponse($request);
                break;
        }

        $this->request = $request;

        return $this->reply();
	}

    public function getMenu()
    {
        $this->setAccessToken();
        $menu_response = $this->menuGet();

        Log::debug($menu_response);
    }

    public function postMenu()
    {
        $this->setAccessToken();
        $menu_response = $this->menuCreate();

        Log::debug($menu_response);
    }

    // 事件类型，subscribe(订阅)、unsubscribe(取消订阅)
    protected function eventResponse($request)
    {
        switch ($request->Event)
        {
            case 'subscribe':
                $content = '感谢您关注麦多，麦多一个帮助您快速搭建商城的系统。如您已在麦多官网完成了试用登记，请回复您的手机号码，获取试用账号；如您未有登记，请点击<a href="http://www.mcmore.com/weixin/registration">免费试用</a>提交申请。';
                break;
            
            case 'unsubscribe':
                $content = 'unsubscribe';
                break;

            case 'CLICK':
                switch ($request->EventKey)
                {
                    case 'EVENT_TRIAL':
                        $content = '回复您的手机号码，即可获得麦多商城系统的试用资格！ 由于麦多采用的是1对1专人服务模式，我们的专职服务人员会在您登记后的24-72小时内，联系您并安排您进行系统试用，麻烦您耐心等候，谢谢！';
                        break;

                    case 'EVENT_INTRO':
                        $content = array(
                            [
                                'Title' => '麦多移动商城系统简介',
                                'Description' => '麦多移动商城系统，以10分钟快速搭建商城，顶尖设计水平、强大的粉丝营销工具以及自定义拖拽等特色功能，领先于其他同行。',
                                'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/aI4F2dude8ogAdv7ong5Vqvdh1mibKF7KMrKrl6k4IO3XFW279DcHAAcib9BicBOV0S1AiaGJ5I0vgaX5P309bpQcQ/0',
                                'Url' => 'http://mp.weixin.qq.com/s?__biz=MzA4NTI3NTQ3MA==&mid=203231292&idx=1&sn=794c7c86ef1ce553a2c33c4a76e39cb6',
                            ]
                        );
                        break;

                    case 'EVENT_PLAN':
                        $content = array(
                            [
                                'Title' => '麦多系统迭代进程',
                                'Description' => '一个快速免搭建的商城系统，诞生啦！与您分享麦多的成长计划，让您更了解麦多，用的更放心！',
                                'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/aI4F2dude8rDJqLPRMjciawstM05ysK6AM1eHcBmYxaZegJLgZaibicnODqT5783jFHbgY1LEgRK9Wy75cJVYuO5w/0',
                                'Url' => 'http://mp.weixin.qq.com/s?__biz=MzA4NTI3NTQ3MA==&mid=203176568&idx=1&sn=59525982d05c94e381fc9b9dccad8edb',
                            ]
                        );
                        break;

                    case 'EVENT_ACTIVITY':
                        $content = array(
                            [
                                'Title' => '麦多开年大礼',
                                'Description' => '麦多开年大礼，参与活动赢麦多免费使用权，更有千元代金券，等您来抢，还不立即行动？',
                                'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/aI4F2dude8rEwvk43I7G2dgvHJzomljvB0RLZKLc8Y5tzdhFZibxFsEucBKrxpUXqve6gU1zPn25X0c2oyj18mQ/0',
                                'Url' => 'http://mp.weixin.qq.com/s?__biz=MzA4NTI3NTQ3MA==&mid=203290215&idx=1&sn=a8746795ece23139b8ac01df7c59c81f',
                            ]
                        );
                        break;
                }
                break;
        }

        $this->content = $content;
    }

    protected function msgResponse($request)
    {
        $request_content = trim($request->Content);

        // 默认内容(输入的是其它内容不是手机是的回复内容)
        $content = '';

        // 先预判断一下是不是要输入手机
        if(preg_match('/^((1(3|4|5|7|8)[0-9]{1}))/', $request_content))
        {
            $mobile = $request_content;
            if(preg_match('/^(((1(3|4|5|7|8)[0-9]{1}))+\d{8})$/', $mobile))
            {
                $booking = Booking::with('trial')->whereMobile($mobile)->first();

                if($booking->trial) {
                    $password = $this->make_password();
                    $account_response = $this->createAccount($mobile, $password);
                    $response = json_decode($account_response);
                    switch ($response->state)
                    {
                        case 20001:
                            $booking->trial->trialed_at = Carbon::now();
                            $booking->trial->save();
                            $content = "您的试用账号是：{$mobile}\n您的密码是：{$password}\n请前往麦多官网mcmore.com进行系统体验。\n试用过程中遇到任何问题，都可以联系客服小麦（QQ：2924551319）为您解答哦！";
                            break;

                        case 40002:
                            $content = '您的试用账号已发放，请查看以往聊天记录，如您忘记密码，请联系客服小麦(QQ：2924551319)重置密码，谢谢！';
                            break;

                        case 40001:
                        default:
                            $content = '麦多暂时打了个盹，待会再试试吧！';
                            break;
                    }
                } else {
                    $content = '您的手机号码未获得试用资格，请点击<a href="http://www.mcmore.com/weixin/registration">试用登记</a>填写信息申请试用。';
                }
            } else {
                $content = '手机号码输入有误，重新输入您常用的11位手机号码再试试吧！';
            }
        }

        $this->content = $content;
    }

    protected function createAccount($mobile, $password)
    {
        $client = new Client();
        $request_url = Config::get('weixin.register_url').'?'.Request::getQueryString();
        $response = $client->post($request_url, [
            'body' => [
                'mobile' => $mobile,
                'password' => $password
            ]
        ]);
        return $response->getBody();
    }

    protected function make_password($length = 6)
    {
        // 密码字符集，可任意添加你需要的字符
        $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';

        $password = '';
        for ( $i = 0; $i < $length; $i++ )
        {
            // 这里提供两种字符获取方式
            // 第一种是使用 substr 截取$chars中的任意一位字符；
            // 第二种是取字符数组 $chars 的任意元素
            // $password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
            $password .= $chars[ mt_rand(0, strlen($chars) - 1) ];
        }

        return $password;
    }

    private function reply()
    {
        $request = $this->request;
        $content = $this->content;

        if(is_array($content))
            $content = View::make('weixin.response_news', compact('request', 'content'));
        elseif($content)
            $content = View::make('weixin.response', compact('request', 'content'));

        return $content;
    }

    protected function setAccessToken()
    {
        $url = sprintf('https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s', $this->appid, $this->secret);

        $client = new Client();
        $response = $client->get($url);
        $response_content = json_decode($response->getBody());

        $this->access_token = $response_content->access_token;
    }

    protected function menuGet()
    {
        $url = sprintf('https://api.weixin.qq.com/cgi-bin/menu/get?access_token=%s', $this->access_token);

        $client = new Client();
        $response = $client->get($url);

        return $response->getBody();
    }

    protected function menuCreate()
    {
        $url = sprintf('https://api.weixin.qq.com/cgi-bin/menu/create?access_token=%s', $this->access_token);

        $client = new Client();
        $response = $client->post($url, [
            'body' => Config::get('weixin.menu')
        ]);

        return $response->getBody();
    }

    protected function menuDelete()
    {
        $url = sprintf('https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=%s', $this->access_token);

        $client = new Client();
        $response = $client->get($url);

        return $response->getBody();
    }
}