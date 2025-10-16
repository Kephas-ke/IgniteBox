<?php
// ---------------- Base helpers ----------------
if (!function_exists('view')) {
  function view(string $name, array $data = [], array $options = []) {}
}
if (!function_exists('base_url')) {
  function base_url(string $uri = '') {}
}
if (!function_exists('site_url')) {
  function site_url(string $uri = '') {}
}
if (!function_exists('current_url')) {
  function current_url() {}
}
if (!function_exists('previous_url')) {
  function previous_url() {}
}
if (!function_exists('csrf_field')) {
  function csrf_field() {}
}
if (!function_exists('old')) {
  function old(string $key, $default = null) {}
}

// ---------------- Form helpers ----------------
if (!function_exists('form_open')) {
  function form_open(string $action = '', array $attributes = []) {}
}
if (!function_exists('form_close')) {
  function form_close() {}
}
if (!function_exists('form_input')) {
  function form_input(array $data = []) {}
}
if (!function_exists('form_password')) {
  function form_password(array $data = []) {}
}
if (!function_exists('form_textarea')) {
  function form_textarea(array $data = []) {}
}
if (!function_exists('form_dropdown')) {
  function form_dropdown(string $name, array $options = [], $selected = null, array $extra = []) {}
}
if (!function_exists('form_checkbox')) {
  function form_checkbox(array $data = []) {}
}
if (!function_exists('form_radio')) {
  function form_radio(array $data = []) {}
}
if (!function_exists('form_label')) {
  function form_label(string $label, string $id = '', array $attributes = []) {}
}

// ---------------- URL helpers ----------------
if (!function_exists('anchor')) {
  function anchor(string $uri, string $title = '', array $attributes = []) {}
}
if (!function_exists('redirect')) {
  function redirect(string $uri = '') {}
}
if (!function_exists('url_title')) {
  function url_title(string $str, string $separator = '-', bool $lowercase = false) {}
}
if (!function_exists('uri_string')) {
  function uri_string() {}
}

// ---------------- Security helpers ----------------
if (!function_exists('esc')) {
  function esc($value, string $type = 'html') {}
}
if (!function_exists('sanitize_filename')) {
  function sanitize_filename(string $filename) {}
}
if (!function_exists('strip_image_tags')) {
  function strip_image_tags(string $str) {}
}
if (!function_exists('html_escape')) {
  function html_escape($var) {}
}

// ---------------- Text helpers ----------------
if (!function_exists('word_limiter')) {
  function word_limiter(string $str, int $limit = 100, string $endChar = '…') {}
}
if (!function_exists('character_limiter')) {
  function character_limiter(string $str, int $limit = 500, string $endChar = '…') {}
}
if (!function_exists('ellipsis')) {
  function ellipsis(string $str, int $limit = 100, string $endChar = '…') {}
}
if (!function_exists('strip_quotes')) {
  function strip_quotes(string $str) {}
}

// ---------------- Array helpers ----------------
if (!function_exists('element')) {
  function element($item, array $array, $default = null) {}
}
if (!function_exists('random_element')) {
  function random_element(array $array) {}
}
if (!function_exists('is_assoc')) {
  function is_assoc(array $array) {}
}
if (!function_exists('array_merge_recursive_distinct')) {
  function array_merge_recursive_distinct(array $array1, array $array2) {}
}

// ---------------- Date helpers ----------------
if (!function_exists('now')) {
  function now(string $timezone = null) {}
}
if (!function_exists('human_to_unix')) {
  function human_to_unix(string $datestr) {}
}
if (!function_exists('unix_to_human')) {
  function unix_to_human(int $time = null, bool $seconds = true, string $fmt = 'us') {}
}

// ---------------- Number helpers ----------------
if (!function_exists('number_to_currency')) {
  function number_to_currency(float $number, string $currency = 'USD', string $locale = 'en_US') {}
}
if (!function_exists('number_to_percentage')) {
  function number_to_percentage(float $number, int $precision = 2) {}
}
if (!function_exists('number_to_size')) {
  function number_to_size(float $number) {}
}

// ---------------- Misc helpers ----------------
if (!function_exists('log_message')) {
  function log_message(string $level, string $message) {}
}
if (!function_exists('service')) {
  function service(string $name, $params = null) {}
}
if (!function_exists('cache')) {
  function cache(string $key, $value = null, int $ttl = null) {}
}
if (!function_exists('env')) {
  function env(string $key, $default = null) {}
}
