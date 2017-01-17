<html>
  <tr>
    <td colspan="10" align="center">
      <b>Date : {{ $condition['daterange'] }}</b>
      @if(!empty($condition['type']))
        <b> | Status : {{ config('website.product.status.text.' . $condition['type']) }}</b>
      @endif
    </td>
  </tr>
  <tr>
    <td><b>Code</b></td>
    <td><b>Name</b></td>
    <td><b>Price</b></td>
    <td><b>Promotion Discount</b></td>
    <td><b>Promotion Price</b></td>
    <td><b>Stock</b></td>
    <td><b>Category</b></td>
    <td><b>SKU Group</b></td>
    <td><b>Date</b></td>
    <td><b>Status</b></td>
  </tr>
  @foreach($products as $product)
    <tr>
      <td>{{ $product['pd_code'] }}</td>
      <td>{{ $product['pd_name'] }}</td>
      <td>{{ number_format($product['pd_price'], 2) }}</td>
      <td>{{ $product['pd_discount'] }}</td>
      <td>{{ number_format($product['pd_price_discount'], 2) }}</td>
      <td>{{ number_format($product['pd_stock'], 2) }}</td>
      <td>{{ @$product->category->ct_name }}</td>
      <td>{{ @$product->sku->pg_name }}</td>
      <td>{{ date('d/m/Y H:i', strtotime($product['created_at'])) }}</td>
      <td>
        {{ config('website.product.status.text.' . $product['pd_status']) }}
      </td>
    </tr>
  @endforeach
</html>
