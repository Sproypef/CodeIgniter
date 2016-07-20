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
    //echo $this->blade->view()->make('home', ['name' => 'pepe', 'users' => ['juan', 'pepe', 'andrés']])->render();

    //Whitout parameters
    echo $this->blade->view()->make('home')->render();
  }
}
