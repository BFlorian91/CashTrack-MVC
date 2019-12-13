<?php

    class ActionAddMoney
    {
        protected $_file;
        protected $_total;

        
        public function __construct()
        {
            $this->_file = 'data/database.txt';
            $this->_total = null;
        }

        public function addMoneyToAccount()
        {
            if (isset($_GET['account1']) && isset($_GET['account2']) && isset($_GET['salary1']) && isset($_GET['salary2'])) {
                $this->_total = $_GET['account'] + $_GET['salary'];
                file_put_contents($this->_file, $this->_total);
            }
        }
    }
    