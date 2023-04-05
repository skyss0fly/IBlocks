<?php

namespace skyss0fly\blocks\blocks;

use pocketmine\block\Opaque;

class CryingObsidian extends Opaque {

    public function getLightLevel(): int
    {
        return 10;
    }
}