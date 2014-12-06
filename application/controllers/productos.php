<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productos extends CI_Controller {

	private $carrito;
	public function __construct()
	{
		parent::__construct();
		$this->load->model( 'carrito_model' ); 
		$this->carrito = $this->carrito_model;
	}

	public function index()
	{
		$data[ 'productos' ] = $this->carrito->mostrar();
		$data['files'] = array('productos.js');
		$this->template->write('title', 'Productos');
        $this->template->write('header', 'Catalogo De Productos');
        $this->template->write_view('menu', 'menu/menu_cliente');
        $this->template->write_view('content', 'productos/catalogo', $data);
        $this->template->write_view('scripts', 'master-scripts');
        $this->template->render();         
	}



}

/* End of file productos.php */
/* Location: ./application/controllers/productos.php */