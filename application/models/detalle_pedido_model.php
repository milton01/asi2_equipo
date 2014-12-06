<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Clase de acceso a datos Detalle_Pedido_Model utilizando Active Record del Framework CI
 * 
 * @package altuve
 * @author VMT\alan.alvarenga
 * @since 01/12/2014
 */
class Detalle_Pedido_Model extends CI_Model
{
	public $id;
	public $cantidad;
	public $codigoprod;
	public $pedido_id;

	public function __construct()
	{
		parent::__construct();
		//Inicializar Propiedades
		$this->id = new stdClass(); // 
		$this->cantidad = new stdClass(); // 
		$this->codigoprod = new stdClass(); // 
		$this->pedido_id = new stdClass(); // 
	}
	/**
	 * Metodo Insertar
	 * @return int ID ultimo registro ingresado
	 */
	public function insertar()
	{
		$data = array(
			'cantidad' => $this->cantidad,
			'codigoprod' => $this->codigoprod,
			'pedido_id' => $this->pedido_id
			);

		$this->db->insert( 'detalle_pedido', $data );

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
			'cantidad' => $this->cantidad,
			'codigoprod' => $this->codigoprod,
			'pedido_id' => $this->pedido_id
			);

		$this->db->where( 'id', $this->id );
 
		$resultado = $this->db->update( 'detalle_pedido', $data );

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
 
		$resultado = $this->db->delete( 'detalle_pedido' );

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
 
		$resultado = $this->db->get( 'detalle_pedido' );

		return ( is_object( $resultado ) && $resultado->num_rows() > 0 ) ? $resultado : false;
	}

}


/* End of file detalle_pedido_model.php */
/* Location: ./application/models/detalle_pedido_model.php */
