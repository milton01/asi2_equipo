<div class="the-box full no-border">
	<div class="table-responsive">
		<table class="table table-th-block table-primary">
			<thead>
				<tr>
					<th style="width: 30px;">Codigo</th>
					<th>Producto</th>
					<th>Marca</th>
					<th>Precio</th>
					<th>Cantidad</th>
				</tr>
			</thead>
			<tbody>
			<?php if( isset( $productos ) ): foreach ( $productos->result() as $producto): ?>
				<tr>
					<td>
						<?=$producto->producto_id?>
					</td>
					<td>
					<?=$producto->leyenda_producto?>	
					</td>
					<td>
						<?=$producto->marca?>
					</td>
					<td>
						<?=number_format($producto->precio_venta,1,".",",")?>
					</td>
					<td>
						<input type="text" class="cantidad-producto form-control small cc_security_masking" style="width: 85px;">
					</td>
					<td>
						<button class="btn btn-success agregar-producto" data-id="<?=$producto->producto_id?>" data-precio="<?=$producto->precio_venta?>" data-producto="<?=$producto->leyenda_producto?>">Agregar</button>
					</td>
				</tr>
			<?php endforeach; else: ?>
				<tr>
					<td>No Data to Display</td>
				</tr>
			<?php endif;?>
			</tbody>
		</table>
	</div><!-- /.table-responsive -->
</div>

<div class="the-box full">
	<div class="table-responsive">
		<table class="table table-success">
			<thead>
				<tr>
					<th>Producto</th>
					<th>Cantidad</th>
					<th>Sub Total</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody id="productos-seleccionados">
				
			</tbody>
		</table>
	</div>
</div>

