<?php

namespace skyss0fly\blocks\listener;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCreationEvent;
use skyss0fly\netherblocksblocks\player\Player as MyPlayer;

class EventListener implements Listener {

    public function onPlayerCreation(PlayerCreationEvent $event){
        $event->setPlayerClass(MyPlayer::class);
    }
}