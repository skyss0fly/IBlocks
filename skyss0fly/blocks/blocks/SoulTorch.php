<?php

namespace skyss0fly\blocks\blocks;

use pocketmine\block\Torch;

class SoulTorch extends Torch {

    public function getLightLevel() : int{
        return 10;
    }
}
