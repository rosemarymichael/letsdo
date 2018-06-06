<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class My_Controller extends CI_Controller
{
  protected $data = array();
  function __construct()
  { 
    parent::__construct();
    $this->data['pagetitle'] = 'Project Handler';

  }
 
}
