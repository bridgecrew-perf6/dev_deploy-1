<?php


namespace Nemundo\Content\App\Note\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Note\Content\Note\NoteContentType;
use Nemundo\Core\Http\Request\HttpRequest;

class NoteDeleteService extends AbstractServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'note-delete';
    }


    public function onRequest()
    {

        $id = (new HttpRequest('id'))->getValue();

        $type = new NoteContentType($id);
        $type->deleteType();

        $this->sendOkStatus();

    }

}