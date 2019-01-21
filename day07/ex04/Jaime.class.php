<?php


class Jaime extends Lannister
{
  public function sleepWith($value)
  {
    if ($value instanceof Tyrion) {
      print("Not even if I'm drunk !" . PHP_EOL);
    }
    if ($value instanceof Cersei) {
      print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
    }
    if ($value instanceof Sansa) {
      print("Let's do this." . PHP_EOL);
    }
  }
}

 ?>
