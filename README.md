# OneInTheChamber

Deathmatch plugin where you can instantly kill player with one shot. If you kill player you will have one more arrow. Very intersting bow game! Now for PocketMine servers / forks :)   (OneInTheChamber or One In The Quiver)
 
# Features:

- [x] Very Customizable!
- [x] Permission support
- [x] Spawn somewhere random, after being hit
- [x] Map voting
- [x] Kits!
- [x] Kits Customization!
- [x] Join Signs!
- [x] Unique API Feature!
- And so on......

# Commands:

- /oitc setlobby (Sets the lobby on which players will get teleported to after match is over)
- /oitc create <ArenaName> <PlayerSlot>
- /oitc delete <AreneName>
- /oitc setspawn <ArenaName> <Number>
- /oitc (Main command, sends a list of commands ect)
 
# Permissions:
- oitc.event.join.<ArenaName> (Access to the arena permission only)
- oitc.event.join.*  (Access to join all arenas)
- oitc.admin (Allow access to all commmands)
 
# API
We have a simple API, that allows developers to customized things more, and check for arena status ect. 

* Before you continue,
 Make sure you add this onEnable method <br />
`$this->oitq = $this->getServer()->getPluginManager()->getPlugin("OneInTheChamber");`

* Getting if a player is in a arena
   - $this->oitq->playerStatus($player); 
   - - Returns "Yes" if they are in an arena and "No" if not
   
* Getting player tokens
   - $this->oitq->checkToken($player); 
   - - Returns the player token amount
   
* Add tokens to the player
   - $this->oitq->addToken($player, $token); 
   - - Varible $token is the amount you are adding
 
We're working hard to useful API features! If you have any suggestions. Please "do" let us know!
 
# Authors:
- [KairusDarkSeeker](https://github.com/KairusDarkSeeker)
- [xZeroMCPE](https://github.com/xZeroMCPE)
