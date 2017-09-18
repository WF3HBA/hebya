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
