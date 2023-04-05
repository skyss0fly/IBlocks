<?php

namespace skyss0fly\blocks\blocks;

use pocketmine\block\Lantern;

class SoulLantern extends Lantern {

    public function getLightLevel(): int
    {
        return 10;
    }
}