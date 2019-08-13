<?php

include('db.php');

ob_start();
session_start();



if (isset($_POST['submit_book_appointment'])) {

    $customer_name = mysqli_real_escape_string($connection, $_POST['customer_name']);
    $customer_email = mysqli_real_escape_string($connection, $_POST['customer_email']);
    $customer_phone_number = mysqli_real_escape_string($connection, $_POST['customer_phone_number']);
    $customer_time = date('Y-m-d H:i:s', strtotime($_POST['customer_time']));
    $customer_short_desc = mysqli_real_escape_string($connection, $_POST['customer_short_desc']);

    $customer_booking_appointment_sql = "INSERT INTO customer_bookings(customer_name, customer_email, customer_phone_number, customer_time, customer_short_desc) VALUES ('{$customer_name}', '{$customer_email}', '{$customer_phone_number}', '{$customer_time}', '$customer_short_desc')";
    $customer_booking_query = mysqli_query($connection, $customer_booking_appointment_sql);

    if ($customer_booking_query) {
        $_SESSION['message'] = 'Đặt lịch thành công. Vui lòng liên hệ với Luật sư Sơn qua số điện thoại 0912 044 591 để xác nhận lịch hẹn.';
    } else {
        die('Error: ' . mysqli_error($connection));
        $_SESSION['message'] = 'Đặt lịch thất bại do hệ thống bị lỗi. Vui lòng gọi điện trực tiếp cho Luật sư Sơn qua số điện thoại 0912 044 591 để đặt lịch hẹn.';
    }

}

