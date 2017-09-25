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
    
    public function find($id){
        $dbAbout = $this->db->fetchAssoc(
                'SELECT * FROM about WHERE idabout = :idabout',
                [
                    ':idabout' => $id
                ]
            );
        
            if (!empty($dbAbout)) {
                return $this->buildEntity($dbAbout);
            }
    }
    
    public function save(About $about){
        
        $data =
            [
                'section' => $about->getSection(),
                'title' => $about->getTitle(),
                'content' => $about->getContent()
            ];
        
        if ($about->getIdAbout()){
            $this->db->update('about', $data, 
                    [
                        'idabout'=>$about->getIdAbout()
                    ] 
                );
        } else {
            $this->db->insert('about', $data);
            $about->setIdAbout($this->db->LastInsertId());
        }
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
