<?php

namespace CodeIgniter\Validation;

class Validation
{
  public function run(array $data, string $rules = null, array $messages = []) {}
  public function setRules(array $rules, array $messages = []) {}
  public function getErrors(): array {}
  public function withRequest($request) {}
}
