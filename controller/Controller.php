<?php

    class Controller
    {
        public static function routes()
        {
            switch($_GET['page']) {
                case 'index':
                case '':
                    $ctrl = new ControllerHowMany();
                    break;
            }
            return $ctrl;
        }

        public function start()
        {

        }
    }