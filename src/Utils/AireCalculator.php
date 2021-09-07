<?php
namespace App\Utils;

class AireCalculator
{
    /*calcul surface triangle */
    function getAireTriangle($pBase,$pHauteur):float
    {
        if (($pBase <=0 ) || ($pHauteur <=0))
        throw 
            new \InvalidArgumentException('La fonction getAireTriangle attend des longueurs de la base strictement positives: pLongueurCote:'.
                $pBase.',pHauteur:'.$pHauteur);
        return $pBase*$pHauteur/2;
    }
    /*calcul surface parallèlogramme */
    function getAireParallelogramme($pLongueurBase,$pHauteur):float
    {
        if (($pLongueurBase <=0 ) || ($pHauteur <=0))
        throw 
            new \InvalidArgumentException('La fonction getAireTriangle attend des longueurs strictement positives: pLongueurCote:'.
                $pLongueurBase.',pHauteur:'.$pHauteur);
        return $pLongueurBase*$pHauteur;
    }

    /*calcul surface disque */
    function getAireDisque($pPi,$pRayon):float
    {
        if ($pRayon <=0)
        throw 
            new \InvalidArgumentException('Le rayon doit être positif'.$pRayon);
        return Pi()*$pRayon*$pRayon;
    }
}