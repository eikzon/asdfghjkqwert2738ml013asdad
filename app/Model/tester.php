<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group_Table extends Model
{
  /* Table Name */
  protected $table    = 'group_table';
  /* open action allow field in table DB :: for create, update only */
  protected $fillable = ['feild_1', 'feild_2', 'feild_3'];

  /* Example : Filter by Group */
  public function index($conditions = [])
  {
    $result = []; /* default var */

    /* self : Group_Table in DB, Call table_name in function use self:: */
    $groupsAll = self::with('types')->where('status', 1)->get();

    if(!empty($groupsAll))
    {
      $result['groups'] = $groupsAll;
      /* Only Type A */
      $groupsTypeA = $groupsAll['types']->where('type' ,'a');
      /* Only Type B */
      $groupsTypeB = $groupsAll['types']->where('type' ,'b');

      foreach($groupsAll as $group)
      {
        $typeA = $groupsTypeA->where('fk_group_id', $group['id']);
        $result['typeA'][$group['id']] = [
          'count' => $typeA->count(),
          'sum'   => $typeA->sum('price_field'),
          'avg'   => $typeA->avg('price_field')
        ];

        $typeB = $groupsTypeB->where('fk_group_id', $group['id']);
        $result['typeB'][$group['id']] = [
          'count' => $typeB->count(),
          'sum'   => $typeB->sum('price_field'),
          'avg'   => $typeB->avg('price_field')
        ];
      }
    }

    return $result; /* pass result to controller file when call index function */
  }

  /* Relation table Type at fk_group_id */
  public function types()
  {
    /* don't forget create model for Type_Table */
    return $this->hasMany(Type_Table::class, 'fk_group_id')->where('type_status', 1);
    /* hasMany : 1 group to more type */
  }
}

/* Examplae foreach in view file (html) */
if(!empty($result['groups']))
  @foreach($result['groups'] as $group)
    '<div>' . $group['name'] . '</div>'
    '<div>' . ($result['typeA'][$group['id']]['count'] + $result['typeB'][$group['id']]['count']) . '</div>'
    '<div>' . $result['typeA'][$group['id']]['count'] . '</div>'
    '<div>' . $result['typeA'][$group['id']]['sum'] . '</div>'
    '<div>' . $result['typeA'][$group['id']]['avg'] . '</div>'
    '<div>' . $result['typeB'][$group['id']]['count'] . '</div>'
    '<div>' . $result['typeB'][$group['id']]['sum'] . '</div>'
    '<div>' . $result['typeB'][$group['id']]['avg'] . '</div>'
  @endforeach
@endif

