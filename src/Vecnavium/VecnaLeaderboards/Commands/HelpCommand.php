<?php


/**
 * Copyright (c) 2021 Vecnavium
 * VecnaLeaderboards is licensed under the GNU Lesser General Public License v3.0
 * GitHub: https://github.com/Vecnavium\VecnaLeaderboards
 */

declare(strict_types=1);
namespace Vecnavium\VecnaLeaderboards\Commands;

use pocketmine\command\CommandSender;
use pocketmine\plugin\{Plugin, PluginOwned, PluginOwnedTrait};
use pocketmine\command\defaults\VanillaCommand;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat as C;
use Vecnavium\VecnaLeaderboards\Main;

class HelpCommand extends VanillaCommand implements PluginOwned
{
    use PluginOwnedTrait;

    /** @var Main */
    private Main $plugin;

    public function __construct(Main $plugin)
    {
        parent::__construct("lbhelp", "VencaLeaderboards help command", "/lbhelp");
        $this->owningPlugin = $plugin;
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): bool
    {
        if (!isset($args[0])) {
            $sender->sendMessage($this->owningPlugin->getMessage("helpcmd.helptitle"));
            $sender->sendMessage($this->owningPlugin->getMessage("helpcmd.lbmanage"));
            $sender->sendMessage($this->owningPlugin->getMessage("helpcmd.lbversion"));
        }
        return true;
    }


}
