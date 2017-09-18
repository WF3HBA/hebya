<?php

namespace Repository;

use Entity\About;

class AboutRepository extends RepositoryAbstract {
    
    public function findAll() {
        
        $dbAbouts = $this->db->fetchAll(
                'SELECT * FROM about'
        );
        $abouts = [];

        foreach ($dbAbouts as $dbAbout){
            $abouts[] = $this->buildEntity($dbAbout);
        }

        return $abouts;
    }
    
    private function buildEntity(array $data){
       
        $about = new About();
            
        $about
                ->setIdAbout($data['idabout'])
                ->setSection($data['section'])
                ->setTitle($data['title'])
                ->setContent($data['content'])
        ;
        
        return $about;
    }
    
}
