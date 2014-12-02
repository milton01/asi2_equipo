<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		

         
    
	}

	public function estatus()
	{
		$crud = new grocery_CRUD();
 
        $crud->set_table('marca');
        $output = $crud->render();
 
        //$this->load->view('welcome_message');
		$data['files'] = array('j1', 'j2', 'j3');
		$this->template->write('title', 'Prueba');
        $this->template->write('header', 'Formulario ingreso');
        $this->template->write_view('content', 'test/primera', $output);
        $this->template->write_view('scripts', 'master-scripts', $data );
        $this->template->render();            
	}


	public function estatus2()
	{
		$crud = new grocery_CRUD();
 
        $crud->set_table('cliente');
        $output = $crud->render();
 
        //$this->load->view('welcome_message');
		$data['files'] = array('j1', 'j2', 'j3');
		$this->template->write('title', 'Prueba');
        $this->template->write('header', 'Formulario ingreso');
        $this->template->write_view('content', 'test/primera', $output);
        $this->template->write_view('scripts', 'master-scripts', $data );
        $this->template->render();            
	}

	function _example_output($output = null)
 
    {
        $this->load->view('our_template.php',$output);    
    }    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */