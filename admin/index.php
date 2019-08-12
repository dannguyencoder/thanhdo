<?php include("includes/init.php"); ?>
<?php include("includes/db.php"); ?>
<?php include("includes/functions.php"); ?>

<?php

if (!$_SESSION['username']) {
    redirect("pages/login.php");
}

?>

<?php include("includes/header.php") ?>

    <!-- Sidebar -->
    <?php include("includes/sidebar.php"); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">



      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include("includes/top_nav.php"); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
<!--        --><?php //include("includes/admin_content.php"); ?>

          <?php

          if (isset($_GET['page'])) {

              $page = $_GET['page'];

              switch ($page) {
                  case 'tables':
                      include("templates/tables.php");
                      break;
                  case '404':
                      include("templates/404.php");
                      break;
                  case 'blank':
                      include("templates/blank.php");
                      break;

                  case 'users':
                      include("pages/users.php");
                      break;
                  case 'add_user':
                      include("pages/add_user.php");
                      break;
                  case 'edit_user':
                      include("pages/edit_user.php");
                      break;
                  case 'delete_user':
                      include("pages/delete_user.php");
                      break;
              }

          } else {
              include("pages/customer_bookings.php");
          }


          ?>

      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include("includes/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php include("includes/logout_modal.php"); ?>
