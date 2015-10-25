<?php

namespace FixMyBow;
use pocketmine\utils\TextFormat as MT;
use pocketmine\event\Listener;
use pocketmine\event\inventory\InventoryPickupArrowEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Main extends PluginBase implements Listener{
public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getServer()->getLogger()->info(MT::GREEN.'Bows Are Now Fixed On Your Server BestWiches');
$this->getServer()->getLogger()->info(MT::BLUE.'This Plugin Is Made By Crafting Mania');
}

public function onPickUp(\pocketmine\event\inventory\InventoryPickupArrowEvent $event){
    $event->setCancelled(true);
}
}
