<?php


class Payload {
    public static $values = Array();

    public function render() {
        return json_encode(self::$values);
        
    }
}

?>