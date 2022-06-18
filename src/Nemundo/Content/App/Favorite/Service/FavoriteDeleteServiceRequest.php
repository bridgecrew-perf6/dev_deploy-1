<?php


namespace Nemundo\Content\App\Favorite\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Favorite\Data\Favorite\FavoriteDelete;
use Nemundo\Content\App\Favorite\Parameter\FavoriteParameter;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Core\Http\Request\Post\PostRequest;

class FavoriteDeleteServiceRequest extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'favorite-delete';

    }


    public function onRequest()
    {

        //(new Debug())->write($_POST);

        $favoriteId = (new HttpRequest('favorite'))->getValue();
        (new FavoriteDelete())->deleteById($favoriteId);




        //(new Debug())->write($favoriteId);

        $this->sendOkStatus();


        /*        $delete = new FavoriteDelete();
                $delete->filter->andEqual($delete->model->contentId, (new ContentParameter())->getValue());
                $delete->filter->andEqual($delete->model->userId, (new UserSession())->userId);
                $delete->delete();*/


    }

}