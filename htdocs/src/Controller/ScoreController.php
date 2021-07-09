<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Gamble;

class ScoreController extends AbstractController
{
    /**
     * @Route("/score", name="score")
     */
    public function Score (){
        $list = file_get_contents('http://mathys-pomier.fr:4000/euro');
        $list = json_decode($list, true);

        return $this->render('Score/match.html.twig', ['matchs' => $list]);
    }

    /**
     * @Route("/create_gamble", name="create_gamble", methods={"POST"})
     */
    public function create_gamble(){
        $manager = $this->getDoctrine()->getManager();

        $gamble = new Gamble();

        $gamble->setIdUser($this->getUser()->getId());
        $gamble->setIdScore($_POST['id_score']);
        $gamble->setScoreDomicile($_POST['score_domicile']);
        $gamble->setScoreExterieur($_POST['score_exterieur']);

        $manager->persist($gamble);
        $manager->flush();

        return $this->redirectToRoute("score");

    }
}