<?php declare(strict_types = 1);

require __DIR__ . '/../bootstrap.php';

testLongFormat('1 second', 'just now', 'in a moment');
testLongFormat('59 second', 'just now', 'in a moment');
