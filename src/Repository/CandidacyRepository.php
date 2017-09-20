<?php


namespace Repository;


class CandidacyRepository extends RepositoryAbstract {
    
    
    public function save(Candidacy $candidacy){
        
        $data =
            [
                'idcandidacy' => $candidacy->getIdcandidacy(),
                'firstname' => $candidacy->getFirstname(),
                'lastname' => $candidacy->getLastname(),
                'email' => $candidacy->getEmail(),
                'phone' => $candidacy->getPhone(),
                'adress' => $candidacy->getAdress(),
                'country' => $candidacy->getCountry()
            ];
        
            $this->db->insert('candidacy', $data);
            $candidacy->setIdcandidacy($this->db->LastInsertId());
        
    }
    
    
  
}
