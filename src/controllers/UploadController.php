<?php use Laravella\Uploader\UploadManager;

class UploadController extends DbController {

    private $layoutName = '.default';
    private $viewName = '.uploadview';

    private $skinType = 'admin'; //admin, front, (later : upload ... etc.)
    
    public function missingMethod($parameters = array())
    {
        return "Missing Method";
    }

    public $displayType = self::HTML; //or self::JSON or self::XML or self::HTML

    public function getTest()
    {
        $options = Options::getType('upload');
        echo var_dump($options);
        die;
    }
            
    public function postUpload()
    {
        $action = 'postUpload';
//        $x = new UploadManager();
        $response = "";
        try {
                $options = Options::getType('upload');
                $response = UploadManager::getInstance($options);

                $name = $response['files'][0]->name;
                $url = $response['files'][0]->url;
                $mcollection_id = Input::get('mcollection_id');
                $gallery_id = Input::get('gallery_id');

                $newMedia = array('mcollection_id'=>$mcollection_id, 'title'=>'', 'media_type'=>'', 
                    'url'=>$url, 'file_name'=>$name, 'user_id'=>0, 'gallery_id'=>$gallery_id);

                DB::table('medias')->insert($newMedia);

        } catch (Exception $e) {
            echo $e->getMessage();
            echo $response;
        }
        return '';
    }

    public function getUpload()
    {

        $action = 'getUpload';

    }

    public function getIndex($slug='')
    { 
        $params = $this->__makeParams('medias', 'getUpload', null);

        //return $this->makeView($params->asArray());
        
        $layout = Options::get('skin').$this->layoutName;
        $viewName = Options::get('skin').$this->viewName;
        
        return View::make($layout)->nest('content', $viewName, $params->asArray());
    }


}

?>
