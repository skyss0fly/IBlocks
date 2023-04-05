<?php

namespace skyss0fly\blocks\blocks;

use pocketmine\block\utils\PillarRotationInMetadataTrait;

class Log extends Wood {

    use PillarRotationInMetadataTrait;

    protected function getAxisMetaShift() : int{
        return 0;
    }

}