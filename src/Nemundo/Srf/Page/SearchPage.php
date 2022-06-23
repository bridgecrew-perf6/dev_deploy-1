<?php

namespace Nemundo\Srf\Page;

use Nemundo\Admin\Com\Title\AdminSubtitle;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Content\Index\Search\Parameter\SearchQueryParameter;
use Nemundo\Content\Index\Search\Reader\SearchItemReader;
use Nemundo\Core\Http\Request\Get\GetRequest;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Srf\Content\TvEpisode\TvEpisodeContentType;

class SearchPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $parameter=new GetRequest('q');
        $query =$parameter->getValue();


        $p=new Paragraph($this);
        $p->content='Suche nach <b>'.$query.'</b>';



        $reader=new SearchItemReader();
        $reader->query=$query;
        $reader->contentTypeId = (new TvEpisodeContentType())->typeId;
        foreach ($reader->getData() as $searchItem) {

            $subtitle=new AdminSubtitle($this);
            $subtitle->content=$searchItem->subject;

            $p=new Paragraph($this);
            $p->content=$searchItem->text;

        }







        return parent::getContent();
    }
}