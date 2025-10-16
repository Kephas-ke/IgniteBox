<?php

namespace CodeIgniter\HTTP;

class IncomingRequest
{
  public function getMethod(bool $upper = false) {}
  public function getPost(string $key = null, $filter = null) {}
  public function getGet(string $key = null, $filter = null) {}
  public function getRawInput() {}
}
