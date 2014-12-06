<div class="contentpanel">

    <div class="row">

        <div class="col-md-12">
            
<?=form_open('pedido/procesar_despacho/'.$row_pedido->id, 'id=procesar_despacho name="procesar_despacho"');?>

            <table id="pedidos" class="table table-striped">
                <caption>
                    <p>Cliente: <?=$row_cliente->cliente_id;?> <?=$row_cliente->nombre_c;?></p>
                    <p>Pedido: <?=$row_pedido->id;?></p>
                </caption>
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th width="10%">Cod. Producto</th>
                        <th>Producto</th>
                        <th width="20%">Cantidad Solicitada</th>                        
                    </tr>
                </thead>
                <tbody>
<?php
    if ($query_productos){
        $j=1;
        $total = 0;
        foreach ($query_productos->result() as $row)
        {
            echo '<tr>
                    <td>'.$j.'</td>
                    <td>'.$row->pr_codigo.'</td>
                    <td>'.$row->pr_descripcion.'</td>
                    <td>
                        
                        '.$row->dp_cantidad.'
                    </td>
                </tr>';
            $j=1;
            $total += (int)$row->precio; 
        }
    }
?>
                </tbody>
            </table>
            <h4>Total Factura</h4>
            <p><?=$total?></p>



<?php

echo form_close();

?>
            
        </div><!-- col-sm-6 -->

    </div><!-- row -->

    <div class="signup-footer">
        <div class="pull-left">
            &copy; 2014. Derechos reservados. Altuve
        </div>
    </div>

</div><!-- signuppanel -->