<?php

namespace Controller;

class InnovatorController extends ControllerAbstract {
    
    public function innovatorAction() {
    
        $countries = $this->app['country.repository']->findAll();

        return $this->render(
                'innovator/innovator.html.twig',
                [
                    'countries' => $countries
                ]
        );
    }
}
