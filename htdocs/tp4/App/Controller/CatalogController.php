<?php


namespace App\Controller;


class CatalogController extends AbstractController
{

    public function view()
    {
        $list_product = ["view catalog"];
        echo $this->render('catalog/view.phtml', ['products' => $list_product]);
    }
}