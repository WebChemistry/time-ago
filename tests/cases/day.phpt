<?php declare(strict_types = 1);

require __DIR__ . '/../bootstrap.php';

testLongFormat('1 day', 'yesterday', 'tomorrow');
testLongFormat('23 day', '23 days ago', 'in 23 days');
testLongFormat('2 day', '2 days ago', 'in 2 days');
