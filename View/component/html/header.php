<style>
    <?php include '../css/header.css' ?>
</style>
<script src="https://kit.fontawesome.com/2ce63962ec.js" crossorigin="anonymous"></script>
<div class="header">
    <div class="hd-top">
        <div class="hd-left">
            <a href="#"><i class="fas fa-building"></i>Về trang sức doji</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>Hệ thống phân phối</a>
            <a href="#"><i class="fas fa-phone"></i>0345613201</a>
        </div>
        <div class="hd-mid">
            <a href="#"><img src="../img/logo-t.png" alt="logo ahm"></a>
        </div>
        <div class="hd-right">
            <div id="loginid"><i class="fas fa-user-circle"></i><a onClick="on()">Đăng nhập</a></div>
            <div id="userid" class="user">
                <span class="user-title"><i class="fas fa-user-circle"></i>Tài khoản</span>
                <div class="user-setting">
                    <a href="#">Thông tin tài khoản</a>
                    <a href="#">Đổi mật khẩu</a>
                    <a href="#">Đăng xuất</a>
                </div>
            </div>
            <a href="#"><i class="fas fa-shopping-cart"></i>Giỏ hàng</a>
            <div class="search">
                <form action="#">
                    <input id="search-field" type="text" required placeholder="Tìm kiếm sản phẩm" onfocus="focusSearchField(this)" onblur="blurSearchField(this)">
                    <button class="search-button"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="hd-navigation-collection" id="navbar">
    <ul>
        <li id="logo-nav"><a href="#"><img src="../img/logo-t.png" alt="logo"></a></li>
        <li class="nav-item"><h1><a href="#">Bộ sưu tập</a></h1></li>
        <li class="nav-item"><h1><a href="#">Kim cương viên</a></h1></li>
        <li class="nav-item"><h1><a href="#">Trang sức đá màu</a></h1></li>
        <li class="nav-item"><h1><a href="#">Trang sức cưới</a></h1></li>
    </ul>
</div>
<div id="overlay">
    <?php 
        include '../html/login.php'
    ?>
</div>
<script>
    function focusSearchField(x) {
        x.parentNode.style.borderColor = "rgb(241, 110, 110)";
    }
    function blurSearchField(x) {
        x.parentNode.style.borderColor = "rgba(122, 120, 120, 0.151)";
    }

    var isLogin = true;
    if (isLogin) {
        document.getElementById("loginid").style.display = "none";
        document.getElementById("userid").style.display = "inline-block";
    } else {
        document.getElementById("userid").style.display = "none";
        document.getElementById("loginid").style.display = "inline-block";
    }
    var loginId = document.getElementById("overlay");
    function on() {
        loginId.style.display = "block";
    }
    window.onclick = function (event) {
        if (event.target == loginId) {
            loginId.style.display = "none";
        }
    }
    window.onscroll = function() {scrollFunction()};

    var navigationBar = document.getElementById("navbar");
    var logo = document.getElementById("logo-nav");
    var stickyPosition = navigationBar.offsetTop;

    function scrollFunction() {
        if (window.pageYOffset >= stickyPosition) {
            navigationBar.classList.add("sticky")
            logo.style.display = "block"
        } else {
            navigationBar.classList.remove("sticky");
            logo.style.display = "none"
        }
    }
</script>