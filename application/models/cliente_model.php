<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Clase de acceso a datos Cliente_Model utilizando Active Record del Framework CI
 * 
 * @package altuve
 * @author VMT\alan.alvarenga
 * @since 01/12/2014
 */
class Cliente_Model extends CI_Model
{
	public $cliente_id;
	public $nit;
	public $dui;
	public $registro;
	public $giro;
	public $nombre_j;
	public $nombre_c;
	public $contacto;
	public $telefono_1;
	public $telefono_2;
	public $celular;
	public $fax;
	public $correo;
	public $tipo;
	public $categoria;
	public $direccion;
	public $municipio;
	public $departamento;
	public $statu_cred;
	public $ruta_id;
	public $status_id;
	public $usuario_id;

	public function __construct()
	{
		parent::__construct();
		//Inicializar Propiedades
		$this->cliente_id = new stdClass(); // 
		$this->nit = new stdClass(); // 
		$this->dui = new stdClass(); // 
		$this->registro = new stdClass(); // 
		$this->giro = new stdClass(); // 
		$this->nombre_j = new stdClass(); // 
		$this->nombre_c = new stdClass(); // 
		$this->contacto = new stdClass(); // 
		$this->telefono_1 = new stdClass(); // 
		$this->telefono_2 = new stdClass(); // 
		$this->celular = new stdClass(); // 
		$this->fax = new stdClass(); // 
		$this->correo = new stdClass(); // 
		$this->tipo = new stdClass(); // 
		$this->categoria = new stdClass(); // 
		$this->direccion = new stdClass(); // 
		$this->municipio = new stdClass(); // 
		$this->departamento = new stdClass(); // 
		$this->statu_cred = new stdClass(); // 
		$this->ruta_id = new stdClass(); // 
		$this->status_id = new stdClass(); // 
		$this->usuario_id = new stdClass(); // 
	}
	/**
	 * Metodo Insertar
	 * @return int ID ultimo registro ingresado
	 */
	public function insertar()
	{
		$data = array(
			'nit' => $this->nit,
			'dui' => $this->dui,
			'registro' => $this->registro,
			'giro' => $this->giro,
			'nombre_j' => $this->nombre_j,
			'nombre_c' => $this->nombre_c,
			'contacto' => $this->contacto,
			'telefono_1' => $this->telefono_1,
			'telefono_2' => $this->telefono_2,
			'celular' => $this->celular,
			'fax' => $this->fax,
			'correo' => $this->correo,
			'tipo' => $this->tipo,
			'categoria' => $this->categoria,
			'direccion' => $this->direccion,
			'municipio' => $this->municipio,
			'departamento' => $this->departamento,
			'statu_cred' => $this->statu_cred,
			'ruta_id' => $this->ruta_id,
			'status_id' => $this->status_id,
			'usuario_id' => $this->usuario_id
			);

		$this->db->insert( 'cliente', $data );

		return (int)$this->db->insert_id();
	}

	/**
	 * Metodo Actualizar
	 * @return boolean resultado de la operacion
	 */
	public function actualizar()
	{
		if ( is_object( $this->cliente_id ) || is_null( $this->cliente_id ) || empty( $this->cliente_id ) )
		{
			trigger_error('La propiedad cliente_id no ha sido definida');
			exit();
		}

		$data = array(
			'nit' => $this->nit,
			'dui' => $this->dui,
			'registro' => $this->registro,
			'giro' => $this->giro,
			'nombre_j' => $this->nombre_j,
			'nombre_c' => $this->nombre_c,
			'contacto' => $this->contacto,
			'telefono_1' => $this->telefono_1,
			'telefono_2' => $this->telefono_2,
			'celular' => $this->celular,
			'fax' => $this->fax,
			'correo' => $this->correo,
			'tipo' => $this->tipo,
			'categoria' => $this->categoria,
			'direccion' => $this->direccion,
			'municipio' => $this->municipio,
			'departamento' => $this->departamento,
			'statu_cred' => $this->statu_cred,
			'ruta_id' => $this->ruta_id,
			'status_id' => $this->status_id,
			'usuario_id' => $this->usuario_id
			);

		$this->db->where( 'cliente_id', $this->cliente_id );
 
		$resultado = $this->db->update( 'cliente', $data );

		return (boolean)$resultado;
	}

	/**
	 * Metodo Eliminar
	 * @return boolean resultado de la operacion
	 */
	public function eliminar()
	{
		if ( is_object( $this->cliente_id ) || is_null( $this->cliente_id ) || empty( $this->cliente_id ) )
		{
			trigger_error('La propiedad cliente_id no ha sido definida');
			exit();
		}

		$this->db->where( 'cliente_id', $this->cliente_id );
 
		$resultado = $this->db->delete( 'cliente' );

		return (boolean)$resultado;
	}

	/**
	 * Metodo buscar
	 * @return object Registros Almacenados
	 */
	public function buscar()
	{
		if ( isset( $this->cliente_id ) && !is_object( $this->cliente_id ) ) {
			$this->db->where( 'cliente_id', $this->cliente_id );
		}
 
		$resultado = $this->db->get( 'cliente' );

		return ( is_object( $resultado ) && $resultado->num_rows() > 0 ) ? $resultado : false;
	}

}


/* End of file cliente_model.php */
/* Location: ./application/models/cliente_model.php */
