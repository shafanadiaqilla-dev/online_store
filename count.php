<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Users count: " . \App\Models\User::count() . "\n";
echo "Products count: " . \App\Models\Product::count() . "\n";
echo "Orders count: " . \App\Models\Order::count() . "\n";
echo "Items count: " . \App\Models\Item::count() . "\n";
