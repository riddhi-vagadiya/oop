<?php
class Test {
    const MESSAGE = "Hyyy shiya";

    public static function msg() {
        echo self::MESSAGE;
    }
}

Test::msg();  
?>
