<?php

  class ControllerHome extends Controller
  {

    protected $_view;

    public function __construct()
    {
      $this->_view = new ViewHome();
    }

    public function start()
    {
      $this->_view->buildPage();
    }
  }