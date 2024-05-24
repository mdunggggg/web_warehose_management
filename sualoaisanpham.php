<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sửa loại sản phẩm</title>

</head>

<body id="page-top">
    <?php 
        if(!isset($_GET['id']) || !isset($_GET['ten']) || !isset($_GET['dvt']))
        {
            header('location:danhsachloaisanpham.php');
        }
        $id = $_GET['id'];
        $ten = $_GET['ten'];
        $dvt = $_GET['dvt'];
     ?>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "sidebar.php" ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <?php include "header.php" ?>
                <h2 class="text-center text-dark mt-5">Sửa loại sản phẩm</h2>
                <div class="d-flex justify-content-center">
                    <form method="post" action="process_sualoaisanpham.php" style="width: 500px;" class = "ml-5">
                    <label>ID loại sản phẩm cần sửa</label>
                    <br/>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input readonly value="<?php echo $id; ?>"  type="text" class="form-control mb-2">
                    <label>Tên loại sản phẩm</label>
                    <br/>
                    <input name = "ten" value="<?php echo $ten  ?>"  type="text" class="form-control mb-2" placeholder="Tên loại sản phẩm" aria-label="Username" aria-describedby="basic-addon1">
                    <label>Đơn vị tính</label>
                    <br/>
                    <input name = "donvi" value="<?php echo $dvt  ?>"  type="text" class="form-control mb-2" placeholder="Đơn vị tính" aria-label="Username" aria-describedby="basic-addon1">
                    <?php 
                        if(isset($_GET['error'])){?>
                            <span class = "mt-1" style="color:red"><?php echo $_GET['error'] ?></span>
                            <br/>
                    <?php } ?>
                    <button class="btn btn-warning">Sửa</button>
                </form>
                </div>
            </div>
            <!-- Footer -->
            <?php include "footer.php" ?>
        </div>

    </div>
    <!-- JS -->
    <?php include "script.php" ?>

</body>

</html>