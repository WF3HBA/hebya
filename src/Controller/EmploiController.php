<?php



namespace Controller;


class EmploiController extends ControllerAbstract {
   
    public function emploiAction() {
        $countries = $this->app['country.repository']->findAll();
      
        return $this->render(
                'emploi/emploi.html.twig',
                [
                    'countries' => $countries
                ]
        );
    }
}
