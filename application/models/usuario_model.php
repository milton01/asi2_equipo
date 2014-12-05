<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Clase de acceso a datos Usuario_Model utilizando Active Record del Framework CI
 * 
 * @package altuve
 * @author VMT\alan.alvarenga
 * @since 01/12/2014
 */
class Usuario_Model extends CI_Model
{
	public $id;
	public $nombre;
	public $password;
	public $tipo;

	public function __construct()
	{
		parent::__construct();
		//Inicializar Propiedades
		$this->id = new stdClass(); // 
		$this->nombre = new stdClass(); // 
		$this->password = new stdClass(); // 
		$this->tipo = new stdClass(); // 
	}
	/**
	 * Metodo Insertar
	 * @return int ID ultimo registro ingresado
	 */
	public function insertar()
	{
		$data = array(
			'nombre' => $this->nombre,
			'password' => $this->password,
			'tipo' => $this->tipo
			);

		$this->db->insert( 'usuario', $data );

		return (int)$this->db->insert_id();
	}

	/**
	 * Metodo Actualizar
	 * @return boolean resultado de la operacion
	 */
	public function actualizar()
	{
		if ( is_object( $this->id ) || is_null( $this->id ) || empty( $this->id ) )
		{
			trigger_error('La propiedad id no ha sido definida');
			exit();
		}

		$data = array(
			'nombre' => $this->nombre,
			'password' => $this->password,
			'tipo' => $this->tipo
			);

		$this->db->where( 'id', $this->id );
 
		$resultado = $this->db->update( 'usuario', $data );

		return (boolean)$resultado;
	}

	/**
	 * Metodo Eliminar
	 * @return boolean resultado de la operacion
	 */
	public function eliminar()
	{
		if ( is_object( $this->id ) || is_null( $this->id ) || empty( $this->id ) )
		{
			trigger_error('La propiedad id no ha sido definida');
			exit();
		}

		$this->db->where( 'id', $this->id );
 
		$resultado = $this->db->delete( 'usuario' );

		return (boolean)$resultado;
	}

	/**
	 * Metodo buscar
	 * @return object Registros Almacenados
	 */
	public function buscar()
	{
		if ( isset( $this->id ) && !is_object( $this->id ) ) {
			$this->db->where( 'id', $this->id );
		}
 
		$resultado = $this->db->get( 'usuario' );

		return ( is_object( $resultado ) && $resultado->num_rows() > 0 ) ? $resultado : false;
	}

}


/* End of file usuario_model.php */
/* Location: ./application/models/usuario_model.php */
