# PHP Base Singleton

## Example class
~~~
<?php
use ctur\base\Singleton;

class Service extends Singleton {}
~~~
Use:
~~~
var_dump(Service::factory(['a' => 1, 'b' => 2]));die;
~~~
Result:
~~~
object(Service)[57]
  public 'a' => int 1
  public 'b' => int 2
~~~
Enjoy, guys!
