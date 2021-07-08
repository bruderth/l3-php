<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductFormType;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    /**
     * @Route("/catalog", name="catalog")
     */
    public function view(ProductRepository $productRepository, Request $request)
    {
        $listProducts = $productRepository->findAll();
        $productByID = $productRepository->findOneBy(['id' => 1]);

        $product = new Product();

        $form = $this->createForm(ProductFormType::class, $product);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $product = $form->getData();
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($product);
            $manager->flush();
        }

        return $this->render('/catalog/catalog.html.twig',
            [
                'listProducts'  => $listProducts,
                'productID'     => $productByID,
                'form'          => $form->createView(),
            ]
        );
    }
}