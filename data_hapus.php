<?php
	include "koneksi.php";
	$sql = "DELETE FROM daftar_kamar WHERE id_daftar= '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javascript">
 	  window.location.href = "tambah_data.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "tambah_data.php";
	</script>
	
<?php } ?>