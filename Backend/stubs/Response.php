<?php

namespace CodeIgniter\HTTP;

class Response
{
  public function setStatusCode(int $code) {}
  public function setHeader(string $key, string $value) {}
  public function setJSON($data) {}
  public function send() {}
}
