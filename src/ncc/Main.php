<?php

namespace ncc;

use pocketmine\plugin\PluginBase;

use pocketmine\command\{Command,CommandSender, CommandExecutor, ConsoleCommandSender};

use pocketmine\event\Listener;

use jojoe77777\FormAPI;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\item\Item;

use pocketmine\inventory\Inventory;

class Main extends PluginBase implements Listener {

    

    public function onEnable(){

        $this->getServer()->getPluginManager()->registerEvents($this, $this);

		$this->point = $this->getServer()->getPluginManager()->getPlugin("PointAPI");    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args):bool

    {

        switch($cmd->getName()){

        case "§l§l":

        if(!($sender instanceof Player)){

        $sender->sendMessage("§cDont use here");

		return true;

		}

		$this->sendMainForm($sender);

		return true;

		}

	}

	public function sendMainForm($sender){

		$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");

        $form = $api->createSimpleForm(function (Player $sender, $data){

            $result = $data;

            if ($result == null) {

            }

            switch ($result) {

                    case 0:

                    $this->polarUI($sender);

                    break;

                    case 1:

                    $this->dogUI($sender);

                    break;

					case 2:

					$this->vexUI($sender);

					break;

					case 3:

					$this->skeletonUI($sender);

					break;

					case 4:

					$this->chickenUI($sender);

					break;

					case 5:

					$this->sheepUI($sender);

					break;

					case 6:

					$this->enderdragonUI($sender);

					break;

			}

        });

     $money = $this->getServer()->getPluginManager()->getPlugin("PointAPI")->myPoint($sender);

      $form->setTitle("§l§cPetShop");

      $form->setContent("§l§c↣§e Your Point:§f §e$".$coins);

      $form->addButton("§l§f•§9 Polar Bear§a ↣§6 300 Point§f •");

      $form->addButton("§l§f•§9 Wolf§a ↣§6 300 Point§f •");

	  $form->addButton("§l§f•§9 Vex§a ↣§6 300 Point§f •");

	  $form->addButton("§l§f•§9 Skeleton§a ↣§6 300 Point§f •");

	  $form->addButton("§l§f•§9 Chicken§a ↣§6 300 Point§f •");

	  $form->addButton("§l§f•§9 Sheep§a ↣§6 300 Point§f •");

      $form->sendToPlayer($sender);

	}

