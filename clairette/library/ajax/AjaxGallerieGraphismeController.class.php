<?php

class AjaxGallerieGraphismeController
{
	public function httpGetMethodRep(array $queryFields)
    {
		
    }

    public function httpPostMethodRep(array $formFields)
    {
		$model = new AjaxProjectModel(new AjaxDatabase());
		// var_dump($_POST);
        // var_dump($formFields);
		$projectGraphismescovers = $model->displayProjectSingleByCategoriesAndName('graphisme',$formFields["nameImage"]);
		
		$projectGraphismesliders = $model->displayProjectSeveralByCategoriesAndName('graphisme',$formFields["nameImage"]);
		return[
			'projectGraphismescovers' => $projectGraphismescovers,
			'projectGraphismesliders' => $projectGraphismesliders
		];

		/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}

