<?php


namespace Nemundo\Srf\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Core\Text\BoldText;
use Nemundo\Srf\Data\Show\ShowReader;


// ShowSearchService
class ShowSearchService extends AbstractListServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'srf-show-search';
    }


    public function onRequest()
    {

        $reader = new ShowReader();


        $q=null;

        $request=new HttpRequest('q');
        if ($request->hasValue()) {
            $q= $request->getValue();
            $reader->filter->andContains($reader->model->show,$q);
        }

        $reader->addOrder($reader->model->show);

        foreach ($reader->getData() as $showRow) {

            $bold=new BoldText();
            $bold->addKeyword($q);

            $row = [];
            $row['id'] = $showRow->id;
            $row['show'] = $bold->getBoldText( $showRow->show);
            $row['image_url'] = $showRow->image->getUrl();
            $this->addRow($row);

        }

    }

}