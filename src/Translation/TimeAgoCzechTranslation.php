<?php declare(strict_types = 1);

namespace WebChemistry\TimeAgo\Translation;

final class TimeAgoCzechTranslation extends AbstractTimeAgoTranslation
{

	public function __construct()
	{
		$this->translations = [
			// now
			'past.long.now' => ['nyní'],
			'past.short.now' => ['~1m'],
			'future.long.now' => ['za okamžik'],
			'future.short.now' => ['~1m'],
			// minutes
			'past.long.minute' => ['před minutou', 'před %d minutami', 'před %d minutami'],
			'past.short.minute' => ['%dm'],
			'future.long.minute' => ['za minutu', 'za %d minuty', 'za %d minut'],
			'future.short.minute' => ['%dm'],
			// hours
			'past.long.hour' => ['před hodinou', 'před %d hodinami', 'před %d hodinami'],
			'past.short.hour' => ['%dh'],
			'future.long.hour' => ['za hodinu', 'za %d hodiny', 'za %d hodin'],
			'future.short.hour' => ['%dh'],
			// days
			'past.long.day' => ['včera', 'před %d dny', 'před %d dny'],
			'past.short.day' => ['%dd'],
			'future.long.day' => ['zítra', 'za %d dny', 'za %d dní'],
			'future.short.day' => ['%dd'],
			// months
			'past.long.month' => ['před měsícem', 'před %d měsíci', 'před %d měsíci'],
			'past.short.month' => ['%dmo'],
			'future.long.month' => ['za měsíc', 'za %d měsíce', 'za %d měsíců'],
			'future.short.month' => ['%dmo'],
			// years
			'past.long.year' => ['loni', 'před %d lety', 'před %d lety'],
			'past.short.year' => ['%dy', '%dy', '%dy'],
			'future.long.year' => ['příští rok', 'za %d roky', 'za %d let'],
			'future.short.year' => ['%dy', '%dy', '%dy'],
		];
	}

	protected function getPluralIndex(int $amount): int
	{
		return $amount === 1 ? 0 : ($amount < 5 ? 1 : 2);
	}

}
