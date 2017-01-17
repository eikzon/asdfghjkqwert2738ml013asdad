@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', ['page' => 'Product List'])
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"> Create/Edit Product</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                      <form action="{{ action('SiteControl\ProductController@' . $state, $product['id']) }}" method="POST" enctype="multipart/form-data" id="product-form">
                            <div class="form-body">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label">
                                      Product Code</label>
                                      <input type="text" name="code" id="code" class="form-control"
                                             placeholder="Product Code" value="{{ $product['pd_code'] or '' }}" required>
                                      <input type="hidden" name="keyGenerate"
                                             value="{{ $product['keyGenerate'] or (date('d') . time()) }}">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label">Select Category</label>
                                    <select class="form-control" name="category" data-placeholder="Choose a Category" tabindex="1">
                                      @foreach($categories as $category)
                                        <option value="{{ $category['id'] }}"
                                          @if($category['id'] == $product['fk_category_id'])
                                            selected
                                          @endif
                                          >
                                          {{ $category['ct_name'] }}
                                        </option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Product Name</label>
                                      <input type="text" id="name" name="name" class="form-control"
                                             placeholder="Product Name"
                                             required=""
                                             value="{{ $product['pd_name'] or '' }}">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Short Description</label>
                                      <input type="text" id="short_desc" name="short_desc" class="form-control"
                                             placeholder="..."
                                             value="{{ $product['pd_short_desc'] or '' }}">
                                    </div>
                                  </div>
                                </div>
                                <h3 class="box-title m-t-40">Product Description</h3>
                                <div class="row">
                                  <div class="col-md-12 ">
                                      <div class="form-group">
                                          <textarea class="form-control" name="long_desc" rows="4" placeholder="Description ...">{{ $product['pd_long_desc'] or '' }}</textarea>
                                      </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Original Price</label>
                                      <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-money"></i></div>
                                        <input type="text" name="price" class="form-control" id="exampleInputuname"
                                               required=""
                                               placeholder="x,xxx.xx"
                                               value="{{ $product['pd_price'] or '' }}">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Discount Price</label>
                                      <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-cut"></i></div>
                                        <input type="text" name="price_discount" class="form-control"
                                               placeholder="x,xxx.xx"
                                               value="{{ $product['pd_price_discount'] or '' }}">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Discount Text</label>
                                      <input type="text" name="discount" class="form-control" placeholder="xx%"
                                             value="{{ $product['pd_discount'] or '' }}">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Stock <span class="text-danger">(when below {{ config('website.product.outOfStock') }} ea, just notify in dashboard page)</span></label>
                                      <input type="text" name="stock" id="stock" required="" class="form-control" placeholder="Quantity Per Stock" value="{{ $product['pd_stock'] or '' }}">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Badges Icon</label>
                                      {!! Form::select('badge',
                                          config('website.product.badges'),
                                          (!empty($product['pd_badge']) ? $product['pd_badge'] : ''),
                                          ['class' => 'form-control',
                                           'tabindex' => '1']) !!}
                                    </div>
                                  </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="control-label">Status</label>
                                          <div class="radio-list">
                                            <label class="radio-inline">
                                              <div class="radio radio-info">
                                                <input type="radio" name="status" id="status-non" value="0"
                                                @if(empty($product['pd_status'])) checked @endif>
                                                <label for="status-non">Non Active</label>
                                              </div>
                                            </label>
                                            <label class="radio-inline p-0">
                                              <div class="radio radio-info">
                                                <input type="radio" name="status" id="status-active" value="1"
                                                  @if(!empty($product['pd_status']) && $product['pd_status'] == 1) checked @endif>
                                                <label for="status-active">Active</label>
                                              </div>
                                            </label>
                                            <label class="radio-inline p-0">
                                              <div class="radio radio-info">
                                                <input type="radio" name="status" id="status-display" value="2"
                                                @if(!empty($product['pd_status']) && $product['pd_status'] == 2) checked @endif>
                                                <label for="status-display">Display & Out of Stock</label>
                                              </div>
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <!--/row-->
                                @if(!empty($product['images']))
                                  <div class="col-lg-12">
                                    <h3 class="box-title m-t-20">Product Images <span class="text-danger">(Unlimited)</span></h3>
                                    @foreach($product['images'] as $image)
                                      <div class="col-md-3">
                                        <div class="product-img">
                                          <img src="{{ asset('images/products/' . $image['image']) }}">
                                          <div class="pro-img-overlay">
                                            <a href="{{ route('st-destroyImage', [$product['id'], $image['id']]) }}" class="bg-danger">
                                              <i class="ti-trash"></i>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    @endforeach
                                  </div>
                                @endif
                                <div class="col-lg-12">
                                  <h3 class="box-title m-t-20">Upload Image <span class="text-danger">(Recommend : w 620px * h 260px)</span></h3>
                                  <div id="dropbox" data-url="/sitecontrol/product/uploadimages">
                                    <span class="message">Drop images here to upload. <br /><i>(they will only be visible to you)</i></span>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <br>
                                <hr>
                                <h3 class="box-title">
                                  <i class="ti-paint-roller"></i>
                                  Variant Product
                                </h3>
                                <hr>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Select Group SKU</label>
                                      <select class="form-control" required name="group" data-placeholder="Choose a Group" tabindex="1">
                                          <option value="0">None Group</option>
                                          @if(!empty($groups))
                                            @foreach($groups as $group)
                                              <option value="{{ $group['id'] }}"
                                                @if($group['id'] == $product['fk_group_id'])
                                                  selected
                                                @endif
                                                >
                                                {{ $group['pg_name'] }}
                                              </option>
                                            @endforeach
                                          @endif
                                      </select>
                                    </div>
                                  </div>
                                  {{-- <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Select Variant</label>
                                      <select class="form-control" name="variant[]" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="">None</option>
                                        @if(!empty($variantsResult['text']))
                                          @foreach($variantsResult['text'] as $text)
                                            <option value="{{ $text['id'] }}"
                                              @if(!empty($variantsMap[$text['id']]))
                                                selected
                                              @endif>
                                              {{ $text['vr_name'] }}
                                            </option>
                                          @endforeach
                                        @endif
                                      </select>
                                    </div>
                                  </div> --}}
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Select Variant Color</label>
                                      <select class="form-control" name="variant[]" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="">None</option>
                                        @if(!empty($variantsResult['images']))
                                          @foreach($variantsResult['images'] as $image)
                                            <option value="{{ $image['id'] }}"
                                              @if(!empty($variantsMap[$image['id']]))
                                                selected
                                              @endif>
                                              {{ $image['vr_name'] }}
                                            </option>
                                          @endforeach
                                        @endif
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Select Variant Size</label>
                                      <select class="form-control" required name="variant[]" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="">None</option>
                                        @if(!empty($variantsResult['text']))
                                          @foreach($variantsResult['text'] as $text)
                                            <option value="{{ $text['id'] }}"
                                              @if(!empty($variantsMap[$text['id']]))
                                                selected
                                              @endif>
                                              {{ $text['vr_name'] }}
                                            </option>
                                          @endforeach
                                        @endif
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                {{-- <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Select Variant Image</label>
                                      <select class="form-control" name="variant[]" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="">None</option>
                                        @if(!empty($variantsResult['images']))
                                          @foreach($variantsResult['images'] as $image)
                                            <option value="{{ $image['id'] }}"
                                              @if(!empty($variantsMap[$image['id']]))
                                                selected
                                              @endif>
                                              {{ $image['vr_name'] }}
                                            </option>
                                          @endforeach
                                        @endif
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Select Variant Text</label>
                                      <select class="form-control" name="variant[]" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="">None</option>
                                        @if(!empty($variantsResult['text']))
                                          @foreach($variantsResult['text'] as $text)
                                            <option value="{{ $text['id'] }}"
                                              @if(!empty($variantsMap[$text['id']]))
                                                selected
                                              @endif>
                                              {{ $text['vr_name'] }}
                                            </option>
                                          @endforeach
                                        @endif
                                      </select>
                                    </div>
                                  </div>
                                </div> --}}
                                <hr>
                                {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $product['id'] or '' }}">
                            <div class="form-actions m-t-40">
                              <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> Save
                              </button>
                              @if(!empty($product['id']))
                                {{ method_field('PUT') }}
                                <a class="btn btn-default" href="{{ route('sitecontrol.product.index') }}">
                                  <i class="fa fa-chevron-left"></i> Back
                                </a>
                              @else
                                <button type="reset" class="btn btn-default">
                                  <i class="fa fa-refresh"></i> Cancel
                                </button>
                              @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
@section('script_footer')
  <script>
    var countOldImages = {{ count($product['images']) }};
  </script>
@endsection
