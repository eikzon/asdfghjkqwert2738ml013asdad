<div class="center">
      <div class="cart-complete-order">
        <div class="clear"></div>
        <div class="header-order">
          <h5>เลขที่ใบสั่งซื้อ : <span>{{ $order[0]['od_code'] }}</span></h5>
          <a href="javascript:window.print()" class="continue-proceed">พิมพ์ใบสั่งซื้อ</a>
        </div>
        <div class="clear"></div>
        @php
          $address = $order[0]['orderAddress'][0];
        @endphp
        <div class="order-detail">
          <dl>
            <dt>วันที่สั่งซื้อ :</dt>
            <dd>{{ $order[0]['created_at'] }}</dd>
            <dt>การชำระเงิน :</dt>
            <dd>@if($order[0]['od_payment_type'] != 3) Paypal - Credit Card @else Bank Transfer @endif</dd>
            <dt>มือถือ :</dt>
            <dd>{{ $address['oa_tel'] }}</dd>
          </dl>
        </div>
        <div class="order-address">
          <dl>
            <dt>ที่อยู่จัดส่ง</dt>
            <dd class="none">&nbsp;</dd>
            <dt>ชื่อผู้รับสินค้า :</dt>
            <dd>{{ $address['oa_first_name'] . ' ' . $address['oa_last_name'] }}</dd>
            <dt>ที่อยู่ :</dt>
            <dd>{{ $address['oa_address'] . ' ' . $address['oa_province']. ' ' . $address['oa_district']. ' ' . $address['oa_postcode'] }}</dd>
          </dl>
        </div>
        <div class="order-address">
          <dl>
            <dt>ที่อยู่ใบกำกับภาษี</dt>
            <dd class="none">&nbsp;</dd>
            <dt>ชื่อผู้รับสินค้า :</dt>
            <dd>{{ $address['oa_first_name'] . ' ' . $address['oa_last_name'] }}</dd>
            <dt>ที่อยู่ :</dt>
            <dd>{{ $address['oa_billign_address'] }}</dd>
          </dl>
        </div>
        <div class="clear"></div>
        {{-- {{ dd($order) }} --}}
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
              @if(!empty($order[0]['productLists']))
                @foreach($order[0]['productLists'] as $product)
                  <tr>
                    <td data-title="สินค้า">
                      @if($image = \App\Model\ST_Product_Images::getImage($product['id']))
                        @if(!empty($image[0]['image']))
                          <a href="{{ route('product_detail', $product['id']) }}" title="{{ $product['pd_name'] }}">
                            <img src="{{ asset('images/products/' . $image[0]['image']) }}"/>
                          </a>
                        @endif
                      @endif
                    </td>
                    <td data-title="รายละเอียด">
                      <p>{{ $product['pd_name'] }}
                        <span>Item Code : {{ $product['pd_code'] }}
                        <br>
                        @php
                          $resultVariants = \App\Model\ST_Variant::getVariant([$product['size_vr_id']]);
                          echo !empty($resultVariants) ? '<br>Size : ' . $resultVariants[0]['vr_text'] : NULL;
                        @endphp
                        </span>
                      </p>
                    </td>
                    <td data-title="ราคาต่อหน่วย (บาท)">{{ number_format($product['od_price']/$product['od_quantity']) }}</td>
                    <td data-title="จำนวน">{{ $product['od_quantity'] }}</td>
                    <td data-title="ราคา (บาท)">{{ number_format($product['od_price'], 2) }}</td>
                  </tr>
                @endforeach
              @endif
            </tbody>
            <tfoot>
              <tr>
                <td colspan="2" rowspan="3" class="comment">
                  <p>หมายเหตุ</p>
                  {{ $order[0]['od_comment'] }}
                </td>
                <td>ราคาสินค้า</td>
                <td colspan="2">{{ number_format(($order[0]['od_price_total'] + $order[0]['od_price_shipping'] + $order[0]['od_price_discount']), 2) }} บาท</td>
              </tr>
              <tr>
                <td>ค่าจัดส่ง</td>
                <td colspan="2">{{ !empty($order[0]['od_price_shipping']) ? $order[0]['od_price_shipping'] : 'ฟรี' }}</td>
              </tr>
              <tr>
                <td>ราคารวม</td>
                <td colspan="2">{{ number_format($order[0]['od_price_total'], 2) }} บาท</td>
              </tr>
            </tfoot>
          </table>
        </div>
        <div class="clear"></div>
        {{-- <div class="order-process">
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
        </div> --}}
      </div>
    </div>
