<?php

class Tyrion extends Lannister
{
  public function sleepWith($value)
  {
    if ($value instanceof Jaime) {
      print( "Not even if I'm drunk !" . PHP_EOL);
    }
    if ($value instanceof Cersei) {
      print( "Not even if I'm drunk !" . PHP_EOL);
    }
    if ($value instanceof Sansa) {
      print( "Let's do this." . PHP_EOL);
    }
  }
}

 ?>
