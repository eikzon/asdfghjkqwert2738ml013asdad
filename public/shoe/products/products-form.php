<?

// Include Absolute Path

include "../inc/inc_absolutepath.php";

?>

<!doctype html>

<html>

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

<title>สังซื้อสินค้า | Breaker เบรกเกอร์ : สั่งได้ดั่งใจ</title>

<link rel="stylesheet" type="text/css" href="../css/animate.css" />

<link rel="stylesheet" href="../css/style.css" type="text/css"/>

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

<script src="../js/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>



<body style="background:#f4f4f4;">

<?php

if ($_POST['sendmail'] == "OK") {

	 $name = $_POST['full_name'] ;

      $products = $_POST['products'] ;

	  $color = $_POST['color'] ;

	  $size = $_POST['size'] ;

	  $telephone = $_POST['full_tel'] ;

	  $email = $_POST['full_email'] ;

	  $address = $_POST['address'] ;	  

	  $message = "

	  

Breaker Post form Website.

รองเท้านักเรียน  : $products

ขนาดรองเท้า : $size



ชื่อ-สกุล : $name

เบอร์โทรศัพท์ : $telephone

อีเมล์ : $email

ที่อยู่ : $address ";



     if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$", $email)) 

     { 

          print "<script>alert('Please input your email');history.back();</script>";

          exit();

     }

	 

if ($email) {

 $ret1 = mail( $email, //ª×èÍÅÙ¡¤éÒ

	"Thank you for contact Breaker : $sname", //ª×èÍËéÇ¢éÍÍÕàÁÅì

    //"From: watana-design no reply \r\n". 

	//" \r\n".

	"Contact from: Breaker Shoes, \r\n".

	//" \r\n".

	"-----------------------------------------\r\n".

	"Your Message: $message \r\n".

	" \r\n".

	"Thank you for contacting Breaker Shoes! \r\n".

	"เราได้รับรายละเอียดการสั่งซื้อจากคุณแล้ว จะติดต่อกลับในไม่ช้า  \r\n".

	"www.Breaker-shoes.com \r\n"

		, 

	"From: info@scs-shoes.com" //ª×èÍàÁÅì¢Í§¤Ø³

	);

}



     mail ("info@scs-shoes.com,saleonlinescs@gamil.com", "ติดต่อสั่งซื้อรองเท้า : $name", $message, "From: $email") ;

     print "<script>alert('ขอบคุณที่ติดต่อ www.breaker-shoes.com! ทางเราจะติดต่อกลับโดยเร็วที่สุด'); window.close();</script>";

}

?>

<form method="post" action="<?=$PHP_SELF?>" onsubmit="return checkContact();">

<div class="purchase">

<div class="iTable">

    <ul class="iRow">

    <li class="iTd"><h2>สั่งซื้อสินค้า Breaker</h2></li><li class="iTd"></li>

    </ul>

    <ul class="iRow">

    <li class="iTd left"><h3>รองเท้า Breaker</h3></li>

    <li class="iTd">

<select name="products" id="products" class="inputform">

<option value="-1">== Select ==</option>
<option value="Breaker Real - BK0908 - Y"<?php echo ($_GET['products'] == bk0908y)? 'selected' : '' ?>>Breaker Real - BK0908 - Y</option>
<option value="Breaker Real - BK0908 - GN"<?php echo ($_GET['products'] == bk0908gn)? 'selected' : '' ?>>Breaker Real - BK0908 - GN</option>

<option value="Breaker Drive - BD002 - GN"<?php echo ($_GET['products'] == bd002gn)? 'selected' : '' ?>>Breaker Drive - BD002 - GN</option>

<option value="Breaker Drive - BD002 - OR"<?php echo ($_GET['products'] == bd002or)? 'selected' : '' ?>>Breaker Drive - BD002 - OR</option>

<option value="Breaker King Knit - BD003 - RE"<?php echo ($_GET['products'] == BD003RE)? 'selected' : '' ?>>Breaker King Knit - BD003 - RE</option>

<option value="Breaker King Knit - BD003 - BL"<?php echo ($_GET['products'] == BD003BL)? 'selected' : '' ?>>Breaker King Knit - BD003 - BL</option>

