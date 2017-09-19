<?php



namespace Controller;


class OpportunityController extends ControllerAbstract {
   
    public function opportunityAction() {
        $countries = $this->app['country.repository']->findAll();
        $opportunities = $this->app['opportunity.repository']->findAll();
      
        return $this->render(
                'opportunity/opportunity.html.twig',
                [
                    'countries' => $countries,
                    'opportunities' => $opportunities
                ]
        );
    }
}
