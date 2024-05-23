<?php 
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        header('location:login.php');
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Danh sách đơn hàng bán</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php 
        require 'connect.php';
        $sql = "select * from nhanvien";
        $nhanvien = mysqli_query($connect,$sql);

        $sql = "select * from donxuat";
        $donxuat = mysqli_query($connect,$sql);
     ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php" ?>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "header.php" ?>

                </nav>
                <!-- End of Topbar -->

                <!-- Content chính -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Đơn hàng bán</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách đơn hàng bán</h6>
                        </div>
                        <?php 
                        if(isset($_GET['themthanhcong'])){?>
                            <span class = "mt-3 ml-5" style="color:green"><?php echo $_GET['themthanhcong'] ?></span>
                        <?php } ?>
                        <?php 
                        if(isset($_GET['suathanhcong'])){?>
                            <span class = "mt-3 ml-5" style="color:green"><?php echo $_GET['suathanhcong'] ?></span>
                        <?php } ?>
                        <?php 
                        if(isset($_GET['xoathanhcong'])){?>
                            <span class = "mt-3 ml-5" style="color:green"><?php echo $_GET['xoathanhcong'] ?></span>
                        <?php } ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <button type="button" class="btn btn-success mb-3">
                                    <a class = "text-white text-decoration-none" href="themdonhangxuat.php">Thêm đơn hàng bán</a>
                                </button>
                                <table class="table table-bordered table-warning" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Ngày xuất</th>
                                            <th>Nhân viên bán</th>
                                            <th>Trạng thái</th>
                                            <th>Tổng tiền</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($donxuat as $each):?>
                                            <tr>
                                                <th><?php echo $each['id'] ?></th>
                                                <th><?php echo $each['ngayxuat'] ?></th>
                                                <th>
                                                    <?php foreach ($nhanvien as $nv): ?>
                                                        <?php if ($nv['id'] == $each['id_nhanvien']): ?>
                                                            <?php echo $nv['ten']; break; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </th>
                                                <th><?php echo $each['trangthai'] ?></th>
                                                <th><?php echo number_format(ceil($each['tongtien']), 0, '.', ',') . ' đ'; ?></th>
                                                <th>
                                                    <button type="button" class="btn btn-primary mb-3"><a class = "text-white text-decoration-none" href="chitietdonxuat.php?id=<?php echo $each['id'] ?>">Chi tiết</a></button>
                                                    <!-- <a class="btn btn-danger mb-3" href="#" data-toggle="modal" data-target="#xoadonhangnhap-modal" data-productid="<?php echo $each['id']; ?>">
                                                        Xóa
                                                    </a> -->
                                                    
                                                </th>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php" ?>
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
    <div class="modal fade" id="xoadonhangnhap-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xóa sản phẩm</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Bạn có muốn xóa sản phẩm này không?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <button id="confirm-xoa-sanpham" class="btn btn-primary">Xóa</button>
                </div>
            </div>
        </div>
    </div>

    <?php include "script.php" ?>
    <script src="js/jsquery.js"></script>

</body>

</html>