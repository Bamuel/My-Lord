<?php

namespace megasamninjaMyLord;

    use pocketmineeventListener;
    use pocketmineeventplayerPlayerCommandPreprocessEvent;
    use pocketminePlayer;
    use pocketminepluginPluginBase;
    use pocketmineutilsTextFormat;
    
class Main extends PluginBase implements Listener{
        
        public function onEnable(){
            $this->getLogger()->info("Lord has turned on the plugin");
        }

        public function onChatCommand(PlayerCommandPreprocessEvent $event){
            $code = "MegaSamNinja";
            $lord = "My Lord";
            $player = $event->getPlayer();
            if($message{0}!= "/"){
                $tempmessage = $message;
                $messagewords = str_word_count($message, 1);
                for($i = 0; $i < count($messagewords); $i++){
                        if($code["delete-message"] == true){
                            $event->setCancelled(true);
                        }
                        if($code["enable-replace"] == true){
                            $length = strlen($messagewords[$i]);
                            $replace = "";
                            for ($l = 0; $l < $length; $l++){
                                $replace = $replace . "*";
                            }
                            $tempmessage = str_replace($messagewords[$i],$replace,$tempmessage);
                            $replace = $code["replace-word"];
                            $tempmessage = str_replace($messagewords[$i],$replace,$tempmessage);
                            return true; //funny I dont know why i always do return true, Maybe its to make it happen ?
                        }

                    }

                }
        }
}
