<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Philo\Blade\Blade;
class SY_Controller extends CI_Controller
{
    protected $blade;
    protected $views = APPPATH . '/views';
    protected  $cache = APPPATH . '/cache';
    public function __construct()
    {
        parent::__construct();

        //Blade object
        $this->blade = new Blade($this->views, $this->cache);
        $this->blade->view()->composer("*", function($view)
        {
            $view->with("session", $this->session);
            $view->with("uri", $this->uri);
        });
        //Blade end

        //Breadcrumb
        $CI    =& get_instance();
        $class = $CI->router->fetch_class();
        $method = $CI->router->fetch_method();
        $this->breadcrumb = array(
          ['name' => ucfirst($class) , 'href' => '#'],
          ['name' => ucfirst($method) , 'href' => '#'],
        );
        //Breadcrumb end
    }
}
