<?php
	require 'koneksi.php';
	
	$no = $_POST['no_nindya'];
	$nama = $_POST['nama'];
	$jabatan = $_POST['jabatan'];
	$filename = $_FILES['profile']['name'];
	
	//lokasi upload file
	$uploaddir = 'img/nindyas/';

	//rename file sesuai nama nindya
	$temp = explode(".", $filename);
	$newfilename = $uploaddir.str_replace(' ', '', $nama). '.' . end($temp);
	
	$chk = $db->query("SELECT count(no) as count FROM nindya WHERE no = '$no'"	);
	
	if(file_exists($uploaddir.$filename)){
		chmod($uploaddir.$filename,0755);
		unlink($uploaddir.$filename);
	}
	
	$chk = $chk->fetchArray();
	$numRows = $chk['count'];
	
	//pindahkan file upload ke folder dan rename sesuai aturan
	if(move_uploaded_file($_FILES['profile']['tmp_name'], $newfilename)){
		if($numRows > 0){
			$db->exec("UPDATE nindya SET nama='$nama', jabatan = '$jabatan', gambar = '$newfilename' WHERE no = '$no'");
		}else{
			$db->exec("INSERT INTO nindya (nama,jabatan,gambar) VALUES ('$nama','$jabatan','$newfilename')");
		}
		
?>
<script>
	alert("Data Nindya baru berhasil ditambahkan!");
	location.href = "nindyas.php";
</script>
<?php }else{ ?>
<script>
	alert("Data Nindya baru gagal ditambahkan!");
	location.href = "nindyas.php";
</script>
<?php } ?>