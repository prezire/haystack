<?php 
  if(!defined('BASEPATH')) exit('No direct script access allowed');
  class Analytics extends CI_Controller 
  {
  	public function __construct()
  	{
  		parent::__construct();
      $this->load->model('analyticsmodel');
  	}
    public final function index()
    {
      //
    }
    public final function export($filename)
    {
      //$this-
    }
    public final function generate()
    {

    }
  }