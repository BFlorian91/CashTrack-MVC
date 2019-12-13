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
        ob_start(); ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <title>Finance</title>
        </head>
        <body>
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
        $this->_htmlElement .= $this->bodyPage();
        $this->_htmlElement .= $this->footerPage();
        return $this->_htmlElement;
    }

}