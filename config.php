<?php
// ─── NexusAI Site Configuration ───────────────────────────────────────────────
define('SITE_NAME',    'NexusAI');
define('SITE_TAGLINE', 'Think Faster. Build Smarter.');
define('SITE_URL',     'http://localhost/nexusai');
define('SITE_EMAIL',   'hello@nexusai.io');
define('SITE_VERSION', '1.0.0');

// Early-access submissions stored in a flat JSON file (no DB required)
define('DATA_DIR',  __DIR__ . '/data');
define('LEADS_FILE', DATA_DIR . '/leads.json');

// Create data dir if missing
if (!is_dir(DATA_DIR)) {
    mkdir(DATA_DIR, 0755, true);
}
if (!file_exists(LEADS_FILE)) {
    file_put_contents(LEADS_FILE, json_encode([]));
}

// Timezone
date_default_timezone_set('UTC');
