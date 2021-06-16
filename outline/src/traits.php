<?php

namespace Outline;

trait Exceptions {
    /**
     * @param string $w String to write to standard output.
     */
    public function help($w) {
        fwrite(STDOUT, $w);
    }
}

trait Std {
    public static function println(string $w) {
        fwrite(STDOUT, $w."\n");
    }
}