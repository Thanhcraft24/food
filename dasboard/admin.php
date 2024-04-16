<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="menu">
            <div class="i-menu"><i class="fa-solid fa-bars"></i></div>
            <div class="text-menu">Menu</div>
        </div>
        <a href='/doan/homepage/homepage.php'><img src="/doan\img\Honkai_Star_Raillogo.jpg" alt=""></a>
        <div class="search">
            <button class="button-search" id='srch'><i class="fa-solid fa-magnifying-glass"></i></button>
            <input type="text" placeholder="Tìm kiếm sản phẩm..." class="input-search" id='search-input'>
        </div>

        <div class="user">
            <a href="/doan/account/login/login.php">
            <div class="i-user"><i class="fa-regular fa-user"></i></div>
            <div class="text-user">Tài khoản</div>
            </a>
        </div>

        <div class="cart">
            <div class="i-cart"><button><i class="fa-solid fa-cart-shopping"></i></button></div>
            <div class="text-cart">Giỏ hàng</div>
        </div>
    </div>
    <div class='Middle'>
        <div class='sideBar'>
            <ul>
                <li>
                    <input type="radio" name='teb' class='input' checked>
                    <label>
                        <i class="fa-solid fa-list"></i> Chính
                    </label>
                    <div class='rightBar'>
                        <div class='Stats'>
                            <div class='subStats'><i2 class="fa-solid fa-bag-shopping"></i2>Sản Phẩm</div>
                            <div class='subStats'><i1 class="fa-solid fa-window-maximize"></i1>Trang Web</div>
                            <div class='subStats2'><i3 class="fa-solid fa-chart-simple"></i3>Số Đơn Đặc Hàng</div>
                        </div>
                        <table>
                            <tr>
                                <td class='title' colspan='5'>Đơn hàng mới</td>
                            </tr>
                            <tr class='databaseList'>
                                <td class='td'>Mã đơn hàng</td>
                                <td class='td'>Tên đơn hàng</td>
                                <td class='td'>Số tiền</td>
                                <td class='td'>Tình trạng</td>
                                <td class='td2'>Ghi chú</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="radio" name='teb' class='input'>
                    <label>
                        <i class="fa-solid fa-bag-shopping"></i> Quản lí sản phẩm
                    </label>
                    <div class='rightBar'>
                        <div class='addRow'>
                            Thêm sản phẩm
                            <div class='addRowBox'>
                                <div class='col1'>
                                    <div class='row1'>Mã sản phẩm:</div>
                                    <div class='row1'>Tên sản phẩm:</div>
                                    <div class='row1'>Giá tiền:</div>
                                </div>
                                <div class='col2'>
                                    <div class='row2'><input type='text' class='input2' name='masp'></div>
                                    <div class='row2'><input type='text' class='input2' name='tensp'></div>
                                    <div class='row2'><input type='text' class='input2' name='giatien'></div>
                                </div>
                                <input type="button" value='Thêm' class='submit'>
                            </div>
                        </div>
                        <table>
                            <tr>
                                <td class='title' colspan='5'>Sản phẩm</td>
                            </tr>
                            <tr class='databaseList'>
                                <td class='td'>Mã sản phẩm</td>
                                <td class='td'>Tên tên sản phẩm</td>
                                <td class='td'>Số tiền</td>
                                <td class='td'>Tình trạng</td>
                                <td class='td2'>Tuỳ chỉnh</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <label>
                        <a href='http://localhost/doan/'><i class="fa-solid fa-window-maximize"></i> Quản lí trang</a>
                    </label>
                </li>
                <li>
                    <input type="radio" name='teb' class='input'>
                    <label>
                        <i class="fa-solid fa-chart-simple"></i> Chỉ số bán hàng
                    </label>
                </li>
                <li>
                    <label>
                       <a href='/doan/homepage/homepage.php'> <i class="fa-solid fa-right-to-bracket"></i> Đăng Xuất</a>
                    </label>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>