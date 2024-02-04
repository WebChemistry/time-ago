<?php declare(strict_types = 1);

namespace WebChemistry\TimeAgo\Rule;

use DateInterval;

interface TimeAgoRule
{

	public function getId(): string;

	public function isOk(int $differenceInSeconds, DateInterval $difference): bool;

	public function getAmount(int $differenceInSeconds, DateInterval $difference): int;

}
