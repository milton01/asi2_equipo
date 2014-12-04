<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
		<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
		<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
		<title>Login | ALTUVE - Sistema de distribución</title>
		
		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- PLUGINS CSS -->
		<link href="<?=base_url()?>assets/plugins/weather-icon/css/weather-icons.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/prettify/prettify.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/owl-carousel/owl.theme.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/owl-carousel/owl.transitions.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/chosen/chosen.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/icheck/skins/all.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/datepicker/datepicker.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/validator/bootstrapValidator.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/summernote/summernote.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/markdown/bootstrap-markdown.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/datatable/css/bootstrap.datatable.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/morris-chart/morris.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/c3-chart/c3.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/plugins/slider/slider.min.css" rel="stylesheet">
		
		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		<link href="<?=base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/css/style-responsive.css" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body class="login tooltips">
		
		
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="page-heading text-center">
			<img src="<?=base_url()?>assets/img/logo-login.png" class="logo" alt="Logo">
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8  the-box">
				<form method="post" action="<?=base_url()?>cliente/registrar" class="form-horizontal" data-toggle="validator">
				
					<fieldset>
						<!-- Form Name -->
						<legend>Nuevo Cliente</legend>
						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="tipo_persona">Tipo Persona</label>
							<div class="col-md-5">
								<select id="tipo_persona" name="tipo_persona" class="form-control">
									<option value="1">Juridica</option>
									<option value="2">Natural</option>
								</select>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="nit">N.I.T</label>
							<div class="col-md-6">
								<input id="nit" name="nit" type="text" placeholder="número de identificación tributario" class="form-control input-md" required="">
								
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="dui">D.U.I</label>
							<div class="col-md-6">
								<input id="dui" name="dui" type="text" placeholder="documento unico de identificación" class="form-control input-md">
								
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="registro">N.R.C</label>
							<div class="col-md-4">
								<input id="registro" name="registro" type="text" placeholder="registro comercial" class="form-control input-md">
								
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="nombre_j">Razon Social</label>
							<div class="col-md-8">
								<input id="nombre_j" name="nombre_j" type="text" placeholder="nombre juridico" class="form-control input-md">
								
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="nombre_c">Nombre Completo</label>
							<div class="col-md-6">
								<input id="nombre_c" name="nombre_c" type="text" placeholder="Juan José Perez Lopez" class="form-control input-md">
								
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="telefono_1">Teléfono Principal</label>
							<div class="col-md-4">
								<input id="telefono_1" name="telefono_1" type="text" placeholder="1111-1111" class="form-control input-md">
								
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="telefono_2">Teléfono Secundario</label>
							<div class="col-md-4">
								<input id="telefono_2" name="telefono_2" type="text" placeholder="1111-1111" class="form-control input-md">
								
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="celular">Celular</label>
							<div class="col-md-4">
								<input id="celular" name="celular" type="text" placeholder="1111-1111" class="form-control input-md">
								
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="fax">Fax</label>
							<div class="col-md-4">
								<input id="fax" name="fax" type="text" placeholder="1111-1111" class="form-control input-md">
								
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="correo">E-Mail</label>
							<div class="col-md-6">
								<input id="correo" name="correo" type="text" placeholder="juan.perez@correo.com" class="form-control input-md">
								
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="direccion">Dirección</label>
							<div class="col-md-8">
								<input id="direccion" name="direccion" type="text" placeholder="Dirección de residencia" class="form-control input-md">
								
							</div>
						</div>
						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="departamento">Departamento</label>
							<div class="col-md-5">
								<select id="departamento" name="departamento" class="form-control">
								</select>
							</div>
						</div>
						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="municipio">Municipio</label>
							<div class="col-md-5">
								<select id="municipio" name="municipio" class="form-control">
								</select>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="nombre">Usuario</label>
							<div class="col-md-4">
								<input id="nombre" name="nombre" type="text" placeholder="nickname de acceso" class="form-control input-md" required="">
								
							</div>
						</div>
						<!-- Password input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="password">Contraseña</label>
							<div class="col-md-4">
								<input id="password" name="password" type="password" placeholder="clave de acceso" class="form-control input-md" required="">
								
							</div>
						</div>
						<!-- Password input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="password2">Confirmar</label>
							<div class="col-md-4">
								<input id="password2" name="password2" type="password" placeholder="confirmar contraseña" class="form-control input-md" required="">
								
							</div>
						</div>
						<!-- Button (Double) -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="guardar">Guardar</label>
							<div class="col-md-8">
								<button id="guardar" name="guardar" type="submit" class="btn btn-success">Registrar</button>
								<button id="cancelar" name="cancelar" class="btn btn-danger">Cancelar</button>
							</div>
						</div>
					</fieldset>

					<input type="hidden" name="tipo" id="tipo" value="cliente">
				
			</form>
			</div>
			<div class="col-sm-2"></div>
			
			</div><!-- /.login-wrapper -->
			<!--
			===========================================================
			END PAGE
			===========================================================
			-->
			
			<!--
			===========================================================
			Placed at the end of the document so the pages load faster
			===========================================================
			-->
			<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
			<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
			<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/retina/retina.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/nicescroll/jquery.nicescroll.js"></script>
			<script src="<?=base_url()?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/backstretch/jquery.backstretch.min.js"></script>
			
			<!-- PLUGINS -->
			<script src="<?=base_url()?>assets/plugins/skycons/skycons.js"></script>
			<script src="<?=base_url()?>assets/plugins/prettify/prettify.js"></script>
			<script src="<?=base_url()?>assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/owl-carousel/owl.carousel.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/chosen/chosen.jquery.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/icheck/icheck.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
			<script src="<?=base_url()?>assets/plugins/timepicker/bootstrap-timepicker.js"></script>
			<script src="<?=base_url()?>assets/plugins/mask/jquery.mask.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/validator/bootstrapValidator.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/datatable/js/bootstrap.datatable.js"></script>
			<script src="<?=base_url()?>assets/plugins/summernote/summernote.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/markdown/markdown.js"></script>
			<script src="<?=base_url()?>assets/plugins/markdown/to-markdown.js"></script>
			<script src="<?=base_url()?>assets/plugins/markdown/bootstrap-markdown.js"></script>
			<script src="<?=base_url()?>assets/plugins/slider/bootstrap-slider.js"></script>
			
			<!-- EASY PIE CHART JS -->
			<script src="<?=base_url()?>assets/plugins/easypie-chart/easypiechart.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/easypie-chart/jquery.easypiechart.min.js"></script>
			
			<!-- KNOB JS -->
			<!--[if IE]>
			<script type="text/javascript" src="<?=base_url()?>assets/plugins/jquery-knob/excanvas.js"></script>
			<![endif]-->
			<script src="<?=base_url()?>assets/plugins/jquery-knob/jquery.knob.js"></script>
			<script src="<?=base_url()?>assets/plugins/jquery-knob/knob.js"></script>
			<!-- FLOT CHART JS -->
			<script src="<?=base_url()?>assets/plugins/flot-chart/jquery.flot.js"></script>
			<script src="<?=base_url()?>assets/plugins/flot-chart/jquery.flot.tooltip.js"></script>
			<script src="<?=base_url()?>assets/plugins/flot-chart/jquery.flot.resize.js"></script>
			<script src="<?=base_url()?>assets/plugins/flot-chart/jquery.flot.selection.js"></script>
			<script src="<?=base_url()?>assets/plugins/flot-chart/jquery.flot.stack.js"></script>
			<script src="<?=base_url()?>assets/plugins/flot-chart/jquery.flot.time.js"></script>
			<!-- MORRIS JS -->
			<script src="<?=base_url()?>assets/plugins/morris-chart/raphael.min.js"></script>
			<script src="<?=base_url()?>assets/plugins/morris-chart/morris.min.js"></script>
			
			<!-- C3 JS -->
			<script src="<?=base_url()?>assets/plugins/c3-chart/d3.v3.min.js" charset="utf-8"></script>
			<script src="<?=base_url()?>assets/plugins/c3-chart/c3.min.js"></script>
			
			<!-- MAIN APPS JS -->
			<script src="<?=base_url()?>assets/js/apps.js"></script>
			
		</body>
	</html>