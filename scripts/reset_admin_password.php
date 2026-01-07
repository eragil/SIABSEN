<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$user = App\Models\User::where('email','admin@example.com')->first();
if (! $user) {
    echo "User not found\n";
    exit(1);
}

$user->password = Illuminate\Support\Facades\Hash::make('ragil123');
$user->raw_password = 'ragil123';
$user->save();

echo "Password updated\n";
