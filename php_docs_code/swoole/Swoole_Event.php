<?php
class Swoole\Event {
    static public function add($fd, $read_callback, $write_callback = null, $events = null) {}    
    static public function del($fd) {}    
    static public function set($fd, $read_callback = null, $write_callback = null, $events = null) {}    
    static public function exit() {}    
    static public function write($fd, $data) {}    
    static public function wait() {}    
    static public function defer($callback) {}    
}
