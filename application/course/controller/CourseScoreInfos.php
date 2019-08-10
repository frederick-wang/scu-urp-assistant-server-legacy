<?php

namespace app\course\controller;

use think\facade\Request;
use app\course\model\CourseScoreInfo as CourseScoreInfoModel;

class CourseScoreInfos
{
  public function save()
  {
    $api = Request::param('api');
    $data = Request::param('data')['course_score_infos'];

    $courseScoreInfo = new CourseScoreInfoModel;
    $saveResults = [];
    $dataToSave = [];
    foreach ($data as $value) {
      $isExisted = (null !== CourseScoreInfoModel::get($value));
      if (!$isExisted) {
        $dataToSave[] = $value;
      }
      $saveResults[] = [
        'error' => $isExisted ? 1 : 0,
        'msg' => $isExisted ? '记录已存在，插入失败' : '记录插入成功',
        'data' => [
          'course_score_info' => $value
        ]
      ];
    }
    $courseScoreInfo->allowField(true)->saveAll($dataToSave);

    $res = [
      'error' => 0,
      'data' => [
        'result' => $saveResults
      ]
    ];
    return json($res);
  }
}
