<?php

namespace MyLord;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
	  $this->getLogger()->info("Lord has turned on the plugin");
    }
	
	public function onChatCommand(PlayerCommandPreprocessEvent $event){
		$message = "MegaSamNinja";
		$lord = "My Lord";
		$player = $event->getPlayer();
		if($message{0} != "/"){
			$message = str_replace($lord);
			return true;
		}
	}
}
