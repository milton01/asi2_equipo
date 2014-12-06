<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['codigo_producto'] = 1111;
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