<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GambleRepository;
use App\Repository\UserRepository;

class ClassmentController extends AbstractController
{
    /**
     * @Route("/classment", name="classment")
     */
    public function classment(GambleRepository $gambleRepository, UserRepository $userRepository){
        $users = $userRepository->findAll();
        $list = file_get_contents('http://mathys-pomier.fr:4000/euro');
        $list = json_decode($list, true);
        $compteurId = 0;

        $arr = array();

        foreach ($users as $user){
            $point = 0;
            $gambles = $gambleRepository->findBy(['idUser' => $user->getId()]);
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
            $arr[$compteurId] = $point;
            $compteurId += 1;
        }
        //Cette function trie mon tableau par ordre croissant.
        asort($arr);
        return $this->render('classment/classment.html.twig', ['users' => $users , "order" => $arr]);

    }
}