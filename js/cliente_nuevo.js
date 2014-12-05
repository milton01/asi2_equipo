Cliente = {
	datosGenerales: {},
	tipoPersona: {},
	nit: {},
	dui: {},
	telefono_1: {},
	telefono_2: {},
	celular: {},
	fax: {},
	clienteValido: function() {
		Cliente.datosGenerales.validate({
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
					required: true,
					email: true
				}
			}

		});
	},
	cambiarTipoPersona: function () {
		console.log("entre");	
		var tipoSeleccionado = Cliente.tipoPersona.find("option:selected").text(),
			tipoNoSeleccionado = Cliente.tipoPersona.find("option").not(":selected").text();

		$("div[data-grupo]").each( function(index, input) {
			var grupoInput = $(input).data("grupo");
			if(String(tipoSeleccionado).toLowerCase() == grupoInput) {
				$(input).show();
				Cliente.nit.mask("9999-999999-999-9");
				Cliente.dui.mask("99999999-9");
			} else {
				$(input).hide();
			}

		});
	},
	init: function() {
		this.datosGenerales = $("#nuevo_cliente");
		this.tipoPersona = $("#tipo_persona");
		this.nit = $("#nit");
		this.dui = $("#dui");
		this.telefono_1 = $("#telefono_1");
		this.telefono_2 = $("#telefono_2");
		this.celular = $("#celular");
		Cliente.clienteValido();
		this.tipoPersona.on("change", Cliente.cambiarTipoPersona);
		this.nit.mask("9999-999999-999-9");
		this.dui.mask("99999999-9");
		this.telefono_1.mask("9999-9999");
		this.telefono_2.mask("9999-9999");
		this.celular.mask("9999-9999");

	}

};

jQuery(document).ready(function($) {
	Cliente.init();

	$("div[data-grupo]").each( function(index, input) {
		 var grupoInput = $(input).data("grupo");
		 if(grupoInput == "natural") {
		 	$(input).hide();
		 }
	});
});