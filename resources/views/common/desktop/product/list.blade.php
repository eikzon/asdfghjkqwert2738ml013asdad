<li @if(!empty($slide)) class="swiper-slide" @endif>
  <div class="{{ config('website.product.badges')[$product['pd_badge']] }}"></div>
  <div class="frame">
    @if(!empty($product['images'][0]['image']))
      <a href="{{ route('product_detail', $product['id']) }}" title="{{ $product['pd_name'] }}">
        <img src="{{ asset('images/products/' . $product['images'][0]['image']) }}"/>
      </a>
    @endif
  </div>
  <div class="line"></div>
  <a href="{{ route('product_detail', $product['id']) }}"
     class="name"
     title="{{ $product['pd_name'] }}">
    {{ $product['pd_name'] }}
  </a><br>
  <span class="price">
    @php $price = !empty($product['pd_price_discount']) ? $product['pd_price_discount'] : $product['pd_price']; @endphp
    {{ number_format($price, 2) }} Baht
  </span><br>
  <span class="desc">
    @if(!empty($product['sku']['pg_name']))
      {{ $product['sku']['pg_name'] }} |
    @endif
    @if(!empty($product['pd_stock']) && $product['pd_status'] == 1)
      In Stock
    @else
      Out of Stock
    @endif
  </span>
</li>