<option value="Breaker King Knit - BC006 - BK"<?php echo ($_GET['products'] == BC006BK)? 'selected' : '' ?>>Breaker King Knit - BC006 - BK</option>

<option value="Breaker King Knit - BC006 - GN"<?php echo ($_GET['products'] == BC006GN)? 'selected' : '' ?>>Breaker King Knit - BC006 - GN</option>

<option value="Breaker Monster - BC003 - RE"<?php echo ($_GET['products'] == bc003re)? 'selected' : '' ?>>Breaker Monster - BC003 - RE</option>
<option value="Breaker Monster - BC003 - BK"<?php echo ($_GET['products'] == bc003bk)? 'selected' : '' ?>>Breaker Monster - BC003 - BK</option>
<option value="Breaker CM PRO - CM002 - GN"<?php echo ($_GET['products'] == cm002gn)? 'selected' : '' ?>>Breaker CM PRO - CM002 - GN</option>
<option value="Breaker CM PRO - CM002 - PK"<?php echo ($_GET['products'] == cm002pk)? 'selected' : '' ?>>Breaker CM PRO - CM002 - PK</option>
<option value="Breaker Phantom - BK0909 - GY"<?php echo ($_GET['products'] == bk0909gy)? 'selected' : '' ?>>Breaker Phantom - BK0909 - GY</option>
<option value="Breaker Phantom - BK0909 - BK"<?php echo ($_GET['products'] == bk0909bk)? 'selected' : '' ?>>Breaker Phantom - BK0909 - BK</option>
<option value="Breaker King Cobra - BC002  - BL">Breaker King Cobra - BC002 - BL</option>
<option value="Breaker Cmpro - BK0907"<?php echo ($_GET['products'] == bk0907)? 'selected' : '' ?>>Breaker Cmpro - BK0907</option>
<option value="Breaker Drive - BD001"<?php echo ($_GET['products'] == bd001)? 'selected' : '' ?>>Breaker Drive - BD001</option>
<option value="Breaker King Cobra Limited - BCL001"<?php echo ($_GET['products'] == bcl001)? 'selected' : '' ?>>Breaker King Cobra Limited - BCL001</option>
<option value="Breaker King Cobra - BC001"<?php echo ($_GET['products'] == bc001)? 'selected' : '' ?>>Breaker King Cobra - BC001</option>
<option value="Breaker BK0906"<?php echo ($_GET['products'] == bk0906)? 'selected' : '' ?>>Breaker BK0906</option>
<option value="Breaker FB39 NV"<?php echo ($_GET['products'] == fb39nv)? 'selected' : '' ?>>Breaker FB39 NV</option>
<option value="Breaker FB39 SV"<?php echo ($_GET['products'] == fb39sv)? 'selected' : '' ?>>Breaker FB39 SV</option>
<option value="Breaker FB39 YL"<?php echo ($_GET['products'] == fb39yl)? 'selected' : '' ?>>Breaker FB39 YL</option>
<option value="Breaker FB40 BK"<?php echo ($_GET['products'] == fb40bk)? 'selected' : '' ?>>Breaker FB40 BK</option>
<option value="Breaker FB40 BL"<?php echo ($_GET['products'] == fb40bl)? 'selected' : '' ?>>Breaker FB40 BL</option>
<option value="Breaker FB40 GN"<?php echo ($_GET['products'] == fb40gn)? 'selected' : '' ?>>Breaker FB40 GN</option>
<option value="Breaker FB41 RE"<?php echo ($_GET['products'] == fb41re)? 'selected' : '' ?>>Breaker FB41 RE</option>
<option value="Breaker FB41 WH"<?php echo ($_GET['products'] == fb41wh)? 'selected' : '' ?>>Breaker FB41 WH</option>
<option value="Breaker FB41 YL"<?php echo ($_GET['products'] == fb41yl)? 'selected' : '' ?>>Breaker FB41 YL</option>
<option value="Breaker FB42 BL"<?php echo ($_GET['products'] == fb42bl)? 'selected' : '' ?>>Breaker FB42 BL</option>
<option value="Breaker FB42 BK GN"<?php echo ($_GET['products'] == fb42bkgn)? 'selected' : '' ?>>Breaker FB42 BK GN</option>
<option value="Breaker FB42 PK"<?php echo ($_GET['products'] == fb42pk)? 'selected' : '' ?>>Breaker FB42 PK</option>
<option value="Breaker FB43 BK"<?php echo ($_GET['products'] == fb43bk)? 'selected' : '' ?>>Breaker FB43 BK</option>
<option value="Breaker FB43 OR"<?php echo ($_GET['products'] == fb43or)? 'selected' : '' ?>>Breaker FB43 OR</option>
<option value="Breaker FB43 WH"<?php echo ($_GET['products'] == fb43wh)? 'selected' : '' ?>>Breaker FB43 WH</option>

