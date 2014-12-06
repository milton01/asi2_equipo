<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carrito_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function mostrar()
	{
		$resultado = $this->db->get( 'vw_catalogo_producto' );
		return (is_object($resultado) && $resultado->num_rows() > 0)
		? $resultado
		: null;
	}

}

/* End of file carrito_model.php */
/* Location: ./application/models/carrito_model.php */