<?php


namespace Nemundo\Content\App\Favorite\Action;


use Nemundo\App\WebService\Json\AbstractServiceRequest;
use Nemundo\Content\App\Favorite\Data\Favorite\Favorite;
use Nemundo\Content\Builder\ContentBuilder;
use Nemundo\Content\Parameter\ContentParameter;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Http\Request\Post\PostRequest;
use Nemundo\User\Session\UserSession;

class FavoriteServiceRequest extends AbstractServiceRequest
{


    protected function loadWebService()
    {

        $this->webServiceId='11e58c90-59eb-495a-8611-a5418707460f';

    }


    public function onAction()
    {


        $content = (new ContentBuilder())->getContent((new PostRequest('content'))->getValue() );

        $action=new FavoriteAction();
        $action->onAction($content);



       /* $data = new Favorite();
        $data->updateOnDuplicate = true;
        $data->contentId = (new PostRequest('content'))->getValue();  // $content->getContentId();
        $data->userId = (new UserSession())->userId;
        $data->subject = $content->getSubject();
        $data->save();*/


      //  (new Debug())->write($_POST['content']);


        /*
        $contentParameter = new ContentParameter();
        $contentParameter->contentTypeCheck = false;
        //$contentType = $contentParameter->getContentType();

        $action=new FavoriteAction();
        $action->onAction($contentParameter->getContent());*/



        // TODO: Implement onAction() method.
    }

}