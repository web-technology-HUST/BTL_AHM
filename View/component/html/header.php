<style>
    <?php include '../css/header.css'; ?>
</style>
<script src="https://kit.fontawesome.com/2ce63962ec.js" crossorigin="anonymous"></script>
<div id="mySidenav" class="sidenav hideNav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="border: none;">Close&times;</a>
    <a href="#">Bộ sưu tập</a>
    <a href="#">Kim cương viên</a>
    <a href="#">Trang sức đá màu</a>
    <a href="#">Trang sức cưới</a>
    <div class="search" style="display: block">
        <form action="#" style="width: 100%">
            <input id="search-field" type="text" required placeholder="Tìm kiếm sản phẩm" onfocus="focusSearchField(this)" onblur="blurSearchField(this)">
            <button class="search-button"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
<div class="header">
    <div class="hd-top">
        <div class="hd-left hideNav">
            <span id="symbolSideNav" class="" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
        <div class="hd-left showNav">
            <a href="#"><i class="fas fa-building"></i>Về trang sức doji</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>Hệ thống phân phối</a>
            <a href="#"><i class="fas fa-phone"></i>0345613201</a>
        </div>
        <div class="hd-mid">
            <a href="#"><img src="../img/logo-t.png" alt="logo ahm"></a>
        </div>
        <div class="hd-right">
            <div id="loginid"><a id="loginIdA" onClick="clickLogin()"><i class="fas fa-user-circle"></i>Đăng nhập</a></div>
            <div id="registerid"><a id="registerIdA" onClick="clickRegister()"><i class="far fa-registered"></i>Đăng ký</a></div>
            <div id="userid" class="user">
                <span id=userIdA class="user-title"><i class="fas fa-user-circle"></i>Tài khoản</span>
                <div class="user-setting">
                    <a href="#">Thông tin tài khoản</a>
                    <a href="#">Đổi mật khẩu</a>
                    <a href="#">Đăng xuất</a>
                </div>
            </div>
            <a id="cartIdA" href="#"><i class="fas fa-shopping-cart"></i>Giỏ hàng</a>
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
<div id="overlay-login" class="overlap">
    <?php 
        include '../html/login.php'
    ?>
</div>
<div id="overlay-register" class="overlap">
    <?php 
        include '../html/formCreateAccount.php'
    ?>
</div>
<script>
    function focusSearchField(x) {
        x.parentNode.style.borderColor = "rgb(241, 110, 110)";
    }
    function blurSearchField(x) {
        x.parentNode.style.borderColor = "rgba(122, 120, 120, 0.151)";
    }

    var isLogin = false;
    if (isLogin) {
        document.getElementById("loginid").style.display = "none";
        document.getElementById("registerid").style.display = "none";
        document.getElementById("userid").style.display = "inline-block";
    } else {
        document.getElementById("userid").style.display = "none";
        document.getElementById("loginid").style.display = "inline-block";
        document.getElementById("registerid").style.display = "inline-block";
    }
    var loginId = document.getElementById("overlay-login");
    var registerId = document.getElementById("overlay-register");
    var sidebarId = document.getElementById("overlay-sidebar");
    
    function clickLogin() {
        loginId.style.display = "block";
    }
    function clickRegister() {
        registerId.style.display = "block";
    }
    window.onclick = function (event) {
        if (event.target == loginId) {
            loginId.style.display = "none";
        }
        if (event.target == registerId) {
            registerId.style.display = "none";
        }
        if (event.target == sidebarId) {
            sidebarId.style.display = "none";
        }
    }
    window.onscroll = function() {scrollFunction()};

    var navigationBar = document.getElementById("navbar");
    var logo = document.getElementById("logo-nav");
    var stickyPosition = navigationBar.offsetTop;

    function scrollFunction() {
        if (window.pageYOffset >= stickyPosition) {
            navigationBar.classList.add("sticky");
            logo.style.display = "block";
        } else {
            navigationBar.classList.remove("sticky");
            logo.style.display = "none";
        }
    }

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function changeWidth(x) {
        if (x.matches) {
            document.getElementById("loginIdA").innerHTML = '<i class="fas fa-user-circle"></i>';
            document.getElementById("registerIdA").innerHTML = '<i class="far fa-registered"></i>';
            document.getElementById("userIdA").innerHTML = '<i class="fas fa-user-circle"></i>';
            document.getElementById("cartIdA").innerHTML = '<i class="fas fa-shopping-cart"></i>';
        } else {
            document.getElementById("loginIdA").innerHTML = '<i class="fas fa-user-circle"></i>Đăng nhập';
            document.getElementById("registerIdA").innerHTML = '<i class="far fa-registered"></i>Đăng ký';
            document.getElementById("userIdA").innerHTML = '<i class="fas fa-user-circle"></i>Tài khoản';
            document.getElementById("cartIdA").innerHTML = '<i class="fas fa-shopping-cart"></i>Giỏ hàng';
        }
    }
    var media = window.matchMedia("(max-width: 991px)");
    changeWidth(media);
    media.addListener(changeWidth);
</script>