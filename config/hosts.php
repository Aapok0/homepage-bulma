<?php
return [
    'canonical' => 'www.aapokokko.com',
    'allowed' => [
        'aapokokko.fi',
        'www.aapokokko.fi',
        'aapokokko.com',
        'www.aapokokko.com',
        'localhost',
        '127.0.0.1',
    ],
    // Suffixes matched with a leading dot so only real subdomains pass. Covers the
    // Container Apps ingress FQDN (<app>.<region>.azurecontainerapps.io) used for
    // staging before DNS cutover.
    'allowed_suffixes' => [
        '.azurecontainerapps.io',
    ],
    'local' => [
        'localhost',
        '127.0.0.1',
    ],
];
