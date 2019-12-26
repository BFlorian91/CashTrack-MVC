<?php

    class Controller
    {
        protected $_view;

        public function __construct()
        {
            $this->_view = null;
        }

        public static function routes()
        {
            $page = isset($_GET['page']) ? $_GET['page'] : null;
            switch($page) {
                case 'addmoney':
                    $ctrl = new ControllerAddMoney();
                break;
                case 'addspent':
                    $ctrl = new ControllerAddSpent();
                break;
                case 'home':
                    $ctrl = new ControllerHome();
                break;
                default:
                    $ctrl = new ControllerHome();
                break;
            }
            return $ctrl;
        }

        public function start()
        {
            
        }

        public function getView()
        {
            return $this->_view;
        }

        public function putInAdd($path)
        {
            file_put_contents('data/datasAdd.txt', $path);
        }
    }