<?php

namespace CodeIgniter\Database;

class BaseConnection
{
  public function table(string $table) {}
  public function query(string $sql, array $binds = null) {}
}
