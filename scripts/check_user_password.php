<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

if ($argc < 3) {
    echo "Usage: php check_user_password.php email password\n";
    exit(1);
}

$email = $argv[1];
$password = $argv[2];

$u = App\Models\User::where('email', $email)->first();
if (! $u) {
    echo "User not found\n";
    exit(1);
}

echo Illuminate\Support\Facades\Hash::check($password, $u->password) ? "OK\n" : "NOT OK\n";
