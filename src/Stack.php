<?php
namespace Wiring;
/**
 * Wiring::Stack
 */
class Stack {

    private $stack = array();
    private $position = 0;

    public function push(callable $callable) {
        $this->stack[] = $callable;
    }

    public function __construct() {
        $this->position = 0;
    }

    function rewind() {
        $this->position = 0;
    }

    function current() {
        return $this->stack[$this->position];
    }

    function key() {
        return $this->position;
    }

    function next() {
        ++$this->position;
    }

    function valid() {
        return isset($this->array[$this->position]);
    }

    /**
     * Resolve Stack with App
     *
     * @param  object $stack Stack Object/Iterable
     * @param  mixed  $app   Argument to run the Stack against
     */
    public static function resolve($stack, $app) {
        foreach($stack as $item) {
            call_user_func($stack, $app);
        }
    }
}
