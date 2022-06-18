<?php

namespace Nemundo\Content\App\Favorite\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Favorite\Data\Favorite\FavoriteCount;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\User\Session\UserSession;

class FavoriteCountService extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'favorite-count';

    }


    public function onRequest()
    {

        $count = new FavoriteCount();
        $count->filter->andEqual($count->model->userId, (new UserSession())->userId);

        $request = new HttpRequest('content');
        if ($request->hasValue()) {
            $count->filter->andEqual($count->model->contentId, $request->getValue());
        }

        $data = [];
        $data['count'] = $count->getCount();
        $data['count_text'] = $count->getFormatCount();

        $this->addRow($data);

    }

}