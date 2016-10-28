<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Register extends MY_Pages
{
    
    public function __construct() {
        parent::__construct();

    }
    public function rejestruj()
    {
        
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email','E-mail','required|trim|valid_email');
        $this->form_validation->set_rules('firstname','Imie','required|trim|alpha');
        $this->form_validation->set_rules('lastname','Nazwisko','required|trim|alpha');
        $this->form_validation->set_rules('password1','Haslo','required|trim');
        
        if($this->form_validation->run()=== FALSE ||$this->input->post('password1')!=$this->input->post('password2'))
        {
                
                redirect('home');
                
        }
        else
        {
            $register_array=array(
                'email'=>$this->input->post('email'),
                'firstname'=>$this->input->post('firstname'),
                'lastname'=>$this->input->post('lastname'),
                'password'=> password_hash($this->input->post('password1'),PASSWORD_BCRYPT),
            );
            
            $user_exist = $this->Database_m->user_check($register_array['email']);
            if($user_exist==TRUE)
            {
                $this->Database_m->new_user($register_array);
                $this->session->set_flashdata('msg','Rejestracja przebiegla pomyslnie');
                redirect('info');
                
            }
            else
            {
                $this->session->set_flashdata('msg','Uzytkownik o podanym adresie email juz istnieje');
                redirect('info');
                
            }
        }
        
    }
    public function login()
    {
        
        
        if(isset($_POST['adres'])&& isset($_POST['pass']))
        {
                    
            $login_array=  ['email'=>$this->input->post('adres', TRUE),
                    'password'=>($this->input->post('pass',TRUE))
                    ];
            $zalogowany=$this->Database_m->login_check($login_array);

            if($zalogowany===NULL)
            {
                $data['info']="Niepoprawny adres email lub hasło";
                $this->view('info', $data);
            }
            else
            {
                $user = [
                    'email'=>$zalogowany['email'],
                    'firstname'=>$zalogowany['firstname'],
                    'logged_in' => TRUE
                ];
                $this->session->set_userdata($user);
                redirect('home');
                
            }
        }
        else 
        {
            redirect('home');
        }
    }
    public function logout()
    {
        
        $this->load->helper('url');
        $this->session->sess_destroy();
        redirect('home');
    }
    public function proba($data)
    {
        echo $data;
    }
}