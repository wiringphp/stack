# Wiring::Stack

A middleware stack in the style of Rack.

## Simple Stack

  $stack = new \Wiring\Stack;
  $stack->push(function($app) { $app->output = 'Hello World'; });
  $stack->push(function($app) { echo $app->output; });

  \Wiring\Stack::run($stack, new stdClass);
