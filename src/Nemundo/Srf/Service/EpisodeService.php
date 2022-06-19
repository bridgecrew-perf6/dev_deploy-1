<?php


namespace Nemundo\Srf\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Srf\Data\Episode\EpisodePaginationReader;

class EpisodeService extends AbstractListServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'srf-episode';
    }


    public function onRequest()
    {


        $episodeReader = new EpisodePaginationReader();

        $request = new HttpRequest('show');
        if ($request->hasValue()) {
            $episodeReader->filter->andEqual($episodeReader->model->showId, $request->getValue());
        }


        $episodeReader->addOrder($episodeReader->model->dateTime, SortOrder::DESCENDING);
        $episodeReader->paginationLimit = $this->getPaginationLimit();
        $episodeReader->currentPage = $this->getCurrentPage();

        foreach ($episodeReader->getData() as $episodeRow) {

            $row = [];
            $row['id'] = $episodeRow->id;
            $row['title'] = $episodeRow->title;
            $row['description'] = $episodeRow->description;
            $row['urn'] = $episodeRow->urn;
            $row['datetime'] = $episodeRow->dateTime->getIsoDateTime();

            $this->addRow($row);

        }

    }

}