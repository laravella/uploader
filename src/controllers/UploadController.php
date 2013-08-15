<?php use Laravella\Uploader\UploadManager;

class UploadController extends DbController {

    public function missingMethod($parameters = array())
    {
        return "Missing Method";
    }


    protected $layout = 'crud::layouts.default';
    public $displayType = self::HTML; //or self::JSON or self::XML or self::HTML

    public function postUpload()
    {
        $action = 'postUpload';
//        $x = new UploadManager();
        try {
            $response = UploadManager::getInstance();
        } catch (Exception $e) {
            echo $response;
            echo $e->getMessage();
            die;
        }
    }

    public function getUpload()
    {

        $action = 'postUpload';
//        $x = new UploadManager();
        try {
            $response = UploadManager::getInstance();
        } catch (Exception $e) {
            echo $response;
            echo $e->getMessage();
            die;
        }
    }

    public function getIndex()
    {
        
        $params = $this->__makeParams(self::INFO, "Enter data to insert.", null, 'medias', 'getUpload');

        return View::make('crud::layouts.default')->nest('content', 'uploader::uploadview', $params->asArray());
    }


}

?>
