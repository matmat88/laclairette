<?php

class IllustrationController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	$model = new ProjectModel(new Database());
		$projectIllustrations = $model->displayByCategories('illustration');

        return [
            'projectIllustrations' => $projectIllustrations
        ];
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}