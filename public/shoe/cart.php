<?
include "inc/inc_absolutepath.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
<title>Shopping Cart | Breaker เบรกเกอร์ : สั่งได้ดั่งใจ</title>
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
        <h1>Shopping Cart</h1>
        <span class="subhead">ตะกร้าสินค้า</span>
    </div><!-- .productshead -->
    <div class="container-cart">
        <div class="center">
            <!-- Cart Empty -->
            <div class="step-process">
                <ul>
                    <li><span>Shopping Cart</span></li>
                    <li>Shipping / Payment</li>
                    <li>Complete Order</li>
                </ul>
                <img src="images/step-1.jpg" alt="Shopping Cart" class="hidden-sp">
                <img src="images/step-1-sp.png" alt="Shopping Cart" class="hidden-pc">
            </div>
            <div class="clear"></div>
            <div class="cart-empty">
                <p>ยังไม่มีสินค้าในตะกร้าช้อปปิ้งของคุณ</p>
                <a href="#" class="continue-shopping">เลือกซื้อสินค้าต่อ</a>
            </div>
<!--....................................................................................-->
            <!-- Cart Summary -->
            <div class="step-process">
                <ul>
                    <li><span>Shopping Cart</span></li>
                    <li>Shipping / Payment</li>
                    <li>Complete Order</li>
                </ul>
                <img src="images/step-1.jpg" alt="Shopping Cart" class="hidden-sp">
                <img src="images/step-1-sp.png" alt="Shopping Cart" class="hidden-pc">
            </div>
            <div class="clear"></div>
            <div class="cart-summary">
                <div class="btn-area">
                    <a href="#" class="backtoshopping">เลือกซื้อสินค้าต่อ</a>
                    <a href="#" class="continue-proceed">ดำเนินการชำระเงิน</a>
                </div>
                <div class="table-summary">
                  <table class="tabledata">
                    <thead>
                      <tr>
                        <th width="180">สินค้า</th>
                        <th width="370">รายละเอียด</th>
                        <th width="160">ราคาต่อหน่วย (บาท)</th>
                        <th width="160">จำนวน</th>
                        <th width="160">ราคา (บาท)</th>
                        <th width="80">ลบ</th>              
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-title="สินค้า"><a href="#"><img src="products/images/BC-006_GN_4.jpg"></a></td>
                        <td data-title="รายละเอียด"><a href="#"><p>Breaker King Knit<span>Item Code : BC006-GN<br>Size : 39<br>Color : Multicolor</span></p></a></td>
                        <td data-title="ราคาต่อหน่วย (บาท)">1,550.00</td>
                        <td data-title="จำนวน"><input type="text" name="quantity" id="quantity" value="1" size="1" maxlength="4" class="box-qty"><br><input type="submit" name="update" id="update" value="Update" title="Update" class="btn-update"></td>
                        <td data-title="ราคา (บาท)">1,550.00</td>
                        <td data-title="ลบ"><a href="#" class="btn-remove" title="ลบรายการสินค้านี้"><i class="fa fa-close"></i></a></td>                
                      </tr>
                      <tr>
                        <td data-title="สินค้า"><a href="#"><img src="products/images/BC-006_GN_4.jpg"></a></td>
                        <td data-title="รายละเอียด"><a href="#"><p>Breaker King Knit<span>Item Code : BC006-GN<br>Size : 39<br>Color : Multicolor</span></p></a></td>
                        <td data-title="ราคาต่อหน่วย (บาท)">1,550.00</td>
                        <td data-title="จำนวน"><input type="text" name="quantity" id="quantity" value="1" size="1" maxlength="4" class="box-qty"><br><input type="submit" name="update" id="update" value="Update" title="Update" class="btn-update"></td>
                        <td data-title="ราคา (บาท)">1,550.00</td>
                        <td data-title="ลบ"><a href="#" class="btn-remove" title="ลบรายการสินค้านี้"><i class="fa fa-close"></i></a></td>                
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="3" rowspan="3" class="comment"><p>รายการสินค้าในตะกร้าของคุณ : 2 รายการ</td>
                        <td>ราคาสินค้า (บาท)</td>
                        <td colspan="2">1,890</td>
                      </tr>
                      <tr>
                        <td>ค่าจัดส่ง</td>
                        <td colspan="2">0.00</td>
                      </tr>
                      <tr>
                        <td>ราคารวม (บาท)</td>
                        <td colspan="2">1,890.00</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="btn-area">
                    <a href="#" class="backtoshopping">เลือกซื้อสินค้าต่อ</a>
                    <a href="#" class="continue-proceed">ดำเนินการชำระเงิน</a>
                </div>                
            </div>
