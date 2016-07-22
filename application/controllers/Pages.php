<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends SY_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->breadcrumb = array(
      ['name' => 'Home', 'href' => '#'],
      ['name' => 'Dashboard', 'href' => '#']
    );
    echo $this->blade->view()->make('home', ['breadcrumb' => $breadcrumb])->render();
  }

  public function layout($type)
  {
    switch ($type) {
      case 'top-nav':
        echo $this->blade->view()->make('pages.layout.top-nav', ['breadcrumb' => $this->breadcrumb])->render();
        break;

      case 'boxed':
        echo $this->blade->view()->make('pages.layout.boxed', ['breadcrumb' => $this->breadcrumb])->render();
        break;

      case 'fixed':
        echo $this->blade->view()->make('pages.layout.fixed', ['breadcrumb' => $this->breadcrumb])->render();
        break;

      case 'collapse-sidebar':
        echo $this->blade->view()->make('pages.layout.collapse-sidebar', ['breadcrumb' => $this->breadcrumb])->render();
        break;

      default:
        echo $this->blade->view()->make('home')->render();
        break;
    }
  }
}
