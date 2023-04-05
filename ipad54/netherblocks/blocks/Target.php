<?php

namespace skyss0fly\blocks\blocks;

use pocketmine\block\Transparent;

class Target extends Transparent {

    public function isFlammable(): bool
    {
        return true;
    }

    //TODO: Redstone system not implemented in PM...
}