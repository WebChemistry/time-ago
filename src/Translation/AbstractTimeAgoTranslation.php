<?php declare(strict_types = 1);

namespace WebChemistry\TimeAgo\Translation;

abstract class AbstractTimeAgoTranslation implements TimeAgoTranslation
{

	/** @var array<string, string[]> */
	protected array $translations = [];

	protected function extractTranslation(string $id, int $amount): string
	{
		$i = $this->getPluralIndex($amount);

		return $this->translations[$id][$i] ?? $this->translations[$id][0];
	}

	protected function getPluralIndex(int $amount): int
	{
		return $amount === 1 ? 0 : 1;
	}

	public function translate(string $id, int $amount, int $flags = 0): string
	{
		$id = $flags & self::FlagShortFormat ? $id . 'short.' : 'long.' . $id;
		$id = $flags & self::FlagFuture ? 'future.' . $id : 'past.' . $id;

		return sprintf($this->extractTranslation($id, $amount), $amount);
	}

}