<!--....................................................................................-->
            <!-- Cart Shipping Payment -->
            <div class="step-process">
                <ul>
                    <li>Shopping Cart</li>
                    <li><span>Shipping / Payment</span></li>
                    <li>Complete Order</li>
                </ul>
                <img src="images/step-2.jpg" alt="Shipping / Payment" class="hidden-sp">
                <img src="images/step-2-sp.png" alt="Shipping / Payment" class="hidden-pc">
            </div>
            <div class="clear"></div>
            <div class="cart-shipping-payment">
                <div class="blog-inside">
                    <h2>1. ที่อยู่จัดส่ง</h2>
                    <label for="receiver-name">ชื่อของผู้รับ<span>*</span></label>
                    <input type="text" name="receiver-name" id="receiver-name">
                    <label for="receiver-lastname">นามสกุลของผู้รับ<span>*</span></label>
                    <input type="text" name="receiver-lastname" id="receiver-lastname">
                    <label for="receiver-mobile">มือถือ<span>*</span></label>
                    <input type="text" name="receiver-mobile" id="receiver-mobile">
                    <label for="receiver-address">ที่อยู่ (เลขที่, อาคาร/หมู่บ้าน, ซอย/ถนน)<span>*</span></label>
                    <input type="text" name="receiver-address" id="receiver-address">
                    <label for="receiver-province">จังหวัด<span>*</span></label>
                    <select name="receiver-province" id="receiver-province">
                        <option value="0">กรุณาเลือกจังหวัด</option>
                        <option value="1">กรุงเทพมหานคร</option>
                        <option value="3">กาญจนบุรี</option>
                        <option value="6">ขอนแก่น</option>
                        <option value="7">จันทบุรี</option>
                        <option value="8">ฉะเชิงเทรา</option>
                        <option value="9">ชลบุรี</option>
                        <option value="14">เชียงราย</option>
                        <option value="13">เชียงใหม่</option>
                        <option value="15">ตรัง</option>
                        <option value="17">ตาก</option>
                        <option value="19">นครปฐม</option>
                        <option value="22">นครศรีธรรมราช</option>
                        <option value="24">นนทบุรี</option>
                        <option value="27">บุรีรัมย์</option>
                        <option value="28">ปทุมธานี</option>
                        <option value="30">ปราจีนบุรี</option>
                        <option value="37">พิษณุโลก</option>
                        <option value="41">ภูเก็ต</option>
                        <option value="43">มุกดาหาร</option>
                        <option value="47">ร้อยเอ็ด</option>
                        <option value="49">ระยอง</option>
                        <option value="50">ราชบุรี</option>
                        <option value="52">ลำปาง</option>
                        <option value="56">สกลนคร</option>
                        <option value="57">สงขลา</option>
                        <option value="59">สมุทรปราการ</option>
                        <option value="60">สมุทรสงคราม</option>
                        <option value="61">สมุทรสาคร</option>
                        <option value="63">สระบุรี</option>
                        <option value="66">สุพรรณบุรี</option>
                        <option value="67">สุราษฎร์ธานี</option>
                        <option value="68">สุรินทร์</option>
                        <option value="73">อุดรธานี</option>
                        <option value="76">อุบลราชธานี</option>
                    </select>                
                    <label for="receiver-district">อำเภอ/เขต<span>*</span></label>
                    <select name="receiver-district" id="receiver-district">
                        <option value="0">กรุณาเลือกอำเภอ/เขต</option>
                    </select>
                    <label for="receiver-subdistrict">ตำบล/แขวง<span>*</span></label>
                    <select name="receiver-subdistrict" id="receiver-subdistrict">
                        <option value="0">กรุณาเลือกตำบล/แขวง</option>
                    </select>
                    <label for="receiver-postcode">รหัสไปรษณีย์<span>*</span></label>
                    <input type="text" name="receiver-postcode" id="receiver-postcode">
                    <h3>ที่อยู่ใบกำกับภาษี</h3>
                    <label><input type="checkbox" name="same-address" id="same-address">ใช้ที่อยู่เดียวกับที่อยู่จัดส่ง</label>
                    <label for="tax-address">ชื่อและที่อยู่ใบกำกับภาษี<span>*</span></label>
                    <textarea name="tax-address" id="tax-address"></textarea>
                    <textarea name="tax-address-more" id="tax-address-more"></textarea>
                    <label for="tax-id">เลขประจำตัวบัตรประชาชน / Tax Id</label>
                    <input type="text" name="tax-id" id="tax-id">
                </div>
                <div class="blog-inside">
                    <h2>2. การชำระเงิน</h2>
                    <ul>
                        <li><label for="paymentselect-paypal"><input type="radio" name="paymentselect" id="paymentselect-paypal" checked="checked"><img src="images/ic-paypal.png"><div class="radio-txt1">ชำระเงินผ่าน PayPal</div></label></li>
                        <li><label for="paymentselect-paysbuy"><input type="radio" name="paymentselect" id="paymentselect-paysbuy"><img src="images/ic-paysbuy.png"><div class="radio-txt1">ชำระเงินผ่าน PaysBuy</div></label></li>
                        <li><label for="paymentselect-creditcard"><input type="radio" name="paymentselect" id="paymentselect-creditcard"><img src="images/ic-visa.png"><img src="images/ic-master.png"><div class="radio-txt2">ชำระเงินผ่าน บัตรเครดิต<br>หรือบัตรเดบิต</div></label></li>
                        <li><label for="paymentselect-banktransfer"><input type="radio" name="paymentselect" id="paymentselect-banktransfer"><img src="images/ic-banktransfer.png"><div class="radio-txt2">ชำระเงินโดยการโอนเงินเข้าบัญชีธนาคาร<br>(เอทีเอ็ม / เคาน์เตอร์ธนาคาร)</div></label></li>
                    </ul>
                </div>
                <div class="blog-inside">
                    <h2>3. สรุปการสั่งซื้อ</h2>
                    <ul class="summary-list">
                       <li><a href="#"><div class="product-img"><img src="products/images/BC-006_GN_4.jpg"></div>
                          <div class="product-desc">
                            <div class="product-name">Breaker King Knit<br>BC006-GN / 39 / Multicolor<br>จำนวน: 1<span class="product-price">1,550 บาท</span></div>
                          </div>
                       </a></li>
                       <li><a href="#"><div class="product-img"><img src="products/images/BC-006_GN_4.jpg"></div>
                          <div class="product-desc">
                            <div class="product-name">Breaker King Knit<br>BC006-GN / 39 / Multicolor<br>จำนวน: 1<span class="product-price">1,550 บาท</span></div>
                          </div>
                       </a></li>
                       <li>
                        <div class="shopping-txt">ค่าจัดส่ง<br>ราคารวม</div>
                        <div class="shopping-price">0.00 บาท<br>1,879 บาท</div>
                       </li>
                       <li>
                        <label for="order-remark">หมายเหตุ</label>
                        <textarea name="order-remark" id="order-remark"></textarea>
                       </li>
                     </ul>
                     <a href="#" class="continue-proceed">ดำเนินการชำระเงิน</a>
                </div>
            </div>
