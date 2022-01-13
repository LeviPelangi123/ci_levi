<?php

class Mata_Pelajaran extends CI_Controller{

   function senin(){
    $this->load->view('v_fisika');
   }

   function selasa(){
    $this->load->view('v_matematika');
   }

   function rabu(){
    $this->load->view('v_indonesia');
   }
   function kamis(){
    $this->load->view('v_ppkn');
   }

   function jumat(){
    $this->load->view('v_inggris');
   
 }
}

?>