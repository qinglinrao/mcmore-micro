<?php

class BaseController extends Controller {

    function __construct()
    {
        //自定义UrlGenerator
        App::bind('url', function($app) {
            return new CustUrlGenerator($app['router']->getRoutes(), $app->rebinding('request', function($app, $request) {
                        $app['url']->setRequest($request);
                    }));
        });
        
        if (!Request::ajax()) {
            Breadcrumbs::addCrumb('麦多商城系统', URL::to('http://www.mcmore.com/'));
            Breadcrumbs::setDivider('>');
            Breadcrumbs::addCssClasses('list-unstyled list-inline');
            $slides = Menu::getList()->orderBy('id','desc')->get();

            foreach ($slides as $slide) {
                if (preg_match("/^{$slide->code}$/", Request::path())) {
                    View::share('slide', $slide);
                    break;
                }
            }

            View::share('footer_menus', Menu::getList('footer')->get());
        }


    /*底部自定义URL*/
    $menus = Menu::where('menu_type_id','=','2')->orderBy('id','desc')->get();
        //友情链接
        $friendly_links = Menu::where('menu_type_id','=','4')->orderBy('priority','desc')->get();

        View::share('menus',$menus);
        View::share('friendly_links',$friendly_links);
    }

    protected function caseAttributes()
    {
        $attribute_groups = AttributeGroup::cases()->with('attributes')->get();

        foreach($attribute_groups as $attribute_group) {
            $case_attributes[$attribute_group->code] = $attribute_group;

            foreach($attribute_group->attributes as $attribute) {
                $case_attributes[$attribute_group->code][$attribute->id] = $attribute;
            }
        }

        View::share('case_attributes', $case_attributes);
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }


}
