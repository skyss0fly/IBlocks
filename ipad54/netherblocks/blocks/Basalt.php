<?php

namespace skyss0fly\blocks\blocks;

use pocketmine\block\Block;
use pocketmine\block\BlockBreakInfo;
use pocketmine\block\BlockIdentifier;
use pocketmine\block\Opaque;
use pocketmine\block\utils\AnyFacingTrait;
use pocketmine\block\Wood;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\player\Player;
use pocketmine\world\BlockTransaction;

class Basalt extends Opaque {
    use AnyFacingTrait;

    public function place(BlockTransaction $tx, Item $item, Block $blockReplace, Block $blockClicked, int $face, Vector3 $clickVector, ?Player $player = null): bool
    {
        $faces = [
            1 => 0,
            3 => 2,
            2 => 2,
            4 => 1,
            5 => 1
        ];
        $this->facing = $faces[$face] ?? $face;
        return parent::place($tx, $item, $blockReplace, $blockClicked, $face, $clickVector, $player); // TODO: Change the autogenerated stub
    }

    public function getStateBitmask(): int
    {
        return 0b11;
    }

    public function writeStateToMeta(): int
    {
        return $this->facing;
    }

    public function readStateFromData(int $id, int $stateMeta): void
	{
		$this->facing = $stateMeta;
	}
}