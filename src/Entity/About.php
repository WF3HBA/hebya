<?php

namespace Entity;

class About {
    
    private $idAbout;
    
    private $section;
    
    private $title;
    
    private $content;
  
    /*********  G E T T E R  **********/
    
    function getIdAbout() {
        return $this->idAbout;
    }

    function getSection() {
        return $this->section;
    }
    
    function getTitle() {
        return $this->title;
    }
    
    function getContent() {
        return $this->content;
    }

    /*********  S E T T E R  **********/
    
    function setIdAbout($idAbout) {
        $this->idAbout = $idAbout;
        
        return $this;
    }
    
    function setSection($section) {
        $this->section = $section;
        
        return $this;
    }

    function setTitle($title) {
        $this->title = $title;
        
        return $this;
    }

    function setContent($content) {
        $this->content = $content;
        
        return $this;
    }

    
}
