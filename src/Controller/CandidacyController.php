<?php

namespace Controller;

use Entity\Candidacy;
use Entity\Opportunity;

class CandidacyController extends ControllerAbstract {
    
    public function candidacyAction($postId = null) {
        
        $opportunity = $this->app['opportunity.repository']->find($postId);
        
        if($_POST){
           // $this->MikeLeRoi("cv");            
           // $this->MikeLeRoi("coverletter");

            //die();
           
            if(empty($_POST['firstname'])){
                $errors['firstname'] = 'firstname require';
            } elseif(strlen($_POST['firstname']) > 45){
                $errors['firstname'] = 'maximum 45 characteres';
            }
                   
            if(empty($_POST['lastname'])){
                $errors['lastname'] = 'lastname require';
            } elseif(strlen($_POST['lastname']) > 45){
                $errors['lastname'] = 'maximum 30 characteres';
            }
            
            if(empty($_POST['email'])){
                $errors['email'] = 'email require';
            } 
            
            if(empty($_POST['phone'])){
                $errors['phone'] = 'phone require';
            } 
            
            if(empty($_POST['address'])){
                $errors['address'] = 'address require';
            } 
            
            if(empty($_POST['country'])){
                $errors['country'] = 'country require';
            }
            
            if(empty($_FILES['cv'])){
                $errors['cv'] = 'cv require';
            } else {          
                $filename = $this->MikeLeRoi($_FILES['cv']);
            }
            
            if(empty($_FILES['coverletter'])){
                $errors['coverletter'] = 'lettre de motivation require';
            }
            
            if(empty($errors)){
                
                $opportunity = new Opportunity();
                
                $opportunity->setIdopportunity($_POST['idopportunity']);
                
                $candidacy = new Candidacy();
            
                $candidacy->setFirstname($_POST['firstname']);
                $candidacy->setLastname($_POST['lastname']);
                $candidacy->setEmail($_POST['email']);
                $candidacy->setPhone($_POST['phone']);
                $candidacy->setAddress($_POST['address']);
                $candidacy->setCountry($_POST['country']);
                
                //$candidacy->setCv($_FILES['cv']["name"]);
                
                //$candidacy->setCoverletter($_FILES['coverletter']["name"]); 
                
                $candidacy->setOpportunity($opportunity);
                    
                $this->app['candidacy.repository']->save($candidacy);
                
                $this->addFlashMessage('new candidacy in database');
                return $this->redirectRoute('candidacy');
                
            } else {
                var_dump($errors);
                $message = '<strong>Le formulaire contient des erreur</strong>';
                $message .= '<br>' .implode('</br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
      
        return $this->render(
                'public/candidacy.html.twig',
                [
                   'opportunity' => $opportunity 
                ]
        );
        
    }
    
    
   public function MikeLeRoi($name){
            $nomOrigine = $_FILES[$name]['name'];
            $elementsChemin = pathinfo($nomOrigine);
            
            $extensionFichier = $elementsChemin['extension'];
            $extensionsAutorisees = array("jpeg", "jpg", "gif");
            if (!(in_array($extensionFichier, $extensionsAutorisees))) {
                echo "Le fichier n'a pas l'extension attendue";
            } else {    
                // Copie dans le repertoire du script avec un nom
                // incluant l'heure a la seconde pres 
                $repertoireDestination = "C:/xampp/htdocs/hebya/web/candidacy/";
                $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

                if (move_uploaded_file($_FILES[$name]["tmp_name"], 
                                                 $repertoireDestination.$nomDestination)) {
                    
                    return $repertoireDestination.$nomDestination;
                    /*echo "Le fichier temporaire ".$_FILES[$name]["tmp_name"].
                            " a été déplacé vers ".$repertoireDestination.$nomDestination;*/
                } else {
                    echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                            "Le déplacement du fichier temporaire a échoué".
                            " vérifiez l'existence du répertoire ".$repertoireDestination;
                }
            }
    } 
    
    
    
   
    
    
    
}
