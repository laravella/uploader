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
//    protected $layout = 'crud::layouts.default'; //$params->asArray()
        return View::make('crud::layouts.default')->nest('content', 'uploader::uploadview', array('action'=>'getUpload', 'tableName'=>'medias'));
//        return View::make("crud::uploadview");
    }


}

?>
