<?php

namespace skyss0fly\blocks\blocks;

use pocketmine\block\Wood as PMWood;

class Wood extends PMWood {

    public function getFlameEncouragement() : int{
        return 0;
    }

    public function getFlammability() : int{
        return 0;
    }

    public function getFuelTime(): int
    {
        return 0;
    }
}