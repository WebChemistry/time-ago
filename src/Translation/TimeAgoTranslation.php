<?php declare(strict_types = 1);

namespace WebChemistry\TimeAgo\Translation;

interface TimeAgoTranslation
{

	public const FlagFuture = 0b0001;
	public const FlagShortFormat = 0b0010;
	public const FlagPlural = 0b0100;


	public function translate(string $id, int $amount, int $flags = 0): string;

}
