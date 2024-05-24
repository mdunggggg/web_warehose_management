<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thêm đơn vị</title>
</head>

<body id="page-top">
    <?php 
        if(!isset($_GET['id']) || !isset($_GET['ten']) 
            || !isset($_GET['sodienthoai']) || !isset($_GET['email'])
            || !isset($_GET['diachi'])
        )
        {
            header('location:danhsachnhacungcap.php');
        }
        $id = $_GET['id'];
        $ten = $_GET['ten'];
        $sodienthoai = $_GET['sodienthoai'];
        $email = $_GET['email'];
        $diachi = $_GET['diachi'];
     ?>
    <div id="wrapper">
        <?php include "sidebar.php" ?>
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <?php include "header.php" ?>
                <h2 class="text-center text-dark mt-5">Sửa nhà cung cấp</h2>
                <div class="d-flex justify-content-center">
                    <form method="post" action="process_suanhacungcap.php" style="width: 500px;" class = "ml-5">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label>Nhà cung cấp</label>
                    <br/>
                    <input name = "ten" value="<?php echo $ten ?>"  type="text" class="form-control mb-2" placeholder="Tên nhà cung cấp" aria-label="Username" aria-describedby="basic-addon1">

                    <label>Điện thoại</label>
                    <br/>
                    <input name = "sodienthoai" value="<?php echo $sodienthoai ?>"  type="text" class="form-control mb-2" placeholder="Số điện thoại" aria-label="Username" aria-describedby="basic-addon1">

                    <label>Email</label>
                    <br/>
                    <input name = "email" value="<?php echo $email ?>"  type="email" class="form-control mb-2" placeholder="Nhập email" aria-label="Username" aria-describedby="basic-addon1">

                    <label>Địa chỉ</label>
                    <br/>
                    <input name = "diachi" value="<?php echo $diachi ?>"  type="text" class="form-control mb-2" placeholder="Nhập địa chỉ.." aria-label="Username" aria-describedby="basic-addon1">
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