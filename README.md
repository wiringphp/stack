# Wiring::Stack

A middleware stack in the style of Rack.

## Simple Stack

```php
  $stack = new \Wiring\Stack;
  $stack->push(function($stack, $app) { $app->output = 'Hello World'; });
  $stack->push(function($stack, $app) { echo $app->output; });

  \Wiring\Stack::run($stack, new stdClass);
```

## Some Conditionals


```php
  $stack = new \Wiring\Stack;
  $stack->push(new \Wiring\Stack\Middleware\BreakOnFailure(function($stack, $app) { return false; });
  $stack->push(function($app) { echo 'Shouldn't run!'; });

  \Wiring\Stack::run($stack, new stdClass);
```
