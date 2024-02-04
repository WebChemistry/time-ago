<?php declare(strict_types = 1);

require __DIR__ . '/../bootstrap.php';

testLongFormat('1 month', 'a month ago', 'in a month');
testLongFormat('11 months', '11 months ago', 'in 11 months');
