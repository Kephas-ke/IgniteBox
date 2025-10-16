<?php

namespace App\Controllers;

class BaseController
{
  protected $request;
  protected $helpers = [];

  public function __construct() {}

  protected function loadView(string $view, array $data = []) {}
}
