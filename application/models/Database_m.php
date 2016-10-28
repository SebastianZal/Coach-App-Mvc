<?php
 class Database_m extends CI_Model 
{
     public function nowy_obiekt($tabela,$dane)
     {
         $this->db->insert($tabela,$dane);
     }
     public function load_users()
     {
         $query = $this->db->query('SELECT * FROM Users;');
         
         if($query->num_rows() >0)
         {
             return $query->result();
         }
         else
         {
            return NULL;
         }
     }
     public function new_user($user)
     {
         $sql=$this->db->insert_string('Users',$user);
         $query = $this->db->query($sql);
         
         if($query === TRUE)
         {
             return TRUE;
         }else
         {
             $last_query = $this->db->last_query();
             return $last_query;
         }
     }
     public function user_check($adress)
     {
         //$adress = mysqli_real_escape_string($adress);
         
         $query = $this->db->query("SELECT * FROM Users WHERE email='$adress'");
         if($query->num_rows() ==0)
         {
             return TRUE;
         }
         else
         {
            return FALSE;
         }
     }
     public function login_check($dane)
     {
         $email=$dane['email'];
         $pass=$dane['password'];
         $query = $this->db->query("SELECT * FROM Users WHERE email='$email'");
          if($query->num_rows() ===0)
         {
             return NULL;
         }
         else
         {
//             $this->db->select('password');
//             $this->db->where('email',$email);
//             $this->db->from('Users');
             
             $passquery=$this->db->query("SELECT password FROM Users WHERE email='$email'");
             $hash=$passquery->row_array();
             if(password_verify($pass,$hash['password']))
             {
                 $session = $this->db->query("SELECT firstname,email FROM Users WHERE email='$email'");
                 return $session->result();
             }
             else
             {
                 return NULL;
             }
         }
     }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

