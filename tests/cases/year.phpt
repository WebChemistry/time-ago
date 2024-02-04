<?php declare(strict_types = 1);

require __DIR__ . '/../bootstrap.php';

testLongFormat('1 year', 'last year', 'next year');
testLongFormat('2 years', '2 years ago', 'in 2 years');
testLongFormat('10 years', '10 years ago', 'in 10 years');
