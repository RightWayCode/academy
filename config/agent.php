<?php
function detect_bot(): bool
{
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');

    // Common bot signatures
    $botKeywords = [
        'bot', 'crawl', 'slurp', 'spider', 'curl',
        'facebookexternalhit', 'mediapartners-google',
        'ahrefs', 'semrush', 'mj12bot', 'pingdom', 'uptime', 'python-requests'
    ];

    foreach ($botKeywords as $bot) {
        if (strpos($userAgent, $bot) !== false) {
            return true;
        }
    }

    return false;
}

// 🚫 Middleware to block bots
function block_bots()
{
    if (detect_bot()) {
        header('HTTP/1.1 403 Forbidden');
        echo "<h1>Access Denied</h1><p>Bots are not allowed.</p>";
        exit;
    }
}
?>
