<?php

    class ControllerHowMany extends Controller
    {

        private $_view;
        private $_action;

        public function __construct()
        {
            $this->_view = new HowManyHave();
            $this->_action = null;
        }
        public function start()
        {
            $this->_action = new ActionAddMoney();
            $this->_action->addMoneyToAccount(); 
        }
    }