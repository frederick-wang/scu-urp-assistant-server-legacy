<?php

namespace app\program\controller;

use think\facade\Request;
use app\program\model\ScuUietp as ScuUietpModel;

// SCU Undergraduate Innovation and Entrepreneurship Training Programs
// 四川大学大学生创新创业训练计划
class ScuUietp
{
  public function index()
  {
    $api = Request::param('api');
    $queryStr = str_replace('%', '\%', str_replace('_', '\_', str_replace('[', '\[', str_replace(']', '\]', Request::param('data')['query']))));
    $data = strlen($queryStr) > 0
      ? ScuUietpModel::whereOr('school_supervisor_name', 'like', '%' . $queryStr . '%')
      ->whereOr('project_leader_name', 'like', '%' . $queryStr . '%')
      ->whereOr('project_name', 'like', '%' . $queryStr . '%')
      ->whereOr('other_member_information', 'like', '%' . $queryStr . '%')
      ->field('project_year, college_name, project_name, project_leader_name, participant_number, other_member_information, school_supervisor_name, project_level, application_category, project_category')
      ->select()
      : [];

    $res = [
      'error' => 0,
      'msg' => '查询成功',
      'data' => [
        'query' => $queryStr,
        'number' => count($data),
        'list' => $data
      ]
    ];
    return json($res);
  }
}
