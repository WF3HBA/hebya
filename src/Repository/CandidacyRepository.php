<?php


namespace Repository;

use Entity\Candidacy;


class CandidacyRepository extends RepositoryAbstract {
    
    
    public function save(Candidacy $candidacy){
        
        $data =
            [
                'idcandidacy' => $candidacy->getIdcandidacy(),
                'firstname' => $candidacy->getFirstname(),
                'lastname' => $candidacy->getLastname(),
                'email' => $candidacy->getEmail(),
                'phone' => $candidacy->getPhone(),
                'address' => $candidacy->getAddress(),
                'country' => $candidacy->getCountry(),
                'cv' => $candidacy->getCv(),
                'coverletter' => $candidacy->getCoverletter(),
                'idopportunity' => $candidacy->getIdOpportunity()
            ];
        
            $this->db->insert('candidacy', $data);
            $candidacy->setIdcandidacy($this->db->LastInsertId());
        
    }
    
    
  
}
