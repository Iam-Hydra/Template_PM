<?php 

if (isset($_GET['url'])){
  $url = $_GET['url'];

  switch($url){
    case 'tulis_laporan';
    include '../pengaduan/tulis_laporan.php';
    break;

    case 'lihat_laporan';
    include 'lihat_laporan.php';
    break;
  }
}else{
  ?>
  <h4 class="pr-4 pl-4">Selamat Datang di Website Pengaduan Masyarakat Berbasis Elektronik yang dibuat untuk memoermudah masyarakat untuk untuk melaporkan suatu kejadian atau penyimpangan yang terjadi di masyarakat <br><br></h4>
  <h4 class="pr-4 pl-4"><b class="">Anda login Sebagai:<?php echo $_SESSION['nama'];?></b>

<?php } ?>
</h4>



