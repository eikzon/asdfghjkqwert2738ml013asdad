<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ST_Provinces;
use App\Model\ST_Amphures;
use App\Model\ST_Districts;

class ProvincesController extends Controller
{
  public function options(Request $request)
  {
    $provinces = new ST_Provinces;
    $province  = @getProvinceId($request->input('province'));
    $amphures  = @getAmphures($province->id);
    $districts = @getDistricts($amphures->first()->id);
    $zipcode   = @$districts->first()->zip_code;

    $option['amphures'] = '';
    if(!empty($amphures))
    {
      foreach($amphures as $amphure)
      {
        @$option['amphures'] .='<option value="' . $amphure->name_th . '">' . str_replace('*', '', $amphure->name_th) . '</option>';
      }
    }
    else
    {
      @$option['amphures'] = '<option value="0">กรุณาเลือกอำเภอ/เขต</option>';
    }

    $option['district'] = '';
    if(!empty($districts))
    {
      foreach($districts as $district)
      {
        @$option['district'] .='<option value="' . $district->name_th . '">' . str_replace('*', '', $district->name_th) . '</option>';
      }
    }

    @$option['zipcode'] = $zipcode;

    return $option;
  }

  public function optionsAmphures(Request $request)
  {
    $amphures  = new ST_Amphures;
    $amphure   = @getAmphureId($request->input('amphure'));
    $districts = @getDistricts($amphure->id);
    $zipcode   = @$districts->first()->zip_code;

    $option['district'] = '';
    if(!empty($districts))
    {
      foreach($districts as $district)
      {
        @$option['district'] .='<option value="' . $district->name_th . '">' . $district->name_th . '</option>';
      }
    }
    else
    {
      @$option['amphures'] = '<option value="0">กรุณาเลือกตำบล/แขวง</option>';
    }

    @$option['zipcode'] = $zipcode;

    return $option;
  }

  public function optionsDistricts(Request $request)
  {
    $districts = new ST_Districts;
    $district  = @getDistrictId($request->input('districts'));
    $zipcode   = @$district->zip_code;

    @$option['zipcode'] = $zipcode;

    return $option;
  }
}
