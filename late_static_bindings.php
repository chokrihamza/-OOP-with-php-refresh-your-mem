<?php
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        //self::who();
        static::who();
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();