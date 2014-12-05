<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function __construct() 
    {        
        parent::__construct();
        $this->load->model('Login_Model');
        $this->load->library(array( 'form_validation'));
        $this->load->helper('text');
    }

	public function index()
	{       
    if ($this->input->post('username') and $this->input->post('password')){
        // reglas de validación
            $username = $this->input->post('username');        
            $password = md5($this->input->post('password'));
            
            $rol=$this->Login_Model->validar_rol($username,$password);
            //$id_usuario = $this->Login_Model->id_usuario($username, $password);
            
            //$this->session->set_userdata('id_usuario', $id_usuario);
            
            if ($rol=="administrador") {
                redirect('roles/menu_admin');
                
            }else if ($rol=="cliente") {

                redirect('roles/menu_cliente');

            }else if ($rol=="bodeguero") {

                redirect('roles/menu_bodeguero');
                
            }else if ($rol=="televendedor") {
                
                redirect('roles/menu_telventa'); 
                
            }
    }else{                
                
                $this->load->view('login'); 
            
    }
  }
  
    public function mantto_cliente()
    {

	$crud = new grocery_CRUD();
        
        $crud->set_table('cliente');
        $crud->unset_jquery();
        $output = $crud->render();
      
	$data['files'] = array('j1', 'j2', 'j3');
	$this->template->write('title', 'Clientes');
        $this->template->write('header', 'Consulta de Clientes');
        $this->template->write_view('menu', 'menu/menu_admin');
        $this->template->write_view('content', 'test/primera', $output);
        $this->template->write_view('scripts', 'master-scripts', $data );
        $this->template->render();
        
    }
        
    public function mantto_empleado()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('empleado');
        $crud->unset_jquery();
        $output = $crud->render();
        
        $data['files'] = array('j1', 'j2', 'j3');
        $this->template->write('title', 'Empleados');
        $this->template->write('header', 'Consulta de Empleados');
        $this->template->write_view('menu', 'menu/menu_admin');
        $this->template->write_view('content', 'test/primera', $output);
        $this->template->write_view('scripts', 'master-scripts', $data );
        $this->template->render();            
    }

    public function mantto_proveedor()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('proveedor');
        $crud->unset_jquery();
        $output = $crud->render();
        
        $data['files'] = array('j1', 'j2', 'j3');
        $this->template->write('title', 'Proveedores');
        $this->template->write('header', 'Consulta de Proveedores');
        $this->template->write_view('menu', 'menu/menu_admin');            
        $this->template->write_view('content', 'test/primera', $output);
        $this->template->write_view('scripts', 'master-scripts', $data );
        $this->template->render();            
    }
        
    public function mantto_estados()
    {
	$crud = new grocery_CRUD();
 
        $crud->set_table('estatus');
        $crud->unset_jquery();
        $output = $crud->render();
 
	$data['files'] = array('j1', 'j2', 'j3');
	$this->template->write('title', 'Estados');
        $this->template->write('header', 'Consulta de Estados');
        $this->template->write_view('menu', 'menu/menu_admin');
        $this->template->write_view('content', 'test/primera', $output);
        $this->template->write_view('scripts', 'master-scripts', $data );
        $this->template->render();            
    }
    
    public function mantto_movimiento()
    {
	$crud = new grocery_CRUD();
 
        $crud->set_table('tipo_movimiento');
        $crud->unset_jquery();
        $output = $crud->render();
 
	$data['files'] = array('j1', 'j2', 'j3');
	$this->template->write('title', 'Movimientos Inventario');
        $this->template->write('header', 'Consulta de Movimientos de Inventario');
        $this->template->write_view('menu', 'menu/menu_admin');     
        $this->template->write_view('content', 'test/primera', $output);
        $this->template->write_view('scripts', 'master-scripts', $data );
        $this->template->render();            
	}
        
	function _example_output($output = null)
 
    {
        $this->load->view('our_template.php',$output);    
    }    
}
