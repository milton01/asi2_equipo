Producto = {
	botonAgregar: {},
	agregar: function (event) {
		event.preventDefault();
		var productoSeleccionado = $(this);
		console.log(productoSeleccionado.data("id"));
	},
	init: function () {
		this.botonAgregar = $("button.agregar-producto");
		this.botonAgregar.on("click", Producto.agregar);
	}
};

jQuery(document).ready(function ($) {
	Producto.init();
});