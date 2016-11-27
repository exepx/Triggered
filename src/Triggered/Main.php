<?php

namespace Triggered;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener {
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		if($cmd->getName() === "triggered"){
			foreach($this->getServer()->getOnlinePlayers() as $p){
			$p->sendMessage(TF::BOLD . TF::GOLD . $sender->getName() . TF::RED . " is triggered!");
			}
		}
	}
}