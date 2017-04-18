<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sidebar extends CI_Controller {

    public function __construct()
    {
	//parent::__construct();
        $this->CI = & get_instance();
    }

    public function index()
    {
        
    }
    
    public function head($params)
    {
        $param['head'] = $params;
        $this->CI->load->view('Sidebar/head', $param);
    }
}