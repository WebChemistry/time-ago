<?php declare(strict_types = 1);

namespace WebChemistry\TimeAgo;

use DateTime;
use DateTimeInterface;
use LogicException;
use WebChemistry\TimeAgo\Rule\TimeAgoDayRule;
use WebChemistry\TimeAgo\Rule\TimeAgoMonthRule;
use WebChemistry\TimeAgo\Rule\TimeAgoRule;
use WebChemistry\TimeAgo\Rule\TimeAgoSecondRule;
use WebChemistry\TimeAgo\Rule\TimeAgoYearRule;
use WebChemistry\TimeAgo\Translation\TimeAgoEnglishTranslation;
use WebChemistry\TimeAgo\Translation\TimeAgoTranslation;

final class TimeAgo
{

	private TimeAgoTranslation $translator;

	/** @var TimeAgoRule[] */
	private array $rules;

	public function __construct(?TimeAgoTranslation $translator = null)
	{
		$this->translator = $translator ?? new TimeAgoEnglishTranslation();
		$this->rules = [
			new TimeAgoSecondRule('now', 60),
			new TimeAgoSecondRule('minute', 3_600, 60),
			new TimeAgoSecondRule('hour', 86_400, 3_600),
			new TimeAgoDayRule(),
			new TimeAgoMonthRule(),
			new TimeAgoYearRule(),
		];
	}

	public function format(DateTimeInterface $date, ?DateTimeInterface $now = null): string
	{
		$now ??= new DateTime('now', ($timeZone = $date->getTimezone()) ? $timeZone : null); // @phpstan-ignore-line
		$flags = 0;

		$seconds = $now->getTimestamp() - $date->getTimestamp();
		$difference = $date->diff($now);

		if ($seconds < 0) {
			$seconds = -$seconds;
			$flags |= TimeAgoTranslation::FlagFuture;
		}

		foreach ($this->rules as $rule) {
			if ($rule->isOk($seconds, $difference)) {
				return $this->translator->translate($rule->getId(), $rule->getAmount($seconds, $difference), $flags);
			}
		}

		throw new LogicException('No rule found for given date difference.');
	}

}
