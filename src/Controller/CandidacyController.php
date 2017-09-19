<?php



namespace Controller;

class CandidacyController extends ControllerAbstract {
    public function candidacyAction($postId = null) {
        
        $opportunity = $this->app['opportunity.repository']->find($postId);
      
        return $this->render(
                'candidacy/candidacy.html.twig',
                [
                   'opportunity' => $opportunity 
                ]
        );
    }
  
}
