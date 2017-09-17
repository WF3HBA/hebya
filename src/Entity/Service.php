<?php

namespace Entity;

class Service {
    
    private $idService;
    
    private $target;
    
    private $content;
    
    /****** G E T T E R ******/
    
    public function getIdService() {
        return $this->idService;
    }
    
    public function getTarget() {
        return $this->target;
    }

    public function getContent() {
        return $this->content;
    }
    
    
    /****** S E T T E R ******/
    
    public function setIdService($idService) {
        $this->idService = $idService;
        return $this;
    }
    
    public function setTarget($target) {
        $this->target = $target;
        return $this;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

}
