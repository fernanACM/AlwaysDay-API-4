<?php

declare(strict_types = 1);

namespace FaizDev\AlwaysDay\Tasks;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\scheduler\Task;
use FaizDev\AlwaysDay\Loader;

class SetDayTask extends Task{
	
	public function __construct(Loader $plugin){
		$this->plugin = $plugin;
	}
	public function onRun(int $currentTick) : void{
		foreach($this->plugin->getServer()->getLevels() as $level){
			$level->setTime(Level::TIME_DAY);
			$level->stopTime();
		}
	}
}
