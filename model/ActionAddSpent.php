<?php

    class ActionAddSpent
    {

        protected $_file;
        protected $_totalSpent;

        public function __construct()
        {
            $this->_file = 'data/database.txt';
            $this->_totalSpent = null;
        }

        public function removeMoneyFromAccount()
        {
            if (isset($_POST['spent']) && $_POST['spent'] !== '') {
                $open = file_get_contents($this->_file);
                $spent = file_put_contents();
                $this->_totalSpent = $open;
                die($this->_totalSpent);
            }
        
        }
    }