        public function polarUI($sender){

        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");

        $form = $api->createSimpleForm(function (Player $sender, $data){

            $result = $data;

            if ($result == null) {

            }

            switch ($result) {

			case 0:

			break;

            case 1:

            $p = $sender->getName();

            $coins = $this->point->myPoint($sender);

            if($coins >= 300){

            $this->point->reducePoint($sender, 300);

			$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "setuperm ".$sender->getName()." blockpets.command.togglepet");

$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "setuperm ".$sender->getName()." blockpets.command.changepetname.use");

$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "spawnpet polarbear Gấu 0.5 baby ".$sender->getName());

            $this->getServer()->broadcastMessage("§l§cPet§r ↣§a Người chơi $p đã mua §l§9Polar Bear Pet");

            return true;

            }else{

            $sender->sendMessage("§l§cPetShop§e •>§c Bạn không có đủ Point.");

            }

            }

        });

        $form->setTitle("§l§cPolarBear");

		$form->setContent("§r§e•§c Pet:§l§9 Polar Bear§r§c ( 300 )§e •");

        $form->addButton("§l§f•§c EXIT§f •", 0);

        $form->addButton("§l§f•§c BUY§f •", 1);

        $form->sendToPlayer($sender);

    }

	public function dogUI($sender){

        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");

        $form = $api->createSimpleForm(function (Player $sender, $data){

            $result = $data;

            if ($result == null) {

            }

            switch ($result) {

			case 0:

			break;

            case 1:

            $p = $sender->getName();

            $coins = $this->point->myPoint($sender);

            if($coins >= 300){

            $this->point->reducePoint($sender, 300);

			$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "setuperm ".$sender->getName()." blockpets.command.togglepet");

$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "setuperm ".$sender->getName()." blockpets.command.changepetname.use");

$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "spawnpet wolf Chó 0.5 baby ".$sender->getName());

            $this->getServer()->broadcastMessage("§l§cPet§r ↣§a Người chơi $p đã mua §l§9Wolf Pet");

            return true;

            }else{

            $sender->sendMessage("§l§cPetShop§e •>§c Bạn không có đủ Point.");

            }

            }

        });

        $form->setTitle("§l§cWolf");

		$form->setContent("§r§e•§c Pet:§l§9 Wolf§r§c ( 300 )§e •");

        $form->addButton("§l§f•§c EXIT§f •", 0);

        $form->addButton("§l§f•§c BUY§f •", 1);

        $form->sendToPlayer($sender);

	}

	public function vexUI($sender){

        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");

        $form = $api->createSimpleForm(function (Player $sender, $data){

            $result = $data;

            if ($result == null) {

            }

            switch ($result) {

			case 0:

			break;

            case 1:

            $p = $sender->getName();

            $coins = $this->point->myPoint($sender);

            if($coins >= 300){

            $this->point->reducePoint($sender, 300);

			$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "setuperm ".$sender->getName()." blockpets.command.togglepet");

$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "setuperm ".$sender->getName()." blockpets.command.changepetname.use");

$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "spawnpet vex Vex 0.5 baby ".$sender->getName());

            $this->getServer()->broadcastMessage("§l§cPet§r ↣§a Người chơi $p đã mua §l§9Vex Pet");

            return true;

            }else{

            $sender->sendMessage("§l§cPetShop§e •>§c Bạn không có đủ Point.");

            }

            }

        });

        $form->setTitle("§l§cRabbit");

		$form->setContent("§r§e•§c Pet:§l§9 Vex§r§c ( 300 )§e •");

        $form->addButton("§l§f•§c EXIT§f •", 0);

        $form->addButton("§l§f•§c BUY§f •", 1);

        $form->sendToPlayer($sender);

	}

	public function skeletonUI($sender){

        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");

        $form = $api->createSimpleForm(function (Player $sender, $data){

            $result = $data;

            if ($result == null) {

            }

            switch ($result) {

			case 0:

			break;

            case 1:

            $p = $sender->getName();

            $coins = $this->point->myPoint($sender);

            if($coins >= 300){

            $this->point->reducePoint($sender, 300);

			$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "setuperm ".$sender->getName()." blockpets.command.togglepet");

$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "setuperm ".$sender->getName()." blockpets.command.changepetname.use");

$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "spawnpet skeleton Xương 0.5 baby ".$sender->getName());

            $this->getServer()->broadcastMessage("§l§cPet§r ↣§a Người chơi $p đã mua §l§9Skeleton Pet");

            return true;

            }else{

            $sender->sendMessage("§l§cPetShop§e •>§c Bạn không có đủ Point.");

            }

            }

        });

        $form->setTitle("§l§cSlime");

		$form->setContent("§r§e•§c Pet:§l§9 Slime§r§c ( 300 )§e •");

        $form->addButton("§l§f•§c EXIT§f •", 0);

        $form->addButton("§l§f•§c BUY§f •", 1);

        $form->sendToPlayer($sender);

	}

	public function chickenUI($sender){

        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");

        $form = $api->createSimpleForm(function (Player $sender, $data){

            $result = $data;

            if ($result == null) {

            }

            switch ($result) {

			case 0:

			break;

            case 1:

            $p = $sender->getName();

            $coins = $this->point->myPoint($sender);

            if($coins >= 300){

            $this->point->reducePoint($sender, 300);

			$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "setuperm ".$sender->getName()." blockpets.command.togglepet");

$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "setuperm ".$sender->getName()." blockpets.command.changepetname.use");

$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "spawnpet chicken Gà 0.5 baby ".$sender->getName());

            $this->getServer()->broadcastMessage("§l§cPet§r ↣§a Người chơi $p đã mua §l§9Chicken Pet");

            return true;

            }else{

            $sender->sendMessage("§l§cPetShop§e •>§c Bạn không có đủ Point.");

            }

            }

        });

        $form->setTitle("§l§cChicken");

		$form->setContent("§r§e•§c Pet:§l§9 Chicken§r§c ( 300 )§e •");

        $form->addButton("§l§f•§c EXIT§f •", 0);

        $form->addButton("§l§f•§c BUY§f •", 1);

        $form->sendToPlayer($sender);

	}

	public function sheepUI($sender){

        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");

        $form = $api->createSimpleForm(function (Player $sender, $data){

            $result = $data;

            if ($result == null) {

            }

            switch ($result) {

			case 0:

			break;

            case 1:

            $p = $sender->getName();

            $coins = $this->point->myPoint($sender);

            if($coins >= 300){

            $this->point->reducePoint($sender, 300);

			$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "setuperm ".$sender->getName()." blockpets.command.togglepet");

$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "setuperm ".$sender->getName()." blockpets.command.changepetname.use");

$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "spawnpet sheep Sheep 0.5 baby ".$sender->getName());

            $this->getServer()->broadcastMessage("§l§cPet§r ↣§a Người chơi $p đã mua §l§9Sheep Pet");

            return true;

            }else{

            $sender->sendMessage("§l§cPetShop§e •>§c Bạn không có đủ Point.");

            }

            }

        });

        $form->setTitle("§l§cSheep");

		$form->setContent("§r§e•§c Pet:§l§9 Sheep§r§c ( 300 )§e •");

        $form->addButton("§l§f•§c EXIT§f •", 0);

        $form->addButton("§l§f•§c BUY§f •", 1);

        $form->sendToPlayer($sender);

	}

	public function nomoneyUI($sender){

        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");

        $form = $api->createSimpleForm(function (Player $sender, $data){

            $result = $data;

            if ($result == null) {

            }

            switch ($result) {

			case 0:

			$this->sendMainForm($sender);

			break;

			case 1:

			break;

			}

		});

		$form->setTitle("§6PShop");

		$form->setContent("§cYou Don't Have Point To Buy This Pet");

		$form->addButton("§aBack to PetShop", 0);

		$form->addButton("§cQUIT", 1);

	}

}

			

		
