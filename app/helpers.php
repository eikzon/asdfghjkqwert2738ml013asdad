<?PHP

function d($data, $status = false)
{
  echo '<pre>';
  print_r($data);
  echo '</pre>';
  if($status == false) exit;
}

function beforeSql(array $data)
{
  foreach ($data as $key => $value) {
    $setData[$key] = ($value == null)? $value : e($value);
  }

  return $setData ;
}

function getCart()
{
  $cart = new App\Model\ST_Cart;
  return $cart->where('fk_member_id', request()->session()->get('memberData')['id'])->get();
}

function getImageCart($pid)
{
  $images = new App\Model\ST_Product_Images;
  return $images->where('fk_pd_id', $pid)->first();
}

function getVariant($pid)
{
  $variantMap = new App\Model\ST_Variant_Map;
  $variantId  = $variantMap->where('fk_pd_id', $pid)->first();
  $variant    = new App\Model\ST_Variant;
  return $variant->where('id', $variantId->fk_vr_id)->first();
}

function getProvinces()
{
  $provinces = new App\Model\ST_Provinces;
  return $provinces->orderBy('name_th', 'asc')->get();
}

function getAmphures($province_id)
{
  $amphures = new App\Model\ST_Amphures;
  return $amphures->where('province_id', $province_id)->orderBy('name_th', 'asc')->get();
}

function getDistricts($amphure_id)
{
  $districts = new App\Model\ST_Districts;
  return $districts->where('amphure_id', $amphure_id)->orderBy('name_th', 'asc')->get();
}

function getProvinceId($provinceName)
{
  $provinces = new App\Model\ST_Provinces;
  $province  = $provinces->where('name_th', $provinceName)->orderBy('name_th', 'asc')->first();
  return $province;
}

function getAmphureId($amphureName)
{
  $amphures = new App\Model\ST_Amphures;
  $amphure  = $amphures->where('name_th', $amphureName)->orderBy('name_th', 'asc')->first();
  return $amphure;
}

function getDistrictId($districtName)
{
  $districts = new App\Model\ST_Districts;
  $district  = $districts->where('name_th', $districtName)->orderBy('name_th', 'asc')->first();
  return $district;
}
