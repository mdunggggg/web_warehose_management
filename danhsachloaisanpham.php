<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Danh sách loại sản phẩm</title>
</head>

<body id="page-top">
    <?php 
        
        require 'connect.php';
        $sql = "select * from loaisanpham";
        $result = mysqli_query($connect,$sql);
     ?>
    <div id="wrapper">
        <?php include "sidebar.php" ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php include "header.php" ?>
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Loại sản phẩm</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách loại sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <button type="button" class="btn btn-success mb-3">
                                    <a class = "text-white text-decoration-none" href="themloaisanpham.php">Thêm loại sản phẩm</a>
                                </button>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên loại sản phẩm</th>
                                            <th>Đơn vị tính</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($result as $each):?>
                                            <tr>
                                                <th><?php echo $each['id'] ?></th>
                                                <th><?php echo $each['ten'] ?></th>
                                                <th><?php echo $each['donvitinh'] ?></th>
                                                <th>
                                                    <button type="button" class="btn btn-primary mb-3"><a class = "text-white text-decoration-none" href="sualoaisanpham.php?id=<?php echo $each['id'] ?>&ten=<?php echo $each['ten'] ?>&dvt=<?php echo $each['donvitinh'] ?>">Sửa</a></button>
                                                    <a class="btn btn-danger mb-3" href="#" data-toggle="modal" data-target="#xoadonvi-modal" data-productid="<?php echo $each['id']; ?>">
                                                        Xóa
                                                    </a>
                                                    
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
            <?php include "footer.php" ?>
        </div>
    </div>
    <!-- Logout Modal-->
    <div class="modal fade" id="xoadonvi-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xóa loại sản phẩm</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Bạn có muốn xóa loại sản phẩm này không</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <button id="confirm-delete" class="btn btn-primary">Xóa</button>
                </div>
            </div>
        </div>
    </div>
    <?php include "script.php" ?>
    <script src="js/jsquery.js"></script>
</body>

</html>