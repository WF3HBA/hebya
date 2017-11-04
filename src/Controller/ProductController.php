<?php

namespace Controller;

use Controller\ControllerAbstract;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProductController extends ControllerAbstract {

  public function productAction() {

    $countries = $this->app['country.repository']->countryHasProduct();
    $products = $this->app['product.repository']->findPublic();
    $fields = $this->app['product.repository']->findField();

    if (!empty($_GET['product'])) {
      $idproduct = $_GET['product'];
    } else {
      $idproduct = "";
    }

    return $this->render(
      'public/product.html.twig', [
        'countries' => $countries,
        'products' => $products,
        'fields' => $fields,
        'idproduct' => $idproduct
      ]
    );
  }

  public function productIdAction($id = null) {

    $country = $this->app['country.repository']->find($id);

    $product = $this->app['product.repository']->find($id);

    return $this->render(
                    'public/productId.html.twig', [
                'country' => $country,
                'product' => $product
                    ]
    );
  }

  public function countrySelect() {

    $products = $this->app['product.repository']->findByCountryAndField($_GET['idcountry'], $_GET['field']);

    return $this->render(
                    'public/productList.html.twig', [
                'products' => $products
                    ]
    );
  }

}
