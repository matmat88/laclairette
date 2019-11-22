<?php

class AjaxGallerieIllustrationController
{
	public function httpGetMethodRep(array $queryFields)
    {
		
    }

    public function httpPostMethodRep(array $formFields)
    {
		$model = new AjaxProjectModel(new AjaxDatabase());
		// var_dump($_POST);
        // var_dump($formFields);
		$projectIllustrationscovers = $model->displayProjectSingleByCategoriesAndName('illustration',$formFields["nameImage"]);

		$projectIllustrationsliders = $model->displayProjectSeveralByCategoriesAndName('illustration',$formFields["nameImage"]);
		return[
			'projectIllustrationscovers' => $projectIllustrationscovers,
			'projectIllustrationsliders' => $projectIllustrationsliders
		];
    }
}

