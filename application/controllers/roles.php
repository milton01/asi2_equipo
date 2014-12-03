<?php

class Roles extends CI_Controller{
 
    public function menu_admin() {
        
        $this->template->write('title', 'Administraci&oacute;n');
        $this->template->write('header', 'Administraci&oacute;n');
        $this->template->write_view('menu', 'menu/menu_admin');
        $this->template->write_view('scripts', 'master-scripts');
        $this->template->render();       
        //$this->load->view('menu/menu_admin');
    }
    public function menu_telventa() {
        $this->template->write('title', 'Televentas');
        $this->template->write('header', 'Televentas');
        $this->template->write_view('menu', 'menu/menu_telventa');
        $this->template->write_view('scripts', 'master-scripts');
        $this->template->render();
        //$this->load->view('menu/menu_telventa');
    }
    public function menu_bodeguero() {
        $this->template->write('title', 'Bodegas');
        $this->template->write('header', 'Bodegas');
        $this->template->write_view('menu', 'menu/menu_bodega');
        $this->template->write_view('scripts', 'master-scripts');
        $this->template->render();
        //$this->load->view('menu/menu_bodega');
    }
    public function menu_cliente() {
        $this->template->write('title', 'Cliente');
        $this->template->write('header', 'Cliente');
        $this->template->write_view('menu', 'menu/menu_cliente');
        $this->template->write_view('scripts', 'master-scripts');
        $this->template->render();
        //$this->load->view('menu/menu_cliente');
    }
}
