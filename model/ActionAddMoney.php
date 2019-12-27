<?php

    class ActionAddMoney
    {
        private $_file;
        private $_total;

        
        public function __construct()
        {
            $this->_file = 'datas/datasAdd.txt';
            $this->_total = null;
        }

        public function addMoneyToAccount()
        {
            if (isset($_POST['account1']) && isset($_POST['account2']) && isset($_POST['salary1']) && isset($_POST['salary2'])) {
                if ($_POST['account1'] !== '' && $_POST['account2'] !== '' && $_POST['salary1'] !== '' && $_POST['salary2'] !== '') {
                    $this->_total = $_POST['account1'] + $_POST['salary1'] + $_POST['account2'] + $_POST['salary2'];
                    file_put_contents($this->_file, $this->_total);
                }
            }
        }
    }
    