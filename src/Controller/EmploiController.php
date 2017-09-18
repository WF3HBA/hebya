<?php



namespace Controller;


class EmploiController extends ControllerAbstract {
   
    public function emploiAction() {
      
        return $this->render(
                'emploi/emploi.html.twig'
        );
    }
}
