<?php

class ControllerAddMoney extends Controller
{
    private $_action;

    public function __construct()
    {
        $this->_action = null;
        $this->_view = new ViewAddMoney();
    }
    public function start()
    {
        $this->_action = new ActionAddMoney();
        $this->_action->addMoneyToAccount();
        $this->_view->buildPage();
    }
}
