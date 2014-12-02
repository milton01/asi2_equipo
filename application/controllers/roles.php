<?php

class Roles extends CI_Controller{
 
    public function menu_admin() {
        
        $this->load->view('menu/menu_admin');
    }
    public function menu_telventa() {
       
        $this->load->view('menu/menu_telventa');
    }
    public function menu_bodeguero() {
       
        $this->load->view('menu/menu_bodega');
    }
    public function menu_cliente() {
       
        $this->load->view('menu/menu_cliente');
    }
}
