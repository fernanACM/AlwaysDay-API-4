<?php

namespace FaizDev\AlwaysDay;

use pocketmine\Player;

use pocketmine\Player; to
use pocketmine\player\Player;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Main extends PluginBase {
	
	public function onEnable(){
		$this->getScheduler()->scheduleRepeatingTask(new UpdateTime($this), 20); 
	}
	
}
