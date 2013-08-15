<?php class UploadController extends DbController {

    public function missingMethod($parameters = array())
    {
        return "Missing Method";
    }


    protected $layout = 'crud::layouts.default';
    public $displayType = self::HTML; //or self::JSON or self::XML or self::HTML

    public function postUpload()
    {
        $action = 'postUpload';
    }

    public function getUpload()
    {

        $action = 'getUpload';

        $params = $this->__makeParams(self::INFO, "Enter data to insert.", null, 'medias', $action);
//        return View::make($this->layout)->nest('content', $params->view->name, $params->asArray());
    }

    public function getIndex()
    {
        
        $params = $this->__makeParams(self::INFO, "Enter data to insert.", null, 'medias', 'getUpload');

        return View::make('crud::layouts.default')->nest('content', 'uploader::uploadview', $params->asArray());
    }


}

?>
