<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index(){
        $this ->load ->view('admin/admin_index1');
    }
    public function login(){
        $this ->load ->view('admin/admin_login');
    }
    public function mgr_category(){
    	$this ->load ->view ('admin/admin_category');
    }
}