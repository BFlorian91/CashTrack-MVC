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
            $this->_view->setAccount(file_get_contents('data/datasADD.txt'));
            $this->_action = new ActionAddSpent($this->_view->getAccount());
            $this->_action->removeMoneyFromAccount();
            $this->_view->setAccount($this->_action->getTotalAccount());
            $this->putInAdd($this->_action->getTotalAccount());
            $this->_view->buildPage();
        }
    }