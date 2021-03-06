<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cliente extends CI_Controller {
	private $usuario; // 
	private $cliente; //
	public function __construct()
	{
		parent::__construct();
		//Cargando modelo de acceso a datos
		$this->load->model( 'usuario_model' );
		//Inicializando propiedades
		$this->usuario = $this->usuario_model;
		$this->load->model( 'cliente_model' );
		//Inicializando propiedades
		$this->cliente = $this->cliente_model;
	}

	public function index()
	{
		
	}
        
    public function olvido_password()
	{
            $this->load->view('cliente/forgot_password');
	}

	public function nuevo($estado = null)
	{

		$data['estado_registro'] = $estado;
		$this->load->view('cliente/nuevo', $data);
	}

	public function registrar()
	{
		// Verificar metodo de peticion del servidor
		if ( $this->input->server('REQUEST_METHOD') === 'POST' ) { 

			// Asignar valores a las propiedades de la clase Usuario__model para acceso de datos
			$this->usuario->nombre       = $this->input->post( 'nombre' ); // 
			$this->usuario->password     = md5( $this->input->post( 'password' ) ); // 
			$this->usuario->tipo         = $this->input->post( 'tipo' ); // 
			// Insertar
			$usuario_id                  = (int)$this->usuario->insertar();
			//
			// Asignar valores a las propiedades de la clase Cliente__model para acceso de datos
			$this->cliente->nit          = $this->input->post( 'nit' ); // 
			$this->cliente->dui          = $this->input->post( 'dui' ); // 
			$this->cliente->registro     = $this->input->post( 'registro' ); // 
			$this->cliente->giro         = $this->input->post( 'giro' ); // 
			$this->cliente->nombre_j     = $this->input->post( 'nombre_j' ); // 
			$this->cliente->nombre_c     = $this->input->post( 'nombre_c' ); // 
			$this->cliente->contacto     = $this->input->post( 'contacto' ); // 
			$this->cliente->telefono_1   = $this->input->post( 'telefono_1' ); // 
			$this->cliente->telefono_2   = $this->input->post( 'telefono_2' ); // 
			$this->cliente->celular      = $this->input->post( 'celular' ); // 
			$this->cliente->fax          = $this->input->post( 'fax' ); // 
			$this->cliente->correo       = $this->input->post( 'correo' ); // 
			$this->cliente->tipo         = $this->input->post( 'tipo' ); // 
			$this->cliente->categoria    = $this->input->post( 'categoria' ); // 
			$this->cliente->direccion    = $this->input->post( 'direccion' ); // 
			$this->cliente->municipio    = $this->input->post( 'municipio' ); // 
			$this->cliente->departamento = $this->input->post( 'departamento' ); // 
			$this->cliente->statu_cred   = 0;
			$this->cliente->ruta_id      = 9011; // 
			$this->cliente->status_id    = 1;
			$this->cliente->usuario_id   = (int)$usuario_id; 
			
			// Insertar
			$resultado = (int)$this->cliente->insertar();
			redirect('cliente/nuevo/'.$resultado, 'refresh');
		}
	}
}

/* End of file acceso.php */
/* Location: ./application/controllers/acceso.php */