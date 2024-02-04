<?php declare(strict_types = 1);

namespace WebChemistry\TimeAgo\Rule;

use DateInterval;

final class TimeAgoDayRule implements TimeAgoRule
{

	public function __construct(
		private string $id = 'day',
	)
	{
	}

	public function getId(): string
	{
		return $this->id;
	}

	public function isOk(int $differenceInSeconds, DateInterval $difference): bool
	{
		return $differenceInSeconds < 2_678_400 // 60 * 60 * 24 * 31
			&& $difference->m === 0;
	}

	public function getAmount(int $differenceInSeconds, DateInterval $difference): int
	{
		return $difference->d;
	}

}
