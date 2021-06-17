<?php 

namespace Outline\Cli;
define("ARGS", $argv);
require_once 'traits.php';

use Outline\{Exceptions, Std};

class Cmd {
    use Exceptions, Std;
    public static function start(): void {

        if (isset(ARGS[1]) && !empty(ARGS[1])) {
            match (ARGS[1]) {
                "build" => self::build(),
                default => self::interactiveShell()
            };
        } else {
            self::interactiveShell();
        }
        

    }

    private static function interactiveShell()
    {
        die("made it to the end");
    }

    protected static function build() {
        if (array_key_exists(2, ARGS)) {
            Std::println(ARGS[2]);
            if (mkdir(ARGS[2], recursive: true)) {
                
            }
        }
    }

    private static function furnish() {

    }
}