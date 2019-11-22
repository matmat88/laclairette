<?php

class AboutController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
		$model = new PresentationModel(new Database());
		$presentations = $model->displayPresentation();
		

        return [
			'presentations' => $presentations
        ];
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
		
    	
		$modelMedia = new MediaModel(new Database());
		
        
        
        if (isset($_POST["titrePresentation"])){

            if ($_FILES["picture"]["error"][0] == 0) {
                $tmp_mediaName = $_FILES["picture"]["tmp_name"][0];
                $mediaName = basename($_FILES["picture"]["name"][0]);
                move_uploaded_file($tmp_mediaName, ROOT_PATH."/application/www/images/illustrations/$mediaName");
                $idMedia = $modelMedia->updateMedia($mediaName, $_FILES["picture"]["type"][0],$formFields['titreImage']);
            }

			$presentationModel = new PresentationModel(new Database());
			$presentaionUpdate = $presentationModel->updatePresentation($formFields['textePresentation'], $formFields['titrePresentation'], $formFields['adresse'], $formFields['tel'], $formFields['mail']);
			
			
        }
        $http->RedirectTo('/admin/about');
	}
}