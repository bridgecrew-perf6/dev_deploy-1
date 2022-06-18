<?php


namespace Nemundo\Content\App\Location\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Location\Content\Address\AddressContentType;
use Nemundo\Content\App\Location\Data\Address\Address;
use Nemundo\Content\Type\Index\ContentIndexAction;
use Nemundo\Core\Http\Request\HttpRequest;

class AddressPostService extends AbstractServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'address-post';
    }


    public function onRequest()
    {

        $data = new Address();
        $data->street = (new HttpRequest('street'))->getValue();
        $data->place = (new HttpRequest('place'))->getValue();
        $dataId = $data->save();

        $type = new AddressContentType($dataId);
        (new ContentIndexAction())->onAction($type);

        $this->sendOkStatus();

    }

}