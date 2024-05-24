<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trang tổng quan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body id="page-top">
    <?php 
        require 'connect.php';
        // Top 5 san pham co gia ban cao nhat
        $sql = "SELECT * FROM sanpham ORDER BY giaban DESC LIMIT 5";
        require 'connect.php';
        $top5sp = mysqli_query($connect,$sql);
     ?>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "sidebar.php" ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                
                <?php include "header.php" ?>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Trang tổng quan</h1>
                    </div>
                    <h3 class="mt-5 mb-3" style="font-weight: 700;color: #41B06E; ">Top 5 sản phẩm có giá bán cao nhất</h3>
                    <table class="table" id="dataTable" width="80%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá bán</th>
                                        </tr>
                                    </thead>
                                    <?php $stt = 1;
                                    foreach ($top5sp as $each):?>
                                            <tr>
                                                <th><?php echo $stt ?></th>
                                                <th><?php echo $each['ten'] ?></th>
                                                <th><?php echo number_format($each['giaban'], 0, '.', ',')  ?></th>
                                            </tr>
                                        <?php $stt++; endforeach ?>
                                    </tbody>
                                </table>

                </div>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2024</span>
                    </div>
                </div>
            </footer>

        </div>

    </div>
    <?php include "script.php" ?>

</body>

</html>