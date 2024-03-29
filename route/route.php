<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::resource('student/training_scheme', 'student/TrainingScheme');
Route::resource('student/bachelor_degree_types', 'student/bachelorDegreeTypes');
Route::resource('student/course_score_infos', 'student/StudentCourseScoreInfos');
Route::resource('course/course_score_info', 'course/CourseScoreInfo');
Route::resource('course/course_score_infos', 'course/CourseScoreInfos');
Route::resource('program/scu_uietp', 'program/ScuUietp');

return [];
