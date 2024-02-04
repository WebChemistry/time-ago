<?php declare(strict_types = 1);

namespace WebChemistry\TimeAgo\Rule;

use DateInterval;

final class TimeAgoMonthRule implements TimeAgoRule
{

	public function __construct(
		private string $id = 'month',
	)
	{
	}

	public function getId(): string
	{
		return $this->id;
	}

	public function isOk(int $differenceInSeconds, DateInterval $difference): bool
	{
		return $differenceInSeconds < 31_622_400 // 60 * 60 * 24 * 365
			&& $difference->y === 0
			&& ($difference->m < 11 || $difference->d < 15);
	}

	public function getAmount(int $differenceInSeconds, DateInterval $difference): int
	{
		if ($difference->d > 15) {
			return $difference->m + 1;
		}

		return $difference->m;
	}

}
