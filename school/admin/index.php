<?php include("includes/header.php"); ?>
<?php 

    if (!$session->is_signed_in()) {
        redirect("login.php");
    }

     ?>

        <!-- Navigation -->
        <?php include('includes/nav.php') ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>