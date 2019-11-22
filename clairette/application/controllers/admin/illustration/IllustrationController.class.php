<?php

class IllustrationController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
        $model = new ProjectModel(new Database());

		$projectIllustrations = $model->displayByCategories('illustration');

        // var_dump($projectIllustration);
        // die;

        return [
            'projectIllustrations' => $projectIllustrations
        ];
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	$model = new ProjectModel(new Database());
        $modelMedia = new MediaModel(new Database());
        
        // var_dump($_FILES["picture2"]);
        // var_dump($_POST["nameProject"]);
        // die;
        if (isset($_POST["nameProject"]) && $_POST["nameProject"] !== "" ){

            if ($_FILES["picture1"]["error"][0] == 0) {
                $tmp_mediaName = $_FILES["picture1"]["tmp_name"][0];
                $mediaName = basename($_FILES["picture1"]["name"][0]);
                $mediaTitreImage =$formFields["titreImage"];
                move_uploaded_file($tmp_mediaName, ROOT_PATH."/application/www/images/illustrations/$mediaName");
                $idMedia = $modelMedia->addMedia($mediaName, $_FILES["picture1"]["type"][0],$mediaTitreImage);
            }

            $firstError = array_shift($_FILES["picture1"]["error"]);
            $firstTmp_name = array_shift($_FILES["picture1"]["tmp_name"]);
            $firstName = array_shift($_FILES["picture1"]["name"]);
            $firstType = array_shift($_FILES["picture1"]["type"]);

            if($_FILES["picture2"]["name"][0] !== ""){
                foreach($_FILES["picture2"]["error"] as $valeur){
                    if($valeur == 0){
                        $uploadErrOk = true;
                        // const UPLOAD_ERR_OK = true;
                    }
                }

                if($uploadErrOk == true){
                    for ($i=0; $i<count ($_FILES["picture2"]["error"]) ; $i++){
                        $tmp_name = $_FILES["picture2"]["tmp_name"][$i];
                        $nameplus = basename($_FILES["picture2"]["name"][$i]);
                        $titreImageplus =$formFields["titreImageplus"];
                        move_uploaded_file($tmp_name, ROOT_PATH."/application/www/images/illustrations/$nameplus");
                        $imagePlus = $modelMedia->addImageplus($nameplus, $_FILES["picture2"]["type"][$i],$titreImageplus,$idMedia);
                    }
                }
            }

            $projectAdd = $model->addProject($formFields['nameProject'], $formFields['nameCommanditaire'], $formFields['texteDescription'], $formFields['lien'], "illustration",$idMedia);
        }
        else if( isset($_POST['nameProjectSuppr']) && $_POST['nameProjectSuppr'] !== "" ){
            $projectMediaSuppr = $model->supprProjectMedia($formFields['nameProjectSuppr']);
            $projectImageplusSuppr = $model->supprProjectImageplus($formFields['nameProjectSuppr']);
            $projectSimpleSuppr = $model->supprProjectSimple($formFields['nameProjectSuppr']);
            
        }
        $http->RedirectTo('/admin/illustration');

    }
}