<!--....................................................................................-->            
            <!-- Complete Order -->
            <div class="step-process">
                <ul>
                    <li>Shopping Cart</li>
                    <li>Shipping / Payment</li>
                    <li><span>Complete Order</span></li>
                </ul>
                <img src="images/step-3.jpg" alt="Complete Order" class="hidden-sp">
                <img src="images/step-3-sp.png" alt="Complete Order" class="hidden-pc">
            </div>
            <div class="clear"></div>
            <div class="cart-complete-order">
                <h4>เราได้รับรายการสั่งซื้อของคุณแล้ว<br>ขอขอบคุณสำหรับการสั่งซื้อสินค้ากับเรา</h4>
                <div class="clear"></div>
                <div class="header-order">
                    <h5>เลขที่ใบสั่งซื้อ : <span>BS-5911109</span></h5>
                    <a href="#" class="continue-proceed">พิมพ์ใบสั่งซื้อ</a>
                </div>
                <div class="clear"></div>
                <div class="order-detail">
                    <dl>
                        <dt>วันที่สั่งซื้อ :</dt>
                        <dd>08/11/2016 11:42</dd>
                        <dt>การชำระเงิน :</dt>
                        <dd>ชำระเงินโดยการโอนเงินเข้าบัญชีธนาคาร</dd>
                        <dt>มือถือ :</dt>
                        <dd>เบอร์มือถือ</dd>
                    </dl>
                </div>
                <div class="order-address">
                    <dl>
                        <dt>ที่อยู่จัดส่ง</dt>
                        <dd class="none">&nbsp;</dd>
                        <dt>ชื่อผู้รับสินค้า :</dt>
                        <dd>ชื่อ นามสกุล</dd>
                        <dt>ที่อยู่ :</dt>
                        <dd>99 ซ.อ่อนนุช 11 ถนนอ่อนนุช<br>สวนหลวง กรุงเทพ 10250</dd>
                    </dl>
                </div>
                <div class="order-address">
                    <dl>
                        <dt>ที่อยู่ใบกำกับภาษี</dt>
                        <dd class="none">&nbsp;</dd>
                        <dt>ชื่อผู้รับสินค้า :</dt>
                        <dd>ชื่อ นามสกุล</dd>
                        <dt>ที่อยู่ :</dt>
                        <dd>99 ซ.อ่อนนุช 11 ถนนอ่อนนุช<br>สวนหลวง กรุงเทพ 10250</dd>
                    </dl>
                </div>
                <div class="clear"></div>
                <div class="table-summary">
                  <table class="tabledata">
                    <thead>
                      <tr>
                        <th width="180">สินค้า</th>
                        <th width="440">รายละเอียด</th>
                        <th width="160">ราคาต่อหน่วย (บาท)</th>
                        <th width="160">จำนวน</th>
                        <th width="160">ราคา (บาท)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-title="สินค้า"><img src="products/images/BC-006_GN_4.jpg"></td>
                        <td data-title="รายละเอียด"><p>Breaker King Knit<span>Item Code : BC006-GN<br>Size : 39<br>Color : Multicolor</span></p></td>
                        <td data-title="ราคาต่อหน่วย (บาท)">1,550.00</td>
                        <td data-title="จำนวน">1</td>
                        <td data-title="ราคา (บาท)">1,550.00</td>
                      </tr>
                      <tr>
                        <td data-title="สินค้า"><img src="products/images/BC-006_GN_4.jpg"></td>
                        <td data-title="รายละเอียด"><p>Breaker King Knit<span>Item Code : BC006-GN<br>Size : 39<br>Color : Multicolor</span></p></td>
                        <td data-title="ราคาต่อหน่วย (บาท)">1,550.00</td>
                        <td data-title="จำนวน">1</td>
                        <td data-title="ราคา (บาท)">1,550.00</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="2" rowspan="3" class="comment"><p>หมายเหตุ</p></td>
                        <td>ราคาสินค้า</td>
                        <td colspan="2">1,890 บาท</td>
                      </tr>
                      <tr>
                        <td>ค่าจัดส่ง</td>
                        <td colspan="2">ฟรี</td>
                      </tr>
                      <tr>
                        <td>ราคารวม</td>
                        <td colspan="2">1,890.00 บาท</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="clear"></div>
                <div class="order-process">
                    <h5>รายละเอียดการดำเนินการ</h5>
                    <div class="table-summary">
                        <table class="tabledata">
                            <thead>
                                <tr>
                                    <th width="220">วันที่ / เวลา</th>
                                    <th width="220">สถานะ</th>
                                    <th width="670">รายละเอียด</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title="วันที่ / เวลา :">08/11/2016 11:42</td>
                                    <td data-title="สถานะ :">ได้รับคำสั่งซื้อ</td>
                                    <td data-title="รายละเอียด :">-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .container -->
<? include ("inc/inc_footer.php");?> 
</body>
</html>