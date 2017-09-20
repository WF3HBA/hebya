<?php

namespace Repository;

use Entity\TeamMember;

class TeamRepository extends RepositoryAbstract {
    
    public function findAll(){
    
        $query = <<<SQL
                
        SELECT *      
        FROM team_member          
        ORDER BY idteam_member

SQL;
       
            $dbTeamMembers = $this->db->fetchAll($query);
            $teamMembers = [];
            
            foreach ($dbTeamMembers as $dbTeamMember) {
                $teamMembers[] = $this->buildEntity($dbTeamMember);
            }
            
            return $teamMembers;
    }
    
    public function find($id){
        $dbTeamMember = $this->db->fetchAssoc(
                'SELECT * FROM team_member WHERE idteam_member = :idteam_member',
                [
                    ':idteam_member' => $id
                ]
            );
        
            if (!empty($dbTeamMember)) {
                return $this->buildEntity($dbTeamMember);
            }
    }
    
    public function save(TeamMember $teamMember){
        
        $data =
            [
                'idteam_member' => $teamMember->getIdteam_member(),
                'firstname' => $teamMember->getFirstname(),
                'lastname' => $teamMember->getLastname(),
                'title' => $teamMember->getTitle(),
                'description' => $teamMember->getDescription(),
                'linkedin' => $teamMember->getLinkedin()
            ];
        
        if ($teamMember->getIdteam_member()){
            $this->db->update('team_member', $data, 
                    [
                        'idteam_member'=>$teamMember->getIdteam_member()
                    ] 
            );
        } else {
            $this->db->insert('team_member', $data);
            $teamMember->setIdteam_member($this->db->LastInsertId());
        }
    }
    
    private function buildEntity(array $data){
       
        $teamMember = new TeamMember();
            
        $teamMember
                ->setIdteam_member($data['idteam_member'])
                ->setFirstname($data['firstname'])
                ->setLastname($data['lastname'])
                ->setTitle($data['title'])
                ->setDescription($data['description'])
                ->setLinkedin($data['linkedin'])
        ;
        
        return $teamMember;
    }
}
