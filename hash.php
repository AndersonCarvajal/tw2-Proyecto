<?php
require 'vendor/autoload.php';

use Authentication\PasswordHasher\DefaultPasswordHasher;

$hasher = new DefaultPasswordHasher();

echo $hasher->hash('12345');