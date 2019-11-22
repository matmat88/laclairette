<?php

class GallerieController
{
	public function httpGetMethodRep(array $queryFields)
    {
		var_dump($_GET);
		$model = new ProjectModel(new AjaxDatabase());
		$modelMedia = new MediaModel(new AjaxDatabase());
		
        // var_dump($formFields);
		

        if (isset($nameImage)){
		var_dump($nameImage);
		$projectGraphismesliders = $model->displayByCategoriesAndName('graphisme',$nameImage);
		return[
			'projectGraphismesliders' => $projectGraphismesliders
		];
		}

		return [
			'projectGraphismes' => $projectGraphismes
        ];
    }

    public function httpPostMethodRep(array $formFields)
    {
		$model = new ProjectModel(new AjaxDatabase());
		$modelMedia = new MediaModel(new AjaxDatabase());
		
		var_dump($_POST);
        // var_dump($formFields);
		die;

    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}