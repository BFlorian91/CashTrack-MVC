<?php

    class ActionAddSpent
    {

        protected $_file;
        protected $_totalSpent;
        protected $_totalAccount;

        public function __construct($totalAccount = null)
        {
            $this->_file = 'data/datasSpent.txt';
            $this->_totalSpent = null;
            $this->_totalAccount = $totalAccount;
        }

        public function removeMoneyFromAccount()
        {
            if (isset($_POST['spent']) && $_POST['spent'] !== '') {
                $spent= [];
                $datas = unserialize(file_get_contents($this->_file));
                if (!empty($datas)) {
                    $spent['nameOfSpent'] = $_POST['nameOfSpent'];
                    $spent['spent'] = $_POST['spent'];
                    $spent['date'] = date("Y-m-d H:i:s");
                }
                $this->_totalAccount -= $spent['spent'];
                $datas[] = $spent;
                file_put_contents($this->_file, serialize($datas));
            }
        }

        public function getTotalAccount()
        {
            return $this->_totalAccount;
        }
    }