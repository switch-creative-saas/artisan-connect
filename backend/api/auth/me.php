<?php
require_once __DIR__ . '/../../lib/init.php';
require_once __DIR__ . '/../../lib/session.php';
require_once __DIR__ . '/../../lib/auth.php';

start_secure_session();

$user = current_user();
if (!$user) {
  json_error('Unauthorized', 401);
}

json_response(['ok' => true, 'user' => $user], 200);

