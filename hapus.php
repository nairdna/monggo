<?php
	require 'koneksi.php';
	
	$no = $_GET['no_nindya'];

	$chk = $db->query("SELECT no, gambar FROM nindya WHERE no = '$no'"	);
	$filename = $chk->fetcharray();
	
	if(file_exists($filename['gambar'])){
		chmod($filename['gambar'],0755);
		unlink($filename['gambar']);
	}
	
	$db->exec("DELETE FROM nindya WHERE no = '$no'");	
?>
<script>
	alert("Data Nindya berhasil dihapus!");
	location.href = "nindyas.php";
</script>
