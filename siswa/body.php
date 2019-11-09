<body>
	<?php 
		require 'navbar.php';
	 ?>
	 <div class="container-fluid">
	 	<div class="row">
	 		<?php 
 		$content = (isset($_GET["page"])) ? $_GET["page"] : "";

 		switch ($content) {
 			case 'input':
 				require 'inputnilai.php';
 				break;
 			case 'ubah':
 				require 'ubahpassword.php';
 				break;				 
 			default:
 				require 'editbiodata.php';
 				break;
 		}
 		?>
	 	</div>
	 </div>
	 <?php require 'footer.php'; ?>
</body>