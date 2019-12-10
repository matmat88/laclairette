<?php

class PresentationController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
		$model = new PresentationModel(new Database());
		$presentations = $model->displayPresentation();
		$model = new UtilisateurModel(new Database());
		$users = $model->displayAdmin();

        return [
			'presentations' => $presentations,
			'users' => $users
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