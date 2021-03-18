<?php 
include "../assets/koneksi.php";

  $nik = 	$_POST['nik'];
  $nama = 	$_POST['nama'];
  $user = 	$_POST['user'];
  $pass = 	$_POST['pass'];
  $telp = 	$_POST['telp'];
  $sql= mysqli_query($koneksi,"insert into masyarakat values('$nik','$nama','$user','$pass','$telp')");

  if ($sql){
    ?>
    <script type="text/javascript">
      alert('Data Berhasil DItambhakan Silahkan Login');
      window.location="login.php";
    </script>

  <?php } ?>


