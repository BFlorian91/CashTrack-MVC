<?php

    require_once 'view/View.php';
    require_once 'view/ViewAddMoney.php';
    require_once 'view/ViewAddSpent.php';
    require_once 'view/ViewChart.php';
    require_once 'view/ViewHome.php';
    require_once 'model/ActionAddMoney.php';
    require_once 'model/ActionAddSpent.php';
    require_once 'model/ActionGetData.php';
    require_once 'controller/Controller.php';
    require_once 'controller/ControllerAddMoney.php';
    require_once 'controller/ControllerAddSpent.php';
    require_once 'controller/ControllerHome.php';
    require_once 'controller/ControllerChart.php';

    $app = Controller::routes();
    $app->start();
    $app->getView();