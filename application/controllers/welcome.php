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
            $id_usuario = $this->Login_Model->id_usuario($username, $password);
            
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

<<<<<<< HEAD

	public function estatus()
=======
	public function mantto_cliente()
>>>>>>> 0248121ffbefc3b40fa205d5b8f02f5a8cfa5842
	{
<<<<<<< HEAD
	$crud = new grocery_CRUD();
        
        $crud->set_table('estatus');
        $crud->unset_jquery();
        $output = $crud->render();
 
        //$this->load->view('welcome_message');
	$data['files'] = array('j1', 'j2', 'j3');
	$this->template->write('title', 'Estados');
        $this->template->write('header', 'Registros de Estados');
        $this->template->write_view('menu', 'menu/menu_admin');
        $this->template->write_view('content', 'test/primera', $output);
        $this->template->write_view('scripts', 'master-scripts', $data );
        $this->template->render();            
=======
                    $crud = new grocery_CRUD();

            $crud->set_table('cliente');
            $crud->unset_jquery();
            $output = $crud->render();

            //$this->load->view('welcome_message');
                    $data['files'] = array('j1', 'j2', 'j3');
                    $this->template->write('title', 'Cliente');
            $this->template->write('header', 'Registro de cliente');
            $this->template->write_view('menu', 'menu/menu_admin');
            $this->template->write_view('content', 'test/primera', $output);
            $this->template->write_view('scripts', 'master-scripts', $data );
            $this->template->render();            
>>>>>>> origin/master
	}
        
        public function mantto_empleado()
	{
                    $crud = new grocery_CRUD();

            $crud->set_table('empleado');
            $crud->unset_jquery();
            $output = $crud->render();

            //$this->load->view('welcome_message');
                    $data['files'] = array('j1', 'j2', 'j3');
                    $this->template->write('title', 'Empleado');
            $this->template->write('header', 'Registro de empleado');
            $this->template->write_view('menu', 'menu/menu_admin');
            $this->template->write_view('content', 'test/primera', $output);
            $this->template->write_view('scripts', 'master-scripts', $data );
            $this->template->render();            
	}


	public function mantto_proveedor()
	{
                    $crud = new grocery_CRUD();

            $crud->set_table('proveedor');
            $output = $crud->render();

            //$this->load->view('welcome_message');
                    $data['files'] = array('j1', 'j2', 'j3');
                    $this->template->write('title', 'Proveedor');
            $this->template->write('header', 'Registro de proveedor');
            $this->template->write_view('menu', 'menu/menu_admin');            
            $this->template->write_view('content', 'test/primera', $output);
            $this->template->write_view('scripts', 'master-scripts', $data );
            $this->template->render();            
            }
        
        public function mantto_estados()
	{
	$crud = new grocery_CRUD();
 
        $crud->set_table('estatus');
        $output = $crud->render();
 
        //$this->load->view('welcome_message');
<<<<<<< HEAD
	$data['files'] = array('j1', 'j2', 'j3');
	$this->template->write('title', 'Empleado');
        $this->template->write('header', 'Empleado');
        $this->template->write_view('menu', 'menu/menu_admin');
        $this->template->write_view('content', 'test/primera', $output);
        $this->template->write_view('scripts', 'master-scripts', $data );
        $this->template->render();            
	}
        
        public function mantenimiento_empleado()
	{
	$crud = new grocery_CRUD();
 
        $crud->set_table('empleado');
        $crud->unset_jquery();
        $output = $crud->render();
 
        //$this->load->view('welcome_message');
	$data['files'] = array('j1', 'j2', 'j3');
	$this->template->write('title', 'Empleado');
        $this->template->write('header', 'Empleado');
        $this->template->write_view('menu', 'menu/menu_admin');
=======
		$data['files'] = array('j1', 'j2', 'j3');
		$this->template->write('title', 'Estados');
        $this->template->write('header', 'Registro de estados');
        $this->template->write_view('menu', 'menu/menu_admin');        
>>>>>>> origin/master
        $this->template->write_view('content', 'test/primera', $output);
        $this->template->write_view('scripts', 'master-scripts', $data );
        $this->template->render();            
	}
<<<<<<< HEAD

	public function estatus_cliente()
=======
        
        public function mantto_movimiento()
>>>>>>> origin/master
	{
	$crud = new grocery_CRUD();
 
        $crud->set_table('tipo_movimiento');
        $output = $crud->render();
 
        //$this->load->view('welcome_message');
<<<<<<< HEAD
	$data['files'] = array('j1', 'j2', 'j3');
	$this->template->write('title', 'Empleado');
        $this->template->write('header', 'Formulario Empleado');
        $this->template->write_view('menu', 'menu/menu_admin');
=======
		$data['files'] = array('j1', 'j2', 'j3');
		$this->template->write('title', 'Tipo movimiento');
        $this->template->write('header', 'Registro de tipo movimiento');
        $this->template->write_view('menu', 'menu/menu_admin');        
>>>>>>> origin/master
        $this->template->write_view('content', 'test/primera', $output);
        $this->template->write_view('scripts', 'master-scripts', $data );
        $this->template->render();            
	}
        
	function _example_output($output = null)
 
    {
        $this->load->view('our_template.php',$output);    
    }    
}
