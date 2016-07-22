<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends SY_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    //With parameters
    $breadcrumb = array(
      ['name' => 'Home', 'href' => '#'],
      ['name' => 'Dashboard', 'href' => '#']
    );
    echo $this->blade->view()->make('home', ['breadcrumb' => $breadcrumb])->render();

    //Whitout parameters
    //echo $this->blade->view()->make('home')->render();
  }
}
