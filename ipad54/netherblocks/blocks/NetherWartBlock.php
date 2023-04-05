<?php

namespace skyss0fly\blocks\blocks;

use pocketmine\block\Opaque;

class NetherWartBlock extends Opaque {

    public function isWarped() : bool {
        return false;
    }
}