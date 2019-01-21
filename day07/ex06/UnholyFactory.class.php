<?php

class UnholyFactory
{
    private $person = array();
    public function absorb($s)
    {
        if (get_parent_class($s) == 'Fighter') {
            if (isset($this->person[$s->getName()])) {
                print("(Factory already absorbed a fighter of type ".$s->getName().")".PHP_EOL);
            } else {
                print("(Factory absorbed a fighter of type ".$s->getName().")".PHP_EOL);
                $this->person[$s->getName()] = $s;
            }
        } else {
            print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
        }
    }
    public function fabricate($s)
    {
        if (array_key_exists($s, $this->person)) {
            print("(Factory fabricates a fighter of type ".$s.")".PHP_EOL);
            return (clone $this->person[$s]);
        }
        print("(Factory hasn't absorbed any fighter of type ".$s .")".PHP_EOL);
        return null;
    }
}
 ?>
