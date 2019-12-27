<?php

  class ActionGetData
  {
    private $_file;

    public function __construct()
    {
      $this->_file = file('./datas/datas.csv');
    }

    public function get_data()
    {
      foreach($this->_file as $value) {
        $csv = explode(';', $value);
      }
        print_r(json_encode($csv));
        return(json_encode($csv));
    }
  }