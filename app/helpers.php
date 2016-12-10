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