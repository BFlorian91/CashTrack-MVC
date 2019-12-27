<?php

class View 
{

    protected $_htmlElement;

    public function __construct()
    {
        $this->_htmlElement = null;
    }

    public function headerPage()
    {
         ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/fd29e2acd0.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" crossorigin="anonymous"></script>
            <!-- Material Design Bootstrap -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
            <!-- JQuery -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>

            <title>Finance</title>
        </head>
        <body style="background-color: #272C34; color: white;">
            <div class="container">
        <?php
    }

    public function menu()
    { ?>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top py-4" style="background-color: #1F222A;" id="main-nav">
        <a href="index.php?" class="navbar-brand">
          <h3 class="d-inline align-middle">Finance</h3>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="ml-auto">
            <a class="mr-4 text-white" href="index.php?page=addmoney" role="button">Money</a>
            <a class="mr-4 text-white" href="index.php?page=addspent">Spent</a>
            <a class="mr-4 text-white" href="index.php?page=chart" role="button">Chart</a>
            <!-- <div class="col-xl-5 col-md-4 mb-3 text-center"> -->
              <img src="https://cdn.intra.42.fr/users/medium_flbeaumo.jpg" width="50" class="img-fluid z-depth-1 rounded" alt="pp">
            <!-- </div> -->
        </div>
    </nav>
    <div style="height: 125px;"></div>
    <div class="container">

    <?php
    }

    public function bodyPage()
    { ?>
      <?php
    }

    public function footerPage()
    { ?>
            </div>
        </body>
        </html>
      <?php
    }

    public function buildPage()
    {
        $this->_htmlElement = $this->headerPage();
        $this->_htmlElement .= $this->menu();
        $this->_htmlElement .= $this->bodyPage();
        $this->_htmlElement .= $this->footerPage();
        return $this->_htmlElement;
    }

}