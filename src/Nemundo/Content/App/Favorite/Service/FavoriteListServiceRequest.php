<?php

namespace Nemundo\Content\App\Favorite\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Favorite\Data\Favorite\FavoriteReader;
use Nemundo\Core\Json\Document\JsonResponse;
use Nemundo\User\Session\UserSession;

class FavoriteListServiceRequest extends AbstractListServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'favorite-list';

    }


    public function onRequest()
    {

        $favoriteReader = new FavoriteReader();
        $favoriteReader->model->loadContent();
        $favoriteReader->model->content->loadContentType();
        $favoriteReader->filter->andEqual($favoriteReader->model->userId, (new UserSession())->userId);
        $favoriteReader->addOrder($favoriteReader->model->subject);

        foreach ($favoriteReader->getData() as $favoriteRow) {

            $data = [];
            $data['favorite_id'] = $favoriteRow->id;
            $data['content_id'] = $favoriteRow->contentId;
            $data['subject'] = $favoriteRow->subject;

            $this->addRow($data);

        }

    }

}