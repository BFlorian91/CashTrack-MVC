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

            <title>Finance</title>
        </head>
        <body>
            <div class="container">
        <?php
    }

    public function menu()
    { ?>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top py-4 bg-dark" id="main-nav">
        <a href="index.php?" class="navbar-brand">
          <h3 class="d-inline align-middle">Finance</h3>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div style="height: 125px;"></div>
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