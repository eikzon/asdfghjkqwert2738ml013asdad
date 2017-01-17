<html>
  <tr>
    <td colspan="7" align="center">
      <b>Date : {{ $condition['daterange'] }}</b>
      @if(!empty($condition['type']))
        <b> | Order Status : {{ config('website.order.type.' . $condition['type']) }}</b>
      @endif
      @if(!empty($condition['status']))
        <b> | Order Process : {{ config('website.order.status.' . $condition['status']) }}</b>
      @endif
    </td>
  </tr>
  <tr>
    <td><b>Order ID</b></td>
    <td><b>Customer</b></td>
    <td><b>Shipping Price</b></td>
    <td><b>Total Price</b></td>
    <td><b>Order Type</b></td>
    <td><b>Order Flow</b></td>
    <td><b>Date</b></td>
  </tr>
  @foreach($orders as $order)
    <tr>
      <td>{{ $order->od_code }}</td>
      <td>{{ $order['members']['first_name'] . ' ' . $order['members']['last_name'] }}</td>
      <td>{{ number_format($order->od_price_shipping, 2) }}</td>
      <td>{{ number_format($order->od_price_total, 2) }}</td>
      <td>{{ config('website.order.type.' . $order->od_payment_type) }}</td>
      <td>{{ config('website.order.status.' . $order->od_flow_status) }}</td>
      <td>{{ date('d-m-Y H:i:s', strtotime($order->created_at)) }}</td>
    </tr>
    @php
      $detailProducts = \App\Model\ST_Order::find($order->id);
    @endphp
    @if(!$detailProducts->productLists->isEmpty())
      <tr>
        <td>-</td>
        <td><b>No.</b></td>
        <td colspan="2"><b>Code</b></td>
        <td><b>Quantity</b></td>
        <td><b>Per/Price</b></td>
        <td><b>Total Price</b></td>
      </tr>
      @foreach($detailProducts->productLists as $index => $product)
        <tr>
          <td></td>
          <td>{{ ++$index }}</td>
          <td colspan="2">{{ $product->pd_code }}</td>
          <td>{{ number_format($product->od_quantity, 2) }}</td>
          <td>{{ number_format(($product->od_price / $product->od_quantity), 2) }}</td>
          <td>{{ number_format($product->od_price, 2) }}</td>
        </tr>
      @endforeach
    @endif
    <tr>
      <td colspan="7" style="background-color: #eee;"></td>
    </tr>
  @endforeach
</html>
