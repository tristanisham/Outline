<?php

namespace Outline\Prelude;

class Init
{

    public static function start()
    {
        global $argv;
        global $argc;

        match ($argv[1]) {
            'new', 'n' => Init::new(),
            'make', 'm' => Init::make(),
            '--help', 'help', 'h' => Init::help(),
            default => die("Unsupported argument. \n Try `--help`.")
        };
    }

    public static function help(): void
    {
        $help = [];
    }

    public static function new(): void
    {
    }

    public static function make(): void
    {
        # code...
    }
}
