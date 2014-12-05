Cliente = {
	datosGenerales: {},
	clienteValido: function() {
		datosGenerales.validate({
			rules: {
				nit: {
					required: true
				},
				dui: {
					required: true
				},
				usuario: {
					required: true,
					minLength: 4
				},
				password: {
					required: true
				},
				password2: {
					equalTo: "#password",
					required: true
				},
				correo: {
					required: true
					email: true
				}
			}

		});
	},
	init: function() {
		datosGenerales = $("#nuevo_cliente");
		Cliente.clienteValido();

	}

};

jQuery(document).ready(function($) {
	Cliente.init();
});