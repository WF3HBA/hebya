<?php

namespace Controller;

class OpportunityController extends ControllerAbstract {
   
    public function opportunityAction() {
        $countries = $this->app['country.repository']->findAll();
        $opportunities = $this->app['opportunity.repository']->findAll();
      
        return $this->render(
                'public/opportunity.html.twig',
                [
                    'countries' => $countries,
                    'opportunities' => $opportunities
                ]
        );
    }
    
     public function jobSelect(){

         $opportunities = $this->app['opportunity.repository']->findBySelector($_GET['field'], $_GET['idcountry'], $_GET['contrat_type']);
         
         return $this->render(
            'public/opportunityList.html.twig',
             [
                 'opportunities' => $opportunities
             ]
        );
         
    }

    
}
