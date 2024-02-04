<?php declare(strict_types = 1);

require __DIR__ . '/../bootstrap.php';

testLongFormat('1 minute', 'a minute ago', 'in a minute');
testLongFormat('59 minute', '59 minutes ago', 'in 59 minutes');
