<?php

    class ControllerAddSpent extends Controller
    {
        private $_action;

        public function __construct()
        {
            $this->_action = null;
            $this->_view = new ViewAppSpent();
        }

        public function start()
        {
            $this->action = new ActionAddSpent();
            $this->action->removeMoneyFromAccount();
            $this->_view->buildPage();
        }
    }