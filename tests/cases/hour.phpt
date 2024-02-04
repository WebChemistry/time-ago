<?php declare(strict_types = 1);

require __DIR__ . '/../bootstrap.php';

testLongFormat('1 hour', 'an hour ago', 'in an hour');
testLongFormat('23 hour', '23 hours ago', 'in 23 hours');
testLongFormat('23 hour 1 second', '23 hours ago', 'in 23 hours');
testLongFormat('23 hour 30 minutes', '23 hours ago', 'in 24 hours');
testLongFormat('23 hour 31 minutes', '22 hours ago', 'in 24 hours');
testLongFormat('23 hour 29 minutes', '23 hours ago', 'in 23 hours');
