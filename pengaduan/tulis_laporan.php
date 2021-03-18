<?php include "../assets/temp/src.php";?>

<body id="page-top">
  <div class="card shadow">
    <div class="h2 card-header text-center">
    Tulis Laporan
    </div>
    <div class="card-body ">
      <form action="../pengaduan/simpan_laporan.php" 
            method="post" 
            class="form-horizontal" 
            enctype="multipart/form-data">

        <div class="form-group cols-sm-6" >
          <label>Tanggal Laporan</label>
          <input type="text" 
                  name="tgl_laporan" 
                  value=" <?php echo date('d/m/Y'); ?> " 
                  class="form-control"
                  readonly>
        </div>
        <div class="form-group cols-sm-6">
            <label>NIK</label>
            <input type="text" 
                  name="nik" 
                  value=" <?php echo $_SESSION['nik']; ?> " 
                  class="form-control" 
                  readonly>
        </div>
        <div class="form-group cols-sm-6">
            <label>Tulis Laporan</label>
            <textarea name="laporan"  
                      rows="7" 
                      class="form-control"></textarea>
        </div>
        <div class="form-group cols-sm-6">
            <label>Foto Bukti</label>
            <input type="file" 
                  name="foto" 
                  accept=".jpg, .jpeg, .png, .gif" 
                  class="form-control"> 
          <small id="helpId" class="text-muted">*tipe data yang bisa di upload adalah .jpg, .jpeg, .png, .gif</small>
        </div>
        .<div class="form-group cols-sm-6 mb-5">
          <input type="submit" value="Kirim" class="btn btn-primary pr-4 pl-4" >
          <input type="submit" value="Batal" class="btn btn-danger pr-4 pl-4" >
        </div>

        </div>
      </form>
    </div>
  </div>
</body>

<!-- Bootstrap core JavaScript-->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>