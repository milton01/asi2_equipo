<div class="the-box full no-border">
	<div class="table-responsive">
	
		<table class="table table-th-block table-success">
			<thead>
				<tr>
					<th>Producto</th>
					<th>Cantidad</th>
					<th>Sub Total</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($productos_seleccionados as $producto): ?>
				<?php $propiedades = explode(",", $producto); ?>
				<tr>
					<td><?=$propiedades[0]?></td>
					<td><?=$propiedades[1]?></td>
					<td><?=$propiedades[2]?></td>

				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		</div><!-- /.table-responsive -->
	</div>