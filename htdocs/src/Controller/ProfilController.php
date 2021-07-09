<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GambleRepository;
use App\Entity\Gamble;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="Profil")
     */
    public function profil(GambleRepository $gambleRepository){
        $gambles = $gambleRepository->findBy(['idUser' => $this->getUser()->getId()]);
        $list = file_get_contents('http://mathys-pomier.fr:4000/euro');
        $list = json_decode($list, true);

        $point = 0;

        foreach ( $list as $l ){
            foreach ($gambles as $g){
                if(isset($l['scores'])) {
                    if ($l['scores']['tireaubut'] == true) {
                        $winner = $g->getScoreDomicile() > $g->getScoreExterieur() ? "domicile" : "exterieur";
                        if ($l['scores']['winner'] == $winner) {
                            $point += 1;
                        }
                    } else {
                        $winner = $g->getScoreDomicile() > $g->getScoreExterieur() ? "domicile" : "exterieur";
                        $winner2 = $l['scores']['domicile'] > $l['scores']['exterieur'] ? "domicile" : "exterieur";
                        if ($g->getScoreDomicile() == $l['scores']['domicile'] && $g->getScoreExterieur() == $l['scores']['exterieur']) {
                            $point += 3;
                        } elseif ($winner == $winner2) {
                            $point = 1;
                        }
                    }
                }

            }
        }

        return $this->render('Profil/profil.html.twig', ['gambles' => $gambles, 'point' => $point, 'matchs' => $list]);

    }
}