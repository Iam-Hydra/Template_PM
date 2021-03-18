<?php
session_start();
if(!isset($_SESSION['nama'])){
    header('localtion:../login/login.php');
    ?>
    <script>
        alert('Anda Belum Login, silahkan Login Terlebih dahulu');
        window.location="../login/login.php";
    </script>
<?php 
}
?>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- sidebar -->
        <?php include "../assets/temp/sidebarm.php"; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "../assets/temp/topbarm.php"; ?>





                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php include "page_masyarakat.php"; ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
 

        </div>
    </div>



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>




<?php include "../assets/temp/footer.php"; ?>
<?php include "../assets/temp/src.php"; ?>

</html>