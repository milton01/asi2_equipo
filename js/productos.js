Producto = {
	botonAgregar: {},
	canasta: {},
	agregar: function(event) {
		event.preventDefault();
		var productoSeleccionado = $(this),
			nuevoProducto = new String(),
			cantidad = productoSeleccionado.parent().parent().find(".cantidad-producto").val(),
			subTotal = cantidad * productoSeleccionado.data("precio");

		nuevoProducto += "<tr>";
			nuevoProducto += "<td>";
			nuevoProducto += productoSeleccionado.data("producto");
			nuevoProducto += "</td>";
			nuevoProducto += "<td>";
			nuevoProducto += cantidad;
			nuevoProducto += "</td>";
			nuevoProducto += "<td>";
			nuevoProducto += subTotal;
			nuevoProducto += "</td>";
			nuevoProducto += "<td>";
			nuevoProducto += '<button class="btn btn-alert eliminar-producto">Eliminar</button>';
			nuevoProducto += "</td>";
		nuevoProducto += "</tr>";	
		
		return Producto.canasta.append(nuevoProducto);
	},
	eliminar: function (event) {
		event.preventDefault();
		var productoSeleccionado = $(this);
		return productoSeleccionado.parent().parent().remove();

	},
	init: function() {
		this.canasta = $("#productos-seleccionados");
		this.botonAgregar = $("button.agregar-producto");
		this.botonAgregar.on("click", Producto.agregar);
		this.canasta.on("click", ".eliminar-producto", Producto.eliminar);

	}
};

jQuery(document).ready(function($) {
	Producto.init();
});