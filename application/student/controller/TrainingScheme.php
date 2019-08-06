<?php

namespace app\student\controller;

class TrainingScheme
{
  public function index()
  {
    $json_string = file_get_contents('training-scheme-list.json', true);
    return response($json_string)->header(['Content-Type' => 'application/json; charset=utf-8']);
  }
}
