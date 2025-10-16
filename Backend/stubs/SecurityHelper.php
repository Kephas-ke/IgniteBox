<?php
if (!function_exists('esc')) {
  function esc($value, string $type = 'html') {}
}

if (!function_exists('sanitize_filename')) {
  function sanitize_filename(string $filename) {}
}
