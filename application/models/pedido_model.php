<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedido_model extends CI_Model{
    public $id;
    public $fecha_v;
    public $fecha_p;
    public $forma_pago;
    public $docto;
    public $motivo_r;
    public $status_id;
    public $cliente_id;
    public $docto_id;
    public function __construct()
    {
        parent::__construct();
        //Inicializar Propiedades
        $this->id = new stdClass(); // 
        $this->fecha_v = new stdClass(); // 
        $this->fecha_p = new stdClass(); // 
        $this->forma_pago = new stdClass(); // 
        $this->docto = new stdClass(); // 
        $this->motivo_r = new stdClass(); // 
        $this->status_id = new stdClass(); // 
        $this->cliente_id = new stdClass(); // 
        $this->docto_id = new stdClass(); // 
    }
    /**
     * Metodo Insertar
     * @return int ID ultimo registro ingresado
     */
    public function insertar()
    {
        $data = array(
            'fecha_v' => $this->fecha_v,
            'fecha_p' => $this->fecha_p,
            'forma_pago' => $this->forma_pago,
            'docto' => $this->docto,
            'motivo_r' => $this->motivo_r,
            'status_id' => $this->status_id,
            'cliente_id' => $this->cliente_id,
            'docto_id' => $this->docto_id
            );

        $this->db->insert( 'pedido', $data );

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
            'fecha_v' => $this->fecha_v,
            'fecha_p' => $this->fecha_p,
            'forma_pago' => $this->forma_pago,
            'docto' => $this->docto,
            'motivo_r' => $this->motivo_r,
            'status_id' => $this->status_id,
            'cliente_id' => $this->cliente_id,
            'docto_id' => $this->docto_id
            );

        $this->db->where( 'id', $this->id );
 
        $resultado = $this->db->update( 'pedido', $data );

        return (boolean)$resultado;
    }

    /**
     * Metodo Eliminar
     * @return boolean resultado de la operacion
     */
    public function eliminar_pedido()
    {
        if ( is_object( $this->id ) || is_null( $this->id ) || empty( $this->id ) )
        {
            trigger_error('La propiedad id no ha sido definida');
            exit();
        }

        $this->db->where( 'id', $this->id );
 
        $resultado = $this->db->delete( 'pedido' );

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
 
        $resultado = $this->db->get( 'pedido' );

        return ( is_object( $resultado ) && $resultado->num_rows() > 0 ) ? $resultado : false;
    }

    /* Funciones de inicializacion */
    
    function tiempo_ahora(){
        return date('Y-m-d H:i:s');
    }
    
    function fecha_ahora(){
        return date('Y-m-d');
    }

    /* Funciones de consulta de datos */

    function listar_pedidos(){
        //Define el arreglo con parametros escapados para la query
        $this->db->where('estado_pedido', 1);
        $resultado = $this->db->get('vw_pedido_pendiente');
        return ( is_object( $resultado ) && $resultado->num_rows() > 0 )
        ? $resultado
        : null;
    }
    
    function listar_detalle_pedido($pd_id){
        //Define el arreglo con parametros escapados para la query
        $data = array();
        $data[] = $pd_id; //Define el registro seleccionado
        
        //Query directa            
        $query = $this->db->query("SELECT
                                    dp.id AS dp_id,
                                    pr.codigo AS pr_codigo,
                                    concat (cat.descripcion,' ',                                     
                                    mar.nombre,' ', 
                                    pr.descripcion) AS pr_descripcion,
                                    dp.cantidad AS dp_cantidad
					FROM 
                                    detalle_pedido dp, producto pr, marca mar, categoriap cat 
					WHERE
                                    dp.codigoprod = pr.codigo AND
                                    mar.id = pr.marcaid AND
                                    cat.id = pr.categoriaid AND                                    
                                    dp.pedido_id = ?", $data);
        //Devolvemos al controlador los datos
        if ($query->num_rows() > 0) return $query; 
    }

    function mostrar_pedido($pd_id){
        //Query con framework (parametros automaticamente escapados)
        $this->db->select();        
        $this->db->from('pedido');  
        $this->db->where('id', $pd_id);         
        $query = $this->db->get();
        //Devolvemos al controlador los datos
        if ($query->num_rows() > 0) return $query;        
    }
    
    function mostrar_cliente($pd_id){
        //Query con framework (parametros automaticamente escapados)
        $this->db->select();        
        $this->db->from('cliente');  
        $this->db->where('cliente_id', $pd_id);         
        $query = $this->db->get();
        //Devolvemos al controlador los datos
        if ($query->num_rows() > 0) return $query;        
    }
    
    function mostrar_detalle_pedido($dp_id){
        //Query con framework (parametros automaticamente escapados)
        $this->db->select();        
        $this->db->from('detalle_pedido');  
        $this->db->where('id', $dp_id);        
        $query = $this->db->get();
        //Devolvemos al controlador los datos
        if ($query->num_rows() > 0) return $query;        
    }
    
    function max_inventario(){
        //Recupera el ultimo id
        $this->db->select();        
        $this->db->from('inventario');  
        $this->db->select_max('id');;         
        $query = $this->db->get();
        $row = $query->row();
        return $row->id + 1;
    }
    
    /* Funciones de manipulacion de datos */

    function insertar_inventario($pd_id, $pr_id, $mv_id, $al_id, $in_cantidad){
        
        

        $data = array(  
                        'id' => $this->max_inventario(),
                        'no_transaccion' => $pd_id,                        
                        'codigoprod' => $pr_id,                        
                        'tipo_mov' => $mv_id,
                        'movimientoid' => $mv_id,
                        'almacenid' => $al_id,
                        'cantidad' => $in_cantidad,
                        'fecha_mov' => $this->fecha_ahora()
                        );
        return $this->db->insert('inventario',$data);   

    }

    function estado_pedido($pd_id, $st_id){

        $data = array( 
                        'status_id' => $st_id
                        );
        $this->db->where('id', $pd_id);           
        return $this->db->update('pedido',$data);        
    }
    
    function actualizar_detalle_pedido($dp_id, $dp_cantidad){
        $data = array( 
                        'cantidad' => $dp_cantidad
                        );
        $this->db->where('id', $dp_id);           
        return $this->db->update('detalle_pedido',$data);
    }
    
    function actualizar_inventario($pd_id, $pr_id, $mv_id, $al_id, $in_cantidad){
        $data = array( 
                        'cantidad' => $in_cantidad,
                        'fecha_mov' => $this->fecha_ahora()
                        );
        $this->db->where('no_transaccion', $pd_id);
        $this->db->where('codigoprod', $pr_id);        
        $this->db->where('tipo_mov', $mv_id);
        $this->db->where('movimientoid', $mv_id);
        $this->db->where('almacenid', $al_id);
        return $this->db->update('inventario',$data);
    }
    
    function eliminar($id){

        $this->db->where('id', $id);           
        return $this->db->delete('tabla');                  
    }

}
    
?>
