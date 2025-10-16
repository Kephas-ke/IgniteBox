<?php

namespace CodeIgniter;

class Controller
{
  public $request;
  public $response;

  public function __construct() {}

  protected function loadView(string $view, array $data = []) {}
}
