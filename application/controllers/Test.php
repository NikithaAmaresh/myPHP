<?php 
   class Test extends CI_Controller {
      public function __construct()
      {
         parent::__construct();
         //
         
         
         
         
         $this->load->database();
         $this->load->helper('url');
      }
  
      public function index() { 

         echo "Hello World!"; 
         $this->load->view('test');
      } 

      public function login(){
         $username = $this->input->post('username');  
         $password = $this->input->post('password');  
         echo $username;
      }

   } 
?>
