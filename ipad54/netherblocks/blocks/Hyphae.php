<?php

namespace skyss0fly\blocks\blocks;

use pocketmine\block\utils\PillarRotationInMetadataTrait;

class Hyphae extends Wood
{
	use PillarRotationInMetadataTrait;

	public function getAxisMetaShift(): int
	{
		return 0;
	}

}