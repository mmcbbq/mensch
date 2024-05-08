<?php

class Frau extends Mensch

{

    public function __construct(string $fname, string $lname, int $alter)
    {
        parent::__construct($fname, $lname, 'weiblich', $alter);
    }

    public function sagdeinAlter()
    {
        echo "Man frag nicht danach";
    }

    public function kinderKriegen()
    {
        echo 'ein neues Kind';
    }
    public function hoefflichVorstellen()
    {
        echo 'Ich bin die Frau '.$this->getLname();
    }

}




