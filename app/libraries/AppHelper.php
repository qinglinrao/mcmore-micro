<?php

class AppHelper {

    const ENC_UTF8 = 'utf8';

    static public function asset($path) {
        return URL::asset(Config::get('app.static_domain') . $path);
    }

    static public function captcha($class = '') {
        $html = '<img id="captcha-img" src="' . Captcha::img() . '" class="' . $class . '" onclick="refresh_captcha()"/>';
        $html .= '<script type="text/javascript">function refresh_captcha(){jQuery("#captcha-img").attr("src","/captcha?"+Math.ceil(Math.random()*100000))}</script>';
        return $html;
    }

    /**
     * Make the string with ellipse character if it exceeds the demanded length
     * @param $str String to be operated on
     * @param $len Demand length
     * @param $ellipse_char Ellipse characer
     * @return If the string's length is larger than the $len, it'll be first trim to strlen($str) - $strlen($ellipse_char), and then join the $ellipse_char
     *      , or the original string returns
     */
    public static function ellipse(/* String */ $str, $len = 12, $ellipse_char = '...') {
        $ellipse_char_len = mb_strlen($ellipse_char, self::ENC_UTF8);
        $trim_to_len = $len - $ellipse_char_len;
        return mb_strlen($str, self::ENC_UTF8) > $len ? mb_substr($str, 0, $trim_to_len, self::ENC_UTF8) . $ellipse_char : $str;
    }

    /**
     * Common Image tag
     * @param $url Url of the image
     * @param $alt Alt attribute value
     * @param $options Other options
     * @return Return HTML to the image. Or null if nothing
     */
    public static function img(/* String */ $url, $alt = null, $options = array()) {
        $type = AppHelper::getOption($options, 'type') ? AppHelper::getOption($options, 'type') : 'c';
        $width = AppHelper::getOption($options, 'width');
        $height = AppHelper:: getOption($options, 'height');
        $alter_url = AppHelper::getOption($options, 'alter_url') ? AppHelper::getOption($options, 'alter_url') : 'sunnsoft/images/default.jpg';
        $combined_url = isset($url) ? $url : $alter_url;
        if ($width && $height && Config::get('app.image_domain')) {
            $size_url = "/$type/{$width}x{$height}/";
        } else {
            $size_url = '/';
        }
        $fixed_url = URL::asset(Config::get('app.image_domain') . $size_url . $combined_url);
        return HTML::image($fixed_url, $alt, $options);
    }

    public static function imgSrc(/* String */ $url, $options = array()) {
        $type = AppHelper::getOption($options, 'type') ? AppHelper::getOption($options, 'type') : 'c';
        $width = AppHelper::getOption($options, 'width');
        $height = AppHelper:: getOption($options, 'height');
        $alter_url = AppHelper::getOption($options, 'alter_url');
        $combined_url = $url ? $url : $alter_url;
        if ($width && $height && $type) {
            $size_url = "/$type/{$width}x{$height}/";
        } else {
            $size_url = '';
        }
        $fixed_url = URL::asset(Config::get('app.image_domain') . $size_url . $combined_url);
        return $fixed_url;
    }

    /**
     * Get option value from options
     * @param $options Option values
     * @param $key Option key
     * @param $default If option has not cotain key, this value will be returned instead
     * @return $options[$key] or $default if previous is null
     */
    public static function getOption($options, $key, $default = null) {
        return key_exists($key, $options) ? array_pull($options, $key) : $default;
    }

    /**
     * Get page tdk
     * @param string $name "title","keywords" or "description"
     */
    public static function tdk($name, $article) {

        $$name = Seo::get($name);
        switch ($name) {
            case 'title':
                return ($$name ? $$name : $article->name) . '-' . Config::get('app.sitename');
                break;
            case 'keywords':
                return $$name;
                break;
            case 'description':
                return $$name ? $$name : self::ellipse($article->brief, 125);
                break;
        }
    }

    /**
     *
     * @param array $array
     * @param string $type
     */
    public static function assets($array = array(), $type = '.css') {
        $assets = '';
        if (!Config::get('app.debug')) {
            if ($type == '.css') {
                foreach ($array as $k => $asset) {
                    $array[$k] = HTML::style($asset);
                }
            } else if ($type == '.js') {
                foreach ($array as $k => $asset) {
                    $array[$k] = HTML::script($asset);
                }
            }

            $assets = implode('', $array);
        } else {
            if ($type == '.css') {
                $assets = HTML::style(Minify::combine($array, '.css'));
            } else if ($type == '.js') {
                $assets = HTML::script(Minify::combine($array, '.js'));
            }
        }

        return $assets;
    }

    public static function sitemapUrl($loc, $changefreq = 'weekly', $priority = '0.7') {
        $lastmod = Carbon::now()->toDateString();
        $url = "<url>\r\n";
        $url .="<loc>$loc</loc>\r\n";
        $url .="<lastmod>$lastmod</lastmod>\r\n";
        $url .="<changefreq>$changefreq</changefreq>\r\n";
        $url .="<priority>$priority</priority>\r\n";
        $url .="</url>\r\n";
        return $url;
    }

    public static function outputAttr($attrsArray,$code){
        $attrs = array();
        // $count = $attrsArray->count();
        if(!$attrsArray) return;

        foreach($attrsArray as $attr){
            if($attr->group && $attr->group->code == $code)
                array_push($attrs, $attr->name);
        }
        return implode('，', $attrs);
    }

    /**
     * 输出过滤链接
     * @param array $filter_ids  当前选中的过滤项id数组
     * @param object $filter 过滤项对象
     * @param object $group_filters 本组过滤项集合
     */
    public static function filterUrl($filter_ids,$filter_id,$group_filters){
        //d($group_filters->lists('id'));exit;
        $filter_ids = array_diff($filter_ids,$group_filters->lists('id'));
        if($filter_id > 0)
            array_push($filter_ids,$filter_id);
        sort($filter_ids);

        return URL::route('cases',  implode('_', $filter_ids));
    }



    /**
     * 递归所有筛选链接，for sitemap.xml
     */

    public static function getFilterUrls($attrGroups, $count, $key, $filter_ids = [], &$sitemap){

        if ($key >= $count) return;
        $key ++;

        foreach($attrGroups[$key-1]->attributes as $attribute){
            $filter_ids = array_diff($filter_ids,$attrGroups[$key-1]->attributes->lists('id'));
            array_push($filter_ids,$attribute->id);
            sort($filter_ids);
            $sitemap[] = AppHelper::sitemapUrl(URL::route('cases',  implode('_', $filter_ids)), 'weekly', '0.7');
            self::getFilterUrls($attrGroups, $count, $key, $filter_ids, $sitemap);
        }

    }


}
