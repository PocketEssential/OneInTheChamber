<?php

/*

  _____           _        _   ______                    _   _       _ 
 |  __ \         | |      | | |  ____|                  | | (_)     | |
 | |__) |__   ___| | _____| |_| |__   ___ ___  ___ _ __ | |_ _  __ _| |
 |  ___/ _ \ / __| |/ / _ \ __|  __| / __/ __|/ _ \ '_ \| __| |/ _` | |
 | |  | (_) | (__|   <  __/ |_| |____\__ \__ \  __/ | | | |_| | (_| | |
 |_|   \___/ \___|_|\_\___|\__|______|___/___/\___|_| |_|\__|_|\__,_|_|
*                                                                       
* You are free to use this, you may now MODIFY nor claim it as your own.  Without  permission.
* Copyright: 2016 @PocketEssential
* 
* GitHub.com/PocketEssential
*
namespace PocketEssential\OITQ;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\{Command,CommandSender};
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;
use pocketmine\level\Position;
use pocketmine\event\player\{PlayerJoinEvent;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("OITQ Has been loaded");
	}
