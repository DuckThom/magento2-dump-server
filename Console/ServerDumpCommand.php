<?php

declare(strict_types=1);

namespace Wiringa\DumpServer\Console;

use Symfony\Component\VarDumper\Command\ServerDumpCommand as SymfonyServerDumpCommand;

/**
 * Server dump command.
 *
 * @package     Wiringa\DumpServer
 * @author      Thomas Wiringa  <thomas.wiringa@gmail.com>
 */
class ServerDumpCommand extends SymfonyServerDumpCommand
{
    /**
     * Return the default name.
     *
     * @return string|null
     */
    public static function getDefaultName(): ?string
    {
        return static::$defaultName;
    }
}
