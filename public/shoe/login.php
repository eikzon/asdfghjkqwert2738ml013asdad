<?
include "inc/inc_absolutepath.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
<title>Login | Breaker เบรกเกอร์ : สั่งได้ดั่งใจ</title>
<link rel="stylesheet" media="all" href="css/style.css"/>
<link rel="stylesheet" media="all" href="css/more.css"/>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript">
navigator.version = (function(){
var ua= navigator.userAgent,
N= navigator.appName, tem,
M= ua.match(/(opera|chrome|safari|firefox|msie|trident)\/?\s*([\d\.]+)/i) || [];
M= M[2]? [M[1], M[2]]:[N, navigator.appVersion, '-?'];
if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];
return M.join(' ');
})();
</script>
<script type="text/javascript">
$(window).load(function(){
$(document).ready(function() {
$('.fancybox').fancybox();
var browser = navigator.version.split(' ')[0];
var version = navigator.version.split(' ')[1];
if(browser == 'MSIE' && parseFloat(version) < 9.0) {
alert('กรุณาใช้ IE เวอร์ชั่นที่ใหม่กว่า หรือเปลี่ยนเป็น Firefox และ Chrome ในการเข้าชม | You are using not supported browser, please upgrade the browser for the best experience.');
}
});
});
</script>
<![endif]-->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
<? include ("inc/inc_header.php");?>
<div class="container">
    <div class="productshead">
        <h1>Login / Register</h1>
        <span class="subhead">เข้าสู่ระบบ / ลงทะเบียน</span>
    </div><!-- .productshead -->
    <div class="container-login">
        <div class="blog center">
            <div class="blog-inside login">
                <h2>Login</h2>
                <p>กรุณากรอกข้อมูลในกล่องด้านล่างเพื่อเข้าสู่ระบบ<br>(สำหรับผู้ที่ลงทะเบียนแล้ว)</p>
                <form method="post" action="myaccount.php" class="form-style login">
                    <label for="user-email">อีเมล์<span>*</span></label>
                    <input type="text" name="user-email" id="user-email" autofocus>
                    <label for="user-password">รหัสผ่าน<span>*</span></label>
                    <input type="password" name="user-password" id="user-password">
                    <a href="forgot.php">ลืมรหัสผ่าน?</a>
                    <input type="submit" name="btn-submit" id="btn-submit" value="เข้าสู่ระบบ">
                </form>
            </div>
            <div class="blog-inside register">
                <h2>Register</h2>
                <p>สร้างบัญชี<br>ถ้าคุณไม่ได้เป็นสมาชิกกรุณาลงทะเบียน</p>
                <a href="register.php" class="btn-register">ลงทะเบียน</a>
            </div>
        </div>
    </div>
</div><!-- .container -->
<? include ("inc/inc_footer.php");?> 
</body>
</html>