<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productos extends CI_Controller {

	private $carrito;
	private $detalle_pedido; //
	private $pedido; //  
	private $fecha;
	public function __construct()
	{
		parent::__construct();
		$this->load->model( 'carrito_model' ); 
		$this->carrito = $this->carrito_model;
		//Cargando modelo de acceso a datos
		$this->load->model( 'detalle_pedido_model' );
		//Inicializando propiedades
		$this->detalle_pedido = $this->detalle_pedido_model;
		//Cargando modelo de acceso a datos
		$this->load->model( 'pedido_model' );
		//Inicializando propiedades
		$this->pedido = $this->pedido_model;
		$this->fecha = date('y-m-d');
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

	public function finalizado()
	{
		if ( $this->input->server('REQUEST_METHOD') === 'POST' ) { 

			// Asignar valores a las propiedades de la clase Pedido__model para acceso de datos
			$this->pedido->fecha_v    = $this->fecha; // 
			$this->pedido->fecha_p    = $this->fecha;; // 
			$this->pedido->forma_pago = $this->input->post( 'forma_pago' ); // 
			$this->pedido->docto      = null; // 
			$this->pedido->motivo_r   = null; // 
			$this->pedido->status_id  = 1; // 
			$this->pedido->cliente_id = $this->session->userdata('id_usuario'); // 
			$this->pedido->docto_id   = null; // 
			// Insertar
			$resultado = (int)$this->pedido->insertar();
			$productos_solicitados = $this->input->post('productos');

			foreach ($productos_solicitados as $pro) {
				$propiedades = explode(",", $pro);
				var_export($pro);
				// Asignar valores a las propiedades de la clase Detalle_Pedido__model para acceso de datos
				$this->detalle_pedido->cantidad   = $propiedades[1]; // 
				$this->detalle_pedido->codigoprod = $propiedades[0]; // 
				$this->detalle_pedido->pedido_id  = $resultado; // 
				// Insertar
				$this->detalle_pedido->insertar();
			}
			
		}
		
		$data['productos_seleccionados'] = $this->input->post('productos'); 
		
		$this->template->write('title', 'Productos');
        $this->template->write('header', 'Pedido Finalizado');
        $this->template->write_view('menu', 'menu/menu_cliente');
        $this->template->write_view('content', 'productos/finalizado', $data);
        $this->template->write_view('scripts', 'master-scripts');
        $this->template->render();  
	}



}

/* End of file productos.php */
/* Location: ./application/controllers/productos.php */