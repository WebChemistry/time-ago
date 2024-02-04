<?php

// The Nette Tester command-line runner can be
// invoked through the command: ../vendor/bin/tester .

declare(strict_types=1);

use Tester\Assert;
use WebChemistry\TimeAgo\TimeAgo;

if (@!include __DIR__ . '/../vendor/autoload.php') {
	echo 'Install Nette Tester using `composer install`';
	exit(1);
}


// configure environment
Tester\Environment::setup();

function now(): DateTimeImmutable
{
	return new DateTimeImmutable('now');
}

function testLongFormat(string $modifyBy, string $past, string $future, ?TimeAgo $timeAgo = null): void
{
	$timeAgo ??= new TimeAgo();
	$now = new DateTimeImmutable('now');

	// past
	Assert::same($past, $timeAgo->format($now->modify(sprintf('- %s', $modifyBy)), $now));

	// future
	Assert::same($future, $timeAgo->format($now->modify(sprintf('+ %s', $modifyBy)), $now));
}

function test(string $title, callable $function): void
{
	$function();
}
