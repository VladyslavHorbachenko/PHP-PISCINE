<?php


class NightsWatch implements IFighter
{
  private $person = array();

        public function recruit($value)
        {
            $this->person[] = $value;
        }
        function fight()
        {
          foreach ($this->person as $p){
          if (method_exists($p, 'fight'))
            print($p->fight());
          }
        }
}


 ?>
