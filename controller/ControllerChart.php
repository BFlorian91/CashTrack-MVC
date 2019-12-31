<?php

  class ControllerChart extends Controller
  {
    protected $_view;
    // protected $_action;

    public function __construct()
    {
      $this->_view = new ViewChart();
      // $this->_action = new ActionGetData();
    }

    public function start()
    {
      // $this->_action->get_data();
      $this->_view->buildPage();
    }
  }