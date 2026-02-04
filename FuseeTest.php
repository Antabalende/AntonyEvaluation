<?php

use PHPUnit\Framework\TestCase;

use Eleves\ProjetNasa\src\Fusee;


class FuseeTest extends TestCase{

    public function testEtatInitial()
    {
        $fusee = new Fusee("Ariane");

        $this->assertEquals("Ariane", $fusee->getNom());
        $this->assertEmpty($fusee->getEquipage());
    }

   
    public function testErreurCarburant()
    {
        $fusee = new Fusee("Ariane");

        $this->expectException(\Exception::class);

        $fusee->ajouterCarburant(-10);
    }

   
    public function testEquipage()
    {
       
    $fusee = new Fusee("Ariane");

    $fusee->embarquerAstronaute("Thomas");

    $this->assertContains("Thomas", $fusee->getEquipage());


    }

    public function fournisseurPortee(): array

    {

    return [
        [0, 0],
        [100, 250],
        [1000, 2500],
    ];
   }

     /**
    * @dataProvider fournisseurPortee
    */
    public function testCalculPortee($litres, $attendu)
     {
        $fusee = new Fusee("Ariane");

         $this->assertEquals($attendu, $fusee->calculerPortee($litres));
     }



   }

   





    















?>