<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách đặt lịch hẹn</h1>
    <p class="mb-4">Quản lý lịch hẹn của khách hàng</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Xem tất cả lịch hẹn</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Họ và tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Thời gian hẹn</th>
                    </tr>
                    </thead>


                    <tbody>

                    <?php

                    $select_all_customer_bookings = "SELECT *
FROM customer_bookings";
                    $select_all_customer_bookings_query = mysqli_query($connection, $select_all_customer_bookings);

                    while ($customer_booking = mysqli_fetch_assoc($select_all_customer_bookings_query)):

                    ?>

                    <tr>
                        <td><?php echo $customer_booking['id'] ?></td>
                        <td><?php echo $customer_booking['customer_name'] ?></td>
                        <td><?php echo $customer_booking['customer_email'] ?></td>
                        <td><?php echo $customer_booking['customer_phone_number'] ?></td>
                        <td><?php echo $customer_booking['customer_time'] ?></td>
                    </tr>

                    <?php endwhile; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

