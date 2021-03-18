<?php 
include "../assets/koneksi.php";

$user= $_POST['user'];
$pass = $_POST['pass'];
$sql= mysqli_query($koneksi,"select * from masyarakat where username = '$user' and password= '$pass'");
$cek = mysqli_num_rows($sql);

  if($cek>0){
    $data = mysqli_fetch_array($sql);
    session_start();
    $_SESSION ['nama'] = $user;
    $_SESSION ['nik'] = $data['nik'];
    header('location:../masyarakat/index.php');
  }else{
    ?>
    <script type="text/javascript">
      alert('Data Tidak Berhasil Ditemukan, Silahkan Login');
      window.location="#";
    </script>

  <?php } ?>