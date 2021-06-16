<?php

namespace Outline;

require_once 'traits.php';
require_once 'on_cli.php';

use Outline\Cli\Cmd;

/**
 * Generates a web book.
 * @package Outline
 * @author Tristan Isham
 */
class Publish
{
    use Exceptions;

    /**
     * @param bool $cli Used to run the CLI version of Outline. Set to **true** and run your file from command line like any other cli program.
     * @param string $drafts Optional source directory for web book components. Defaults to *current directory*.
     * @param string $results Optional destination directory for generated web book. Defaults to *current directory/results*.
     */
    public function __construct(public bool $cli = false, public string $drafts = "./", public string $results = "./results/")
    {
        match ($this->cli) {
            true => Cmd::start(),
        };
    }
}
