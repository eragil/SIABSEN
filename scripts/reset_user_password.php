<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

if ($argc < 3) {
    echo "Usage: php reset_user_password.php email password\n";
    exit(1);
}

$email = $argv[1];
$password = $argv[2];

$user = App\Models\User::where('email', $email)->first();
if (! $user) {
    echo "User not found\n";
    exit(1);
}

$user->password = Illuminate\Support\Facades\Hash::make($password);
$user->raw_password = $password;
$user->save();

echo "Password updated for $email\n";
