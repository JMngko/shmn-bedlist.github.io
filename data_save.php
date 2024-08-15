<?php
	include "koneksi.php";

	$sql = "INSERT INTO daftar_kamar VALUES(null, '$_POST[jenis_kamar]', '$_POST[total_bed]', '$_POST[bed_tersedia]')";
	$cek = mysqli_query($con, $sql);
			
		if($cek)
		{
?>

	<script type="text/javasript">
	  alert("Berhasil ditambahkan!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "tambah_data.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
	  alert("Gagal ditambahkan!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "tambah_data.php";
	</script>
	
<?php } ?>

?>