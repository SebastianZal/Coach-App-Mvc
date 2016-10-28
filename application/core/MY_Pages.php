<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class MY_Pages extends CI_Controller
{
        
        
        function __construct() {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
        $this->load->library('session');
        
    }
    
    public function index()
    {
        
        $this->view();
    }
    
        public function full_view($page,$data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
    
    
    public function view($page='home',&$data=[] )
    {

        $data['title'] = ucfirst($page);
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                show_404();
        }
        else
        {
            $this->full_view($page,$data);
        }
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

