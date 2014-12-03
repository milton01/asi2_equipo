<?php 
if(isset($files)): 
foreach ($files as $file): 
	$url_script = base_url().'js/'.$file;
	?>
	 <script src="<?=$url_script?>"> </script>
<?php endforeach; endif;?>	

