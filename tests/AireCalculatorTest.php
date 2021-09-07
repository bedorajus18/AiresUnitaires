<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Utils\AireCalculator;

class AireCalculatorTest extends TestCase
{
    /** @test */
    public function testSomething(): void
    {
        $this->assertTrue(true);
    }
    /**@test */
    public function test_calcul_surface_tri():void
    {
        $aireCalculator  = new AireCalculator();
        $longueur=5;
        $hauteur =4;
        $resultat = $aireCalculator->getAireTriangle($longueur,$hauteur);
        $this->assertEquals(10,$resultat);
    }
/**@test */
public function test_calcul_surface_tri_neg():void
{
    $this->expectException(\InvalidArgumentException::class);
    $aireCalculator  = new AireCalculator();
    $longueur=-5;
    $hauteur =4;
    $resultat = $aireCalculator->getAireTriangle($longueur,$hauteur);
}
    
   /** @test */
    public function test_calc_aire_parallelogramme():void
    {
        $aireCalculator  = new AireCalculator();
        $pLongueurBase=6;
        $pHauteur=5; 
        $resultat = $aireCalculator->getAireParallelogramme($pLongueurBase,$pHauteur);
        $this->assertEquals(30,$resultat);
    }
    /**@test */
    public function test_calcul_surface_parallelogramme_neg():void
    {
    $this->expectException(\InvalidArgumentException::class);
    $aireCalculator  = new AireCalculator();
    $longueurBase=6;
    $hauteur=-5;
    $resultat = $aireCalculator->getAireParallelogramme($longueurBase,$hauteur);

    }
    /**@test */
    public function test_calcul_surface_parallelogramme_exp():void
    {
    $this->expectException(\InvalidArgumentException::class);
    $aireCalculator  = new AireCalculator();
    $longueurBase=-6;
    $hauteur=-5;
    $resultat = $aireCalculator->getAireParallelogramme($longueurBase,$hauteur);

    }
    /*calcul surface disque */
    public function test_calcul_surface_disque_neg():void
    {
    $this->expectException(\InvalidArgumentException::class);
    $aireCalculator  = new AireCalculator();
    $pRayon=-10;
    $resultat = $aireCalculator->getAireDisque(Pi(),$pRayon);
    }
}
