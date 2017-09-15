<?php

namespace Entity;

class Service {
    
    private $idService;
    
    private $idLanguage;
    
    private $target;
    
    private $header;
    
    private $content;
    
    /****** G E T T E R ******/
    
    public function getIdService() {
        return $this->idService;
    }

    public function getIdLanguage() {
        return $this->idLanguage;
    }

    public function getHeader() {
        return $this->header;
    }

    public function getContent() {
        return $this->content;
    }
    
    public function getTarget() {
        return $this->target;
    }
    
    /****** S E T T E R ******/
    
    public function setIdService($idService) {
        $this->idService = $idService;
        return $this;
    }

    public function setIdLanguage($idLanguage) {
        $this->idLanguage = $idLanguage;
        return $this;
    }

    public function setHeader($header) {
        $this->header = $header;
        return $this;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function setTarget($target) {
        $this->target = $target;
        return $this;
    }


}
