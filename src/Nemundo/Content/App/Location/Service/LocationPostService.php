<?php


namespace Nemundo\Content\App\Location\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Location\Content\Location\LocationContentType;
use Nemundo\Content\Index\Geo\Action\GeoIndexAction;
use Nemundo\Content\Index\Search\Action\SearchIndexAction;
use Nemundo\Core\Http\Request\HttpRequest;

class LocationPostService extends AbstractServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'location-post';
    }


    public function onRequest()
    {

        $type = new LocationContentType();
        $type->location = (new HttpRequest('location'))->getValue();
        $type->description = (new HttpRequest('description'))->getValue();
        $type->geoCoordinate->latitude = (new HttpRequest('lat'))->getValue();
        $type->geoCoordinate->longitude = (new HttpRequest('lon'))->getValue();
        $type->saveType();

        (new SearchIndexAction())->onAction($type);
        (new GeoIndexAction())->onAction($type);

        $this->sendOkStatus();

    }

}