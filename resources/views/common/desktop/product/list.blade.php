<li @if(!empty($slide)) class="swiper-slide" @endif>
  @if(!empty($product['pd_stock']) && $product['pd_status'] == 1)
    @if($product['pd_badge'] == 1)
      <div class="{{ config('website.product.badges')[$product['pd_badge']] }}"></div>
    @elseif($product['pd_badge'] == 2)
      <div class="sale">
        <p>{{ $product['pd_discount'] }}Off</p>
      </div>
    @endif
  @elseif($product['pd_status'] != config('website.product.status.displayOnly'))
    <div class="sale">
      <p>Sold Out</p>
    </div>
  @endif
  <div class="frame">
    @if(!$product['images']->isEmpty())
      @if(!empty($product['images'][0]['image']))
        <a href="{{ route('product_detail', $product['id']) }}" title="{{ $product['pd_name'] }}">
          <img src="{{ asset('images/products/' . $product['images'][0]['image']) }}" height="100%" />
        </a>
      @endif
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
    {{-- @if(!empty($product['sku']['pg_name']))
      {{ $product['sku']['pg_name'] }} |
    @endif --}}
    Men's {{ !empty($categoryName) ? $categoryName : title_case(@$category->ct_name) }} Boots |
    @if(!empty($product['pd_stock']) && $product['pd_status'] == 1)
      In Stock
    @else
      Out of Stock
    @endif
  </span>
</li>
