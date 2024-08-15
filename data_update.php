<?php 
	include "koneksi.php";

	$sql = "UPDATE daftar_kamar SET jenis_kamar = '$_POST[jenis_kamar]', total_bed = '$_POST[total_bed]', bed_tersedia = '$_POST[bed_tersedia]' WHERE id_daftar = '$_POST[id_daftar]'";
	$cek = mysqli_query($con, $sql);

	if($cek)
	{
?>

	<script type="text/javascript">
	 	  window.location.href = "tambah_data.php";
		</script>
		
	<?php }else{ ?>

	<script type="text/javascript">
		  window.location.href = "tambah_data.php";
	</script>

<?php } ?>