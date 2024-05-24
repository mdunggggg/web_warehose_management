<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thêm sản phẩm</title>
</head>

<body id="page-top">
    <?php 
        require 'connect.php';

        $sql = "select * from loaisanpham";
        $lsp = mysqli_query($connect,$sql);

        $sql = "select * from nhacungcap";
        $ncc = mysqli_query($connect,$sql);
     ?>
    <div id="wrapper">
        <?php include "sidebar.php" ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <?php include "header.php" ?>

                <h2 class="text-center text-dark mt-5">Thêm sản phẩm</h2>
                <div class="d-flex justify-content-center">
                    <form method="post" action="process_themsanpham.php" style="width: 500px;" class = "ml-5">
                    <label>Tên sản phẩm</label>
                    <br/>
                    <input name = "ten"  type="text" class="form-control mb-2" placeholder="Tên sản phẩm" aria-label="Username" aria-describedby="basic-addon1">

                    <label>Loại sản phẩm</label>
                    <br/>
                    <select name="loaisanpham" class="input-group form-control form-select form-select-lg mb-3" aria-label="Large select example">
                        <?php foreach ($lsp as $each):?>
                                    <option value="<?php echo $each['id']; ?>"><?php echo $each['ten'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <label>Nhà cung cấp</label>
                    <br/>
                    <select name="nhacungcap" class="input-group form-control form-select form-select-lg mb-3" aria-label="Large select example">
                        <?php foreach ($ncc as $each):?>
                                    <option value="<?php echo $each['id']; ?>"><?php echo $each['ten'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <label>Giá nhập</label>
                    <br/>
                    <input name = "gianhap"  type="number" class="form-control mb-2" placeholder="Giá nhập" aria-label="Username" aria-describedby="basic-addon1">

                    <label>Giá bán</label>
                    <br/>
                    <input name = "giaban"  type="number" class="form-control mb-2" placeholder="Giá bán" aria-label="Username" aria-describedby="basic-addon1">
                    <label>Số lượng</label>
                    <br/>
                    <input name = "soluong"  type="number" class="form-control mb-2" placeholder="Nhập số lượng" aria-label="Username" aria-describedby="basic-addon1">
                    <?php 
                        if(isset($_GET['error'])){?>
                            <span class = "mt-1" style="color:red"><?php echo $_GET['error'] ?></span>
                            <br/>
                    <?php } ?>
                    <button class="btn btn-warning">Thêm</button>
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