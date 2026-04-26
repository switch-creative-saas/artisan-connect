<?php
/**
 * Secure session configuration for HTTPS deployment
 */
require_once __DIR__ . '/init.php';

function start_secure_session(): void {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function destroy_session(): void {
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_destroy();
    }
}

function regenerate_session_id(): void {
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_regenerate_id(true);
    }
}
