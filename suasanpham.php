<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sửa sản phẩm</title>
</head>

<body id="page-top">
    <?php 
        if(!isset($_GET['id']) || !isset($_GET['ten']) || !isset($_GET['gianhap'])
            || !isset($_GET['giaban'])
        )
        {
            header('location:danhsachsanpham.php');
        }
        $id = $_GET['id'];
        $ten = $_GET['ten'];
        $gianhap = $_GET['gianhap'];
        $giaban = $_GET['giaban'];
        require 'connect.php';
     ?>
    <div id="wrapper">
        <?php include "sidebar.php" ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include "header.php" ?>
                <h2 class="text-center text-dark mt-5">Sửa sản phẩm</h2>
                <div class="d-flex justify-content-center">
                    <form method="post" action="process_suasanpham.php" style="width: 500px;" class = "ml-5">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label>Tên sản phẩm</label>
                    <br/>
                    <input name = "ten" value="<?php echo $ten; ?>"  type="text" class="form-control mb-2" placeholder="Tên sản phẩm" aria-label="Username" aria-describedby="basic-addon1">

                    <label>Giá nhập</label>
                    <br/>
                    <input name = "gianhap" value="<?php echo $gianhap; ?>"  type="number" class="form-control mb-2" placeholder="Giá nhập" aria-label="Username" aria-describedby="basic-addon1">

                    <label>Giá bán</label>
                    <br/>
                    <input name = "giaban" value="<?php echo $giaban; ?>"  type="number" class="form-control mb-2" placeholder="Giá bán" aria-label="Username" aria-describedby="basic-addon1">
                    <?php 
                        if(isset($_GET['error'])){?>
                            <span class = "mt-1" style="color:red"><?php echo $_GET['error'] ?></span>
                            <br/>
                    <?php } ?>
                    <button class="btn btn-warning">Sửa</button>
                </form>
                </div>
                
            </div>
            <?php include "footer.php" ?>
        </div>
    </div>
    <!-- JS -->
    <?php include "script.php" ?>

</body>
</html>