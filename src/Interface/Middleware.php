<?php
namespace Wiring\Stack\Interface;
/**
 * Check
 */
interface Middleware extends  {

    public function resolve($stack, $app);
}
