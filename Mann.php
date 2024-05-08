<?php
include 'Mensch.php';
include 'Frau.php';
class Mann extends Mensch
{

    public function __construct(string $fname, string $lname, int $alter)
    {
        parent::__construct($fname, $lname, 'maennlich', $alter);
    }


    public function rasieren()
    {
        echo'rasiert';
  }

    public function hoefflichVorstellen()
    {
        echo 'Ich bin der Herr '.$this->getLname();
    }
}

$mann = new Mann("Bob",'Bobson',30);
//$mann->sichVorstellen();
//$mann->rasieren();
$frau = new Frau("Alice",'Aliceson',40);

//$nureinMensch = new Mensch('ttest','sdl;gf','gelsch');
//$frau->sichVorstellen();
//$frau->kinderKriegen();

echo $mann->getGeschlecht();
echo $frau->getGeschlecht();