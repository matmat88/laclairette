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
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}