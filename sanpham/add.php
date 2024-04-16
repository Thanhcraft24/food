<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class='row'>
        <div class='row frmtitle'>
            <h1>THÊM SẢN PHẨM MỚI</h1>
        </div>

        <div class='row frmcontent'>
            <form action="../doan/index.php?act=addsp" method='POST' enctype='multipart/form-data'>
                
                <div class='row mb10'>
                    Mã sản phẩm <br>
                    <input type="text" name='masp' disabled>
                </div>

                <div class='row mb10'>
                    Tên sản phẩm <br>
                    <input type="text" name='tensp' disabled>
                </div>

                <div class='row mb10'>
                    Giá <br>
                    <input type="text" name='giasp' disabled>
                </div>

                <div class='row mb10'>
                    Hình <br>
                    <input type="file" name='hinh' disabled>
                </div>

                <div class='row mb10'>
                    Mô tả <br>
                    <textarea name="mota" cols="30" rows="10"></textarea>
                </div>

                <div class='row mb10'>
                    <input type="submit" name='themmmoi' value='THÊM MỚI'>
                    <input type="reset" value='NHẬP LẠI'>
                    <a href="index.php?act=listsp"><input type="button" value='DANH SÁCH'></a>
                </div>

                <?php 
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>

            </form>
        </div>
    </div>
</body>
</html>