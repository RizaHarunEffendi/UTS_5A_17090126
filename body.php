<body>
	<?php 
		require 'navbar.php';
	 ?>
	 <div class="container-fluid">
	 	<div class="row">
	 		<?php 
 		$content = (isset($_GET["page"])) ? $_GET["page"] : "";

 		switch ($content) {
 			case 'daftar':
 				require 'content/daftar.php';
 				break;
 			case 'lihatdaftar':
 				require 'content/lihat_daftar.php';
 				break;
 			case 'pengumuman':
 				require 'content/pengumuman.php';
 				break;
 			case 'bantuan':
 				require 'content/bantuan.php';
 				break;
 			case 'akun':
 				require 'content/akun.php';
 				break;					 
 			default:
 				require 'content/home.php';
 				break;
 		}
 		?>
	 	</div>
	 </div>
	 <?php require 'footer.php'; ?>
</body>