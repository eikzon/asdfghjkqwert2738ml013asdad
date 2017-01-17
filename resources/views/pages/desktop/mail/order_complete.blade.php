เราได้รับคำสั่งซื้อสินค้าของคุณเรียบร้อยแล้วค่ะ<br>
สวัสดีค่ะ คุณ <strong>{{ $order->members->first_name . ' ' . $order->members->last_name }}</strong>,
<br><br>
ขอบคุณที่เลือกช้อปกับเราค่ะ รายการสั่งซื้อสินค้าของคุณได้ถูกบันทึกอยู่ในระบบเรียบร้อยแล้ว
<br>
<strong>รายละเอียดการสั่งซื้อสินค้าของคุณ</strong>
<br><br><br>
==============================================<br>
เลขที่ใบสั่งซื้อ {{ $order->od_code }}<br><br>
ช่องทางชำระเงิน {{ config('website.order.type.' . $order->od_payment_type) }}<br><br>
<strong>สถานที่จัดส่ง</strong><br>
{{ $order->orderAddress[0]->oa_address . ', ' . $order->orderAddress[0]->oa_sub_district . ', ' . $order->orderAddress[0]->oa_district . ', ' . $order->orderAddress[0]->oa_province . ' ' . $order->orderAddress[0]->oa_postcode }}
<br><br>
@if(!empty($order->orderBilling[0]))
  <strong>ที่อยู่สำหรับใบเสร็จ</strong><br>
  {{ $order->orderBilling[0]->oa_billing_name }} <br> {{ $order->orderBilling[0]->oa_billign_address }}
  <br>
  เลขที่ประจำตัวผู้เสียภาษี {{ @$order->orderBilling[0]->oa_tax_id }}<br>
@endif
หมายเลขโทรศัพท์ {{ @$order->orderAddress[0]->oa_tel }}<br><br>
<table width="100%" style="border-collapse:collapse;border:solid 1px #f2f2f2">
  <caption style="text-align:left;margin-bottom:4px"><strong>รายละเอียดใบสั่งซื้อ</strong></caption>
  <thead style="white-space:nowrap;background-color:#000;color:#fff;vertical-align:middle">
    <tr>
      <th style="padding-top:10px;padding-bottom:10px;padding-left:8px;padding-right:8px;border-right:solid 1px #fff">รายละเอียดสินค้า</th>
      <th style="padding-top:10px;padding-bottom:10px;padding-left:8px;padding-right:8px;border-right:solid 1px #f2f2f2">ราคา</th>
      <th style="padding-top:10px;padding-bottom:10px;padding-left:8px;padding-right:8px;border-right:solid 1px #f2f2f2">จำนวน</th>
      <th style="padding-top:10px;padding-bottom:10px;padding-left:8px;padding-right:8px;border-right:solid 1px #f2f2f2">ส่วนลด</th>
      <th style="padding-top:10px;padding-bottom:10px;padding-left:8px;padding-right:8px">ราคาหลังหักส่วนลด</th>
    </tr>
  </thead>
  <tbody>
    @foreach($order->productLists as $product)
      <tr>
        <td style="background-color:#f9f9f9;padding-top:10px;padding-bottom:10px;padding-left:4px;padding-right:8px;border-bottom:solid 1px #f2f2f2">
          {{ $product->pd_name }} <br>
          @php
            $resultVariants = \App\Model\ST_Variant::getVariant([$product->size_vr_id]);
            echo !empty($resultVariants) ? 'ขนาด : ' . $resultVariants[0]['vr_text'] : NULL;
          @endphp
        </td>
        <td style="text-align:right;background-color:#f9f9f9;padding-top:10px;padding-bottom:10px;padding-left:8px;padding-right:8px;border:solid 1px #f2f2f2">{{ number_format(($product->od_price / $product->od_quantity), 2) }}</td>
        <td style="text-align:right;background-color:#f9f9f9;padding-top:10px;padding-bottom:10px;padding-left:8px;padding-right:8px;border:solid 1px #f2f2f2">{{ $product->od_quantity }}</td>
        <td style="text-align:right;background-color:#f9f9f9;padding-top:10px;padding-bottom:10px;padding-left:8px;padding-right:8px;border:solid 1px #f2f2f2">
          -
        </td>
        <td style="text-align:right;background-color:#f9f9f9;padding-top:10px;padding-bottom:10px;padding-left:8px;padding-right:8px;border-bottom:solid 1px #f2f2f2">{{ number_format($product->od_price, 2) }}</td>
      </tr>
    @endforeach
    <tfoot style="text-align:right">
      <tr>
        <td colspan="4" style="padding-top:10px;padding-left:8px;padding-right:8px">ค่าขนส่ง</td>
        <td style="padding-top:10px;padding-left:8px;padding-right:8px">
          {{ !empty($order->od_price_shipping) ? $order->od_price_shipping : 'ฟรี' }}
        </td>
      </tr>
      <tr>
        <td colspan="4" style="padding-top:10px;padding-left:8px;padding-right:8px"><strong>ยอดรวมทั้งหมด</strong></td>
        <td style="padding-top:10px;padding-left:8px;padding-right:8px">
          <strong>{{ number_format($order->od_price_total, 2) }}</strong>
        </td>
      </tr>
    </tfoot>
  </tbody>
</table><br>
==============================================
<br><br><br>
คุณสามารถติดตามสถานะสินค้าของคุณได้ที่ "บัญชีของฉัน > ประวัติการสั่งซื้อ"<br><br>
ต้องการความช่วยเหลือเพิ่มเติม กรุณาติดต่อ ศูนย์บริการลูกค้า<br>
อีเมล: customerservices@breaker-shoes.com<br>
หรือ โทร 0-xxxx-xxxx เวลาทำการ 8:30-19:00 น. (ทุกวัน)<br><br>
ขอขอบคุณที่ช้อปกับเรา แล้วพบกันอีกที่ breaker-shoes.com ค่ะ<br><br>
<strong>Breaker Shoe.</strong>