</select>

    </li>

    </ul>

    <ul class="iRow">

    <li class="iTd left"><h3>ขนาดรองเท้า</h3></li>

    <li class="iTd"><input type="text" name="size"  id="size" class="inputform" placeholder="ขนาดรองเท้า"/></li>

    </ul>
<ul class="iRow">

    <li class="iTd left"><h3>สีรองเท้า</h3></li>

    <li class="iTd"><input type="text" name="
    "  id="color" class="inputform" placeholder="สีรองเท้า"/></li>

    </ul>
    <ul class="iRow">

    <li class="iTd left"><h2>รายละเอียดผู้สั่งซื้อ</h2></li><li class="iTd"></li>

    </ul>

    <ul class="iRow">

    <li class="iTd left"><h3>ชื่อ-สกุล</h3></li>

    <li class="iTd"><input type="text" name="full_name"  id="full_name" class="inputform" placeholder="ชื่อ-สกุล"/></li>

    </ul>

    <ul class="iRow">

    <li class="iTd left"><h3>ที่อยู่</h3></li>

    <li class="iTd"><textarea name="address" rows="9"  id="address" class="inputform" placeholder="ที่อยู่"></textarea></li>

    </ul>

    <ul class="iRow">

    <li class="iTd left"><h3>อีเมล์</h3></li>

    <li class="iTd"><input type="text" name="full_email" id="full_email" class="inputform" placeholder="อีเมล์"/></li>

    </ul>

    <ul class="iRow">

    <li class="iTd left"><h3>เบอร์โทรศัพท์</h3></li>

    <li class="iTd"><input type="text" name="full_tel" id="full_tel" class="inputform" placeholder="เบอร์โทรศัพท์"/></li>

    </ul>

    <ul class="iRow">

    <li class="iTd left"></li>

    <li class="iTd"><input type="submit" name="Submit" id="Submit" class="uibutton" value="Send" title="ติดต่อสั่งซื้อ" />

      <input type="hidden" name="sendmail" value="OK" /></li>

    </ul>

    </div><!-- .iTable -->

</div><!-- .purchase -->

</form>

<script type="text/javascript">

function isEmail(string) {

	if (string.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1){return true;}else{return false;}

}

function checkContact(){

	if($("#size").val().length<1){alert("กรุณาใส่ขนาดของรองเท้า");$("#size").focus();return false;}
	
	else if($("#color").val().length<2){alert("กรุณาใส่สีรองเท้าของคุณ");$("#color").focus();return false;}

	else if($("#full_name").val().length<2){alert("กรุณาใส่ชื่อ-สกุลของคุณ");$("#full_name").focus();return false;}

	else if($("#address").val().length<5){alert("กรุณาใสที่อยู่ของคุณ");$("#address").focus();return false;}

	else if($("#full_email").val().length<4){alert("กรุณาใส่อีเมล์ของคุณ");$("#full_email").focus();return false;}

	else if(!isEmail($("#full_email").val())){alert("อีเมล์ของคุณมีข้อผิดพลาด");$("#full_email").focus();return false;}

	else if($("#full_tel").val().length<5){alert("กรุณาใส่เบอร์โทรศัพท์ของคุณ");$("#full_tel").focus();return false;}

	else {return true;}

}

</script>

</body>

</html>

