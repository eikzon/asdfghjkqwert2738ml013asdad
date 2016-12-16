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