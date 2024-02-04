<?php declare(strict_types = 1);

namespace WebChemistry\TimeAgo\Rule;

use DateInterval;

final class TimeAgoSecondRule implements TimeAgoRule
{

	public function __construct(
		private string $id,
		private int $maximum,
		private int $divideBy = 1,
	)
	{
	}

	public function getId(): string
	{
		return $this->id;
	}

	public function isOk(int $differenceInSeconds, DateInterval $difference): bool
	{
		return $differenceInSeconds < $this->maximum;
	}

	public function getAmount(int $differenceInSeconds, DateInterval $difference): int
	{
		return (int) round($differenceInSeconds / $this->divideBy);
	}

}
