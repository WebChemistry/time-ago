<?php declare(strict_types = 1);

namespace WebChemistry\TimeAgo\Translation;

final class TimeAgoEnglishTranslation extends AbstractTimeAgoTranslation
{

	public function __construct()
	{
		$this->translations = [
			// now
			'past.long.now' => ['just now'],
			'past.short.now' => ['~1m'],
			'future.long.now' => ['in a moment'],
			'future.short.now' => ['~1m'],
			// minutes
			'past.long.minute' => ['a minute ago', '%d minutes ago'],
			'past.short.minute' => ['%dm'],
			'future.long.minute' => ['in a minute', 'in %d minutes'],
			'future.short.minute' => ['%dm'],
			// hours
			'past.long.hour' => ['an hour ago', '%d hours ago'],
			'past.short.hour' => ['%dh'],
			'future.long.hour' => ['in an hour', 'in %d hours'],
			'future.short.hour' => ['%dh'],
			// days
			'past.long.day' => ['yesterday', '%d days ago'],
			'past.short.day' => ['%dd'],
			'future.long.day' => ['tomorrow', 'in %d days'],
			'future.short.day' => ['%dd'],
			// months
			'past.long.month' => ['a month ago', '%d months ago'],
			'past.short.month' => ['%dmo'],
			'future.long.month' => ['in a month', 'in %d months'],
			'future.short.month' => ['%dmo'],
			// years
			'past.long.year' => ['last year', '%d years ago'],
			'past.short.year' => ['%dy', '%dy'],
			'future.long.year' => ['next year', 'in %d years'],
			'future.short.year' => ['%dy'],
		];
	}

}