function showMessage() {
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
//        echo "<script>alert({$_SESSION['message']})</script>";
        echo '<script language="javascript">';
        echo 'alert("' . $message . '")';
        echo '</script>';
        unset($_SESSION['message']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Luật sư Nguyễn Quang Sơn - Văn phòng Luật sư Thành Đô</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Luật Thành Đô</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Dịch vụ</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Thông tin</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Đặt lịch</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">

      <!-- Masthead Heading -->
      <h2 style="margin-bottom: 20px;">Luật sư</h2>
      <h1 class="masthead-heading text-uppercase mb-0">Nguyễn Quang Sơn</h1>
      <p class="masthead-subheading font-weight-light mt-5">Điện thoại: 0912 044 591</p>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Tư vấn pháp luật Hình sự / Dân sự - Bào chữa bị cáo - Tranh tụng</p>
      <p class="masthead-subheading font-weight-light mb-0">Thành lập công ty / Start-up - Dịch vụ pháp lý</p>

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Các dịch vụ của Luật sư</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <ol class="custom-counter">
          <li>Bào chữa cho bị cáo trước tòa trong các vụ án Hình sự</li>
          <li>Bảo vệ đương sự trong các vụ việc Dân sự / Tranh chấp đất đai</li>
          <li>Làm di chúc cho các gia đình có người sắp mất</li>
          <li>Hỗ trợ làm thủ tục thành lập doanh nghiệp / start-up</li>
          <li>Tư vấn, làm thủ tục pháp luật cho cá nhân, gia đình</li>
          <li>Làm các dịch vụ khác có liên quan đến pháp lý</li>
        </ol>

        <!-- Portfolio Item 1 -->



        <!--<div class="col-md-6 col-lg-4">-->
          <!--&lt;!&ndash;<span style="display: block; font-size: 20px; margin-bottom: 14px;">Vụ án buôn lậu 12 tấn heroin</span>&ndash;&gt;-->
          <!--<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">-->
            <!--<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">-->
              <!--<div class="portfolio-item-caption-content text-center text-white">-->
                <!--<i class="fas fa-plus fa-3x"></i>-->
              <!--</div>-->
            <!--</div>-->

            <!--<img class="img-fluid" src="https://icdn.24h.com.vn/upload/3-2019/images/2019-08-12/1565583887-ee16006c60c1ddcb9c580f8d3bd9bdac.jpg" alt="">-->
          <!--</div>-->
        <!--</div>-->

        <!--&lt;!&ndash; Portfolio Item 2 &ndash;&gt;-->
        <!--<div class="col-md-6 col-lg-4">-->
          <!--&lt;!&ndash;<span style="display: block; font-size: 20px; margin-bottom: 14px;">Vụ án buôn lậu 12 tấn heroin</span>&ndash;&gt;-->
          <!--<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">-->
            <!--<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">-->
              <!--<div class="portfolio-item-caption-content text-center text-white">-->
                <!--<i class="fas fa-plus fa-3x"></i>-->
              <!--</div>-->
            <!--</div>-->
            <!--<img class="img-fluid" src="img/portfolio/cake.png" alt="">-->
          <!--</div>-->
        <!--</div>-->

        <!--&lt;!&ndash; Portfolio Item 3 &ndash;&gt;-->
        <!--<div class="col-md-6 col-lg-4">-->
          <!--&lt;!&ndash;<span style="display: block; font-size: 20px; margin-bottom: 14px;">Vụ án buôn lậu 12 tấn heroin</span>&ndash;&gt;-->
          <!--<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">-->
            <!--<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">-->
              <!--<div class="portfolio-item-caption-content text-center text-white">-->
                <!--<i class="fas fa-plus fa-3x"></i>-->
              <!--</div>-->
            <!--</div>-->
            <!--<img class="img-fluid" src="img/portfolio/circus.png" alt="">-->
          <!--</div>-->
        <!--</div>-->

        <!--&lt;!&ndash; Portfolio Item 4 &ndash;&gt;-->
        <!--<div class="col-md-6 col-lg-4">-->
          <!--&lt;!&ndash;<span style="display: block; font-size: 20px; margin-bottom: 14px;">Vụ án buôn lậu 12 tấn heroin</span>&ndash;&gt;-->
          <!--<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">-->
            <!--<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">-->
              <!--<div class="portfolio-item-caption-content text-center text-white">-->
                <!--<i class="fas fa-plus fa-3x"></i>-->
              <!--</div>-->
            <!--</div>-->
            <!--<img class="img-fluid" src="img/portfolio/game.png" alt="">-->
          <!--</div>-->
        <!--</div>-->

        <!--&lt;!&ndash; Portfolio Item 5 &ndash;&gt;-->
        <!--<div class="col-md-6 col-lg-4">-->
          <!--&lt;!&ndash;<span style="display: block; font-size: 20px; margin-bottom: 14px;">Vụ án buôn lậu 12 tấn heroin</span>&ndash;&gt;-->
          <!--<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">-->
            <!--<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">-->
              <!--<div class="portfolio-item-caption-content text-center text-white">-->
                <!--<i class="fas fa-plus fa-3x"></i>-->
              <!--</div>-->
            <!--</div>-->
            <!--<img class="img-fluid" src="https://icdn.24h.com.vn/upload/3-2019/images/2019-08-12/1565583887-ee16006c60c1ddcb9c580f8d3bd9bdac.jpg" alt="">-->
          <!--</div>-->
        <!--</div>-->

        <!--&lt;!&ndash; Portfolio Item 6 &ndash;&gt;-->
        <!--<div class="col-md-6 col-lg-4">-->
          <!--&lt;!&ndash;<span style="display: block; font-size: 20px; margin-bottom: 14px;">Vụ án buôn lậu 12 tấn heroin</span>&ndash;&gt;-->
          <!--<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">-->
            <!--<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">-->
              <!--<div class="portfolio-item-caption-content text-center text-white">-->
                <!--<i class="fas fa-plus fa-3x"></i>-->
              <!--</div>-->
            <!--</div>-->
            <!--<img class="img-fluid" src="img/portfolio/submarine.png" alt="">-->
          <!--</div>-->
        <!--</div>-->

      </div>
      <!-- /.row -->

    </div>
  </section>

  <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">Về luật sư</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Luật sư Nguyễn Quang Sơn đã có hơn 20 năm kinh nghiệm trong việc bào chữa các bị cáo phạm tội trong lĩnh vực Hình sự và Dân sự, trong đó có những vụ án phạm tội nghiêm trọng.</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">là một luật sư yêu nghề, và có tâm với đương sự, luật sư đã bào chữa được cho nhiều bị cáo, giúp đỡ nhiều gia đình, cá nhân trong việc pháp lý</p>
        </div>
      </div>

      <!-- About Section Button -->
      <!--<div class="text-center mt-4">-->
        <!--<a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">-->
          <!--<i class="fas fa-download mr-2"></i>-->
          <!--Liên hệ ngay !-->
        <!--</a>-->
      <!--</div>-->

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Đặt lịch tư vấn</h2>
      <h6 class="text-center text-secondary mt-5">Vui lòng gọi điện cho luật sư vào số 0912 044 591 để xác nhận lịch hẹn</h6>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">

        <?php showMessage(); ?>

          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form method="post" action="index.php" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group controls mb-0 pb-2">
                <label>Họ và tên</label>
                <input class="form-control" name="customer_name" id="customer_name" type="text" placeholder="Nhập tên của bạn" required="required" data-validation-required-message="Vui lòng nhập tên của bạn.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group controls mb-0 pb-2">
                <label>Email</label>
                <input class="form-control" name="customer_email" id="customer_email" type="email" placeholder="Email" required="required" data-validation-required-message="Vui lòng nhập email của bạn.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group controls mb-0 pb-2">
                <label>Số điện thoại</label>
                <input class="form-control" name="customer_phone_number" id="customer_phone_number" type="tel" placeholder="Số điện thoại" required="required" data-validation-required-message="Vui lòng nhập số điện thoại của bạn.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
              <div class="control-group">
                  <div class="form-group controls mb-0 pb-2">
                      <label>Thời gian hẹn</label>
                      <input class="form-control" name="customer_time" id="customer_time" type="datetime-local" placeholder="Thời gian hẹn: Ngày giờ......" required="required" data-validation-required-message="Vui lòng nhập thời gian hẹn.">
                      <p class="help-block text-danger"></p>
                  </div>
              </div>
            <div class="control-group">
              <div class="form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" name="customer_short_desc" id="customer_short_desc" rows="5" placeholder="Mô tả ngắn gọn về việc/vụ án bạn muốn nhờ luật sư" required="required" data-validation-required-message="Vui lòng nhập mô tả ngắn gọn về công việc bạn muốn nhờ luật sư."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <input type="submit" value="Đặt lịch" class="btn btn-primary btn-xl" name="submit_book_appointment" id="submit_book_appointment">
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Liên hệ</h4>
          <p class="lead mb-3">Số điện thoại: <span style="font-weight: bold">0912 044 591</span></p>
          <p class="lead mb-0">Số nhà 105B, Tập thể Viện kiểm sát 2, ngách 84/7, phố Ngọc Khánh,
            <br>phường Giảng Võ, quận Ba Đình, Hà Nội</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Facebook của luật sư</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Về Thành Đô</h4>
          <p class="lead mb-0">Văn phòng Luật sư Thành Đô là một đơn vị chuyên cung cấp các dịch vụ liên quan đến pháp lý
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Bản quyền &copy; Văn phòng Luật sư Thành Đô 2019</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>
