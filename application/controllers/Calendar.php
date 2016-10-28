<?php
class Calendar extends MY_Pages
{
    public function __construct() {
        parent::__construct();
        
    }
    public function generate_cal($year=null,$month=null)
    {
        $this->load->model('calendar_m');
        $data['calendar']=$this->calendar_m->generate($year,$month);
        $this->view('calendar',$data);
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

