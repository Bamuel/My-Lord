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
		$message = MegaSamNinja
		$player = $event->getPlayer();
		if($message{0} != "/"){
		//blah blah
		//figuring out how to replace "MegaSamNinja" in chat to "My Lord"
		}
	}
?>
