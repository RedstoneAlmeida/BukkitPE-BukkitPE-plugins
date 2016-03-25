<?php

namespace SP;

use BukkitPE\block\Block;
use BukkitPE\plugin\PluginBase;
use BukkitPE\event\block\BlockPlaceEvent;
use BukkitPE\Server;
use BukkitPE\Player;
use BukkitPE\level\Level;
use BukkitPE\event\Listener;
use BukkitPE\event\block\BlockBreakEvent;
use BukkitPE\utils\TextFormat as C;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->getLogger()->info(C::GREEN."SP Enabled");
	}
	public function onBreak(BlockBreakEvent $event){
		if(!$event->getPlayer()->isOp()){
			$event->setCancelled();
		}
	}
	public function onPlace(BlockPlaceEvent $event){
		if(!$event->getPlayer()->isOp()){
			$event->setCancelled();
		}
	}
}