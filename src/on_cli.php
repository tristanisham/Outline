<?php 

namespace Outline\Cli;
define("ARGS", $argv);
require_once 'traits.php';

use Outline\{Exceptions, Std};

class Cmd {
    use Exceptions, Std;
    public static function start(): void {

        Std::println("Outline - v0.0.1 |#######################:");
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
            if (ARGS[2] !== ".") {

            } else {
                match (mkdir(ARGS[2], recursive: true)) {
                    true => self::furnish(),
                    false => throw new \Exception("")
                };
            }
        } else {
            throw new \Exception("Target directory not provided after build command.");
        }
    }

    private static function furnish() {

    }
}