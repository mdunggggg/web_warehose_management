<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thêm loại sản phẩm</title>

</head>

<body id="page-top">
    <div id="wrapper">
        <?php include "sidebar.php" ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include "header.php" ?>
                <form method="post" action="process_themloaisanpham.php" style="max-width: 400px;" class = "ml-5">
                	<label>Tên loại sản phẩm</label>
                	<br/>
  					<input name = "ten"  type="text" class="form-control mb-2" placeholder="Tên loại sản phẩm" aria-label="Username" aria-describedby="basic-addon1">
                    <label>Đơn vị tính</label>
                    <br/>
                    <input name = "donvitinh"  type="text" class="form-control mb-2" placeholder="Đơn vị tính" aria-label="Username" aria-describedby="basic-addon1">
  					<?php 
						if(isset($_GET['error'])){?>
							<span class = "mt-1" style="color:red"><?php echo $_GET['error'] ?></span>
							<br/>
					<?php } ?>
  					<button class="btn btn-warning">Thêm</button>
                </form>
            </div>
            <!-- Footer -->
            <?php include "footer.php" ?>
        </div>

    </div>
    
    <?php include "script.php" ?>

</body>

</html>