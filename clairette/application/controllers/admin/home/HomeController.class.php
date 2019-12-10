<?php

class HomeController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $model = new ProjectModel(new Database());
        // $projects = $model->displayGoodCouv('Faire part');
        $projects = $model->displayByCategories('illustration');
		$projectsplus = $model->displayGoodPlus('Faire part');
        $modelActu = new ActualiteModel(new Database());
        $actu= $modelActu->displayActu();
		
		
		return [
            'projects' => $projects,
            'projectsplus' => $projectsplus,
            'actu' => $actu
        ];
        
		
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	// $model = new ProjectModel(new Database());
        $modelMedia = new MediaModel(new Database());
        $modelActu = new ActualiteModel(new Database());
        // var_dump($formFields);
        // var_dump($_POST["texteActu"]);
        // var_dump($_FILES);
        // die;


        
        // if (isset($_POST["texteActu"]) ){

            if ($_FILES["picture1"]["error"][0] == 0) {
                $tmp_mediaName = $_FILES["picture1"]["tmp_name"][0];
                $mediaName = basename($_FILES["picture1"]["name"][0]);
                $mediaTitreImage =$formFields["titreImage"];
                $mediaLienImage =$formFields["lienImage"];
                move_uploaded_file($tmp_mediaName, ROOT_PATH."/application/www/images/illustrations/$mediaName");
                $idMedia = $modelMedia->updateMediacomplet($mediaName, $_FILES["picture1"]["type"][0],$mediaTitreImage,$mediaLienImage);
            }
            // var_dump($idMedia);
            // die;

            $actuAdd = $modelActu->updateActu ($formFields['lienActu'], $formFields['texteActu'], $formFields['titreActu']);
            // var_dump($actuAdd);

        // }
        $http->RedirectTo('/admin/home');

    }

}
