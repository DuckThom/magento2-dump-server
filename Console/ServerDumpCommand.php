<?php declare(strict_types=1);

namespace Wiringa\DumpServer\Console;

/**
 * Server dump command.
 *
 * @package     Wiringa\DumpServer
 * @author      Thomas Wiringa  <thomas.wiringa@gmail.com>
 */
class ServerDumpCommand extends \Symfony\Component\VarDumper\Command\ServerDumpCommand
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
