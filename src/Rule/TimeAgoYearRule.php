<?php declare(strict_types = 1);

namespace WebChemistry\TimeAgo\Rule;

use DateInterval;

final class TimeAgoYearRule implements TimeAgoRule
{

	public function __construct(
		private string $id = 'year',
	)
	{
	}

	public function getId(): string
	{
		return $this->id;
	}

	public function isOk(int $differenceInSeconds, DateInterval $difference): bool
	{
		return true;
	}

	public function getAmount(int $differenceInSeconds, DateInterval $difference): int
	{
		if ($difference->m > 7) {
			return $difference->y + 1;
		}

		return $difference->y;
	}

}
