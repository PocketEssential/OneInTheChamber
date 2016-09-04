<?php

/**
 * AutoUpdater
 */
namespace PocketEssential\OITQ;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
class AutoUpdater implements Listener {

	protected $plugin;

	public function __construct(Main $plugin) {
		$this->plugin = $plugin;
		$plugin->getServer()->getPluginManager()->registerEvents($this, $plugin);
	}

	public function getPlugin() {
		return $this->plugin;
	}
	public function autoUpdater(){
	
	$verion = file_get_contents("http://raw.githubusercontent.com/PocketEssential/OneInTheChamber/master/version.vh");
	if($version != "1.0.0"){
	// Todo
	   }
}
