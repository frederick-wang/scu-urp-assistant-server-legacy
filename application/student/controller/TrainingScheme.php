<?php

namespace app\student\controller;

class TrainingScheme
{
  private $trainingSchemeListString;
  private $trainingSchemeList;

  function __construct()
  {
    $this->trainingSchemeListString = file_get_contents('training-scheme-list.json', true);
  }

  public function index()
  {
    return response($this->trainingSchemeListString)->header(['Content-Type' => 'application/json; charset=utf-8']);
  }

  public function read($id)
  {
    $this->trainingSchemeList = json_decode($this->trainingSchemeListString);
    $result = [];
    foreach ($this->trainingSchemeList as $value) {
      $result[$value[0]] = $value;
    }
    return json([
      'error' => 0,
      'data' => [
        'trainingScmeme' => $result[$id]
      ]
    ]);
  }
}
