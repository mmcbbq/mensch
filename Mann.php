<?php
include 'Mensch.php';
include 'Frau.php';
class Mann extends Mensch
{

    public function rasieren()
    {
        echo'rasiert';
  }

}

$menschm = new Mann("Bob",'Bobson', 'maennlich');
$menschm->sichVorstellen();
$menschm->rasieren();
$menschw = new Frau("Alice",'Aliceson','weiblich');

//$nureinMensch = new Mensch('ttest','sdl;gf','gelsch');
$menschw->sichVorstellen();
$menschw->kinderKriegen();