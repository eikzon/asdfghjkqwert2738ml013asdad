<html>
  <tr>
    <td colspan="4" align="center">
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
    <td><b>Code</b></td>
    <td><b>Name</b></td>
    <td><b>Total Price</b></td>
    <td><b>Total Quantity</b></td>
  </tr>
  @foreach($products as $product)
    <tr>
      <td>{{ $product['code'][0] }}</td>
      <td>{{ $product['name'][0] }}</td>
      <td>{{ number_format(array_sum($product['price']), 2) }}</td>
      <td>{{ number_format(array_sum($product['quantity'])) }}</td>
    </tr>
  @endforeach
</html>
