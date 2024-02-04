<?php declare(strict_types = 1);

use WebChemistry\TimeAgo\TimeAgo;
use WebChemistry\TimeAgo\Translation\TimeAgoCzechTranslation;

require __DIR__ . '/../bootstrap.php';

testLongFormat('1 minute', 'před minutou', 'za minutu', timeAgo: new TimeAgo(new TimeAgoCzechTranslation()));
testLongFormat('2 minute', 'před 2 minutami', 'za 2 minuty', timeAgo: new TimeAgo(new TimeAgoCzechTranslation()));
testLongFormat('5 minute', 'před 5 minutami', 'za 5 minut', timeAgo: new TimeAgo(new TimeAgoCzechTranslation()));
