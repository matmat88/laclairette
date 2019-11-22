<?php

class GraphismeController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	$model = new ProjectModel(new Database());
		$projectGraphismes = $model->displayByCategories('graphisme');
		
		

		return [
			'projectGraphismes' => $projectGraphismes
        ];
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
		$model = new ProjectModel(new Database());
		$modelMedia = new MediaModel(new Database());
		
		var_dump($http);

		// var_dump($_POST);
        // var_dump($formFields);
		// die;

    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}