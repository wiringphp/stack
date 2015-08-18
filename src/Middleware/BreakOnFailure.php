<?php
namespace Wiring\Stack\Middleware;
/**
 *
 */
class BreakOnFailure implements Wiring\Stack\Interface\Middleware {

    $this->conditional;

    public function __construct(callable $conditional) {
        $this->conditional = $conditional;
    }

    public function resolve($stack, $app) {
        if(!call_user_func($this->conditional, $stack, $app)) {
            throw new \Wiring\Stack\Exception\FailedCheck;
        }
    }
}
