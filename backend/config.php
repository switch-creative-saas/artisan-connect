<?php
// Beginner-friendly config: update these values to match your local MySQL setup.
return [
  'db_host' => getenv('DB_HOST'),
  'db_name' => getenv('DB_NAME'),
  'db_user' => getenv('DB_USER'),
  'db_pass' => getenv('DB_PASS'),
  'db_charset' => 'utf8mb4',
];

