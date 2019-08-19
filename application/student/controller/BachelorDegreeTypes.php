<?php

namespace app\student\controller;

class BachelorDegreeTypes
{
  private $bachelorDegreeTypesString;

  function __construct()
  {
    // 四川大学学士学位授位专业及授位学科门类表
    $this->bachelorDegreeTypesString = file_get_contents('bachelor-degree-types.json', true);
  }

  public function index()
  {
    return response($this->bachelorDegreeTypesString)->header(['Content-Type' => 'application/json; charset=utf-8']);
  }
}
