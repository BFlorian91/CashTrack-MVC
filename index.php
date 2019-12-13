<?php

    require_once 'controller/Controller.php';
    require_once 'controller/ControllerHowMany.php';
    require_once 'model/ActionHowManyHave.php';
    require_once 'view/View.php';
    require_once 'view/HowManyHave.php';

    $app = Controller::routes();
    $app->start();
    echo $app->buildPage(); // error here !!!