<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$u = App\Models\User::where('email','admin@example.com')->first();
if (! $u) {
    echo "User not found\n";
    exit(1);
}

echo Illuminate\Support\Facades\Hash::check('ragil123', $u->password) ? "OK\n" : "NOT OK\n";
