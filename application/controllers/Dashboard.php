<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        ceklogin();
       
    }
    
    function index(){
       $this->template->load('template/master' , 'utama');
    }
}