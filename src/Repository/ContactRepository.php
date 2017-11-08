<?php

namespace Repository;

use Entity\Contact;

class ContactRepository extends RepositoryAbstract {

  public function findAll() {

    $query = <<<SQL
                
        SELECT *    
        FROM contact
SQL;

    $dbContacts = $this->db->fetchAll($query);
    $contacts = [];

    foreach ($dbContacts as $dbContact) {
      $contacts[] = $this->buildEntity($dbContact);
    }

    return $contacts;
  }

  public function find($id) {
    $dbContact = $this->db->fetchAssoc(
            'SELECT * FROM contact WHERE idcontact = :idcontact', [
        ':idcontact' => $id
            ]
    );

    if (!empty($dbContact)) {
      return $this->buildEntity($dbContact);
    }
  }

  public function save(Contact $contact) {
    $data = [
        'lastname' => $contact->getLastname(),
        'firstname' => $contact->getFirstname(),
        'email' => $contact->getEmail(),
        'city' => $contact->getCity(),
        'country' => $contact->getCountry(),
        'organisation' => $contact->getOrganisation(),
        'message' => $contact->getMessage()
    ];

    if ($contact->getIdcontact()) {
      $this->db->update('contact', $data, [
          'idcontact' => $contact->getIdcontact()
              ]
      );
    } else {
      $this->db->insert('contact', $data);
      $contact->setIdcontact($this->db->LastInsertId());
    }
  }

  private function buildEntity(array $data) {

    $contact = new Contact();

    $contact
            ->setIdcontact($data['idcontact'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
            ->setEmail($data['email'])
            ->setCity($data['city'])
            ->setCountry($data['country'])
            ->setOrganisation($data['organisation'])
            ->setMessage($data['message'])
            //INSERT INTO `contact` (`idcontact`, `lastname`, `firstname`, `email`, `city`, `country`, `organisation`, `message`) VALUES (NULL, 'xfgfg', 'xffg', 'ssryy', 'srysr', 'drydy', 'drydrsyr', 'dh')
    ;

    return $contact;
  }

}
