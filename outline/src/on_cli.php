<?php

namespace Outline\Cli;

define("ARGS", $argv);
require_once 'traits.php';

use Outline\{Exceptions, Std};

use function PHPSTORM_META\type;

class Cmd
{
    use Exceptions, Std;
    public static function start(): void
    {

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

    protected static function build()
    {
        if (array_key_exists(2, ARGS)) {
            if (mkdir(ARGS[2], recursive: true)) {
                Std::println("Build directory created:" . ARGS[2]);
                $path = ARGS[2] . '/';
                $structure = [
                    $path . "src" => "dir",
                    $path . "src/components" => "dir",
                    $path . "src/pages" => "dir",
                    $path . "public" => "dir",
                    $path . "seed.json" => "file"
                ];

                foreach ($structure as $k => $v) {
                    match ($v) {
                        "dir" => mkdir($k, recursive: true),
                        "file" => file_put_contents(
                            $k,
                            json_encode([
                                "type" => "html5",
                                "title" => "My Outline",
                                "description" => "",
                                "authors" => ["first name" => "", "last name" => "", "email" => "", "link" => ""],
                                "vars" => ["version" => "0.0.1"],
                            ], JSON_PRETTY_PRINT)
                        ),
                    };
                }
            }
        }
    }

    private static function furnish()
    {
    }
}
