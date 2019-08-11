<?php

namespace app\student\controller;

use think\facade\Request;
use app\student\model\StudentCourseScoreInfo as StudentCourseScoreInfoModel;

class StudentCourseScoreInfos
{
  public function save()
  {
    $api = Request::param('api');
    $data = Request::param('data')['student_course_score_infos'];

    $studentCourseScoreInfo = new StudentCourseScoreInfoModel;
    $saveResults = [];
    $dataToSave = [];
    foreach ($data as $value) {
      $isExisted = (null !== StudentCourseScoreInfoModel::get($value));
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
    $studentCourseScoreInfo->allowField(true)->saveAll($dataToSave);

    $res = [
      'error' => 0,
      'data' => [
        'result' => $saveResults
      ]
    ];
    return json($res);
  }
}
