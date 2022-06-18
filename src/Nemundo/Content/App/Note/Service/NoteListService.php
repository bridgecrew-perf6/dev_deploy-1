<?php


namespace Nemundo\Content\App\Note\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Note\Data\Note\NoteReader;

class NoteListService extends AbstractServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'note-list';
    }


    public function onRequest()
    {

        $reader = new NoteReader();
        $reader->addOrder($reader->model->title);
        foreach ($reader->getData() as $noteRow) {

            $row = [];
            $row['id'] = $noteRow->id;
            $row['title'] = $noteRow->title;
            $row['text'] = $noteRow->text;

            $this->addRow($row);

        }

    }

}