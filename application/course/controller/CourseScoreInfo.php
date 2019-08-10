<?php

namespace app\course\controller;

use think\facade\Request;
use app\course\model\CourseScoreInfo as CourseScoreInfoModel;

class CourseScoreInfo
{
  public function save()
  {
    $api = Request::param('api');
    $data = Request::param('data')['course_score_info'];

    $courseScoreInfo = new CourseScoreInfoModel;
    $isExisted = (null !== CourseScoreInfoModel::get($data));
    if (!$isExisted) {
      $courseScoreInfo->allowField(true)->save($data);
    }

    $res = [
      'error' => $isExisted ? 1 : 0,
      'msg' => $isExisted ? '记录已存在，插入失败' : '记录插入成功',
      'data' => [
        'course_score_info' => $data
      ]
    ];
    return json($res);
  }
}
