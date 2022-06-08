<?php

namespace Parlament\Com\ListBox;

use Nemundo\Admin\Com\ListBox\AdminListBox;
use Parlament\Reader\SessionDataReader;

class SessionListBox extends AdminListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Session';
        $this->name = 'session';

    }


    public function getContent()
    {

        $reader = new SessionDataReader();
        foreach ($reader->getData() as $row) {
            $this->addItem($row->id, $row->session);
        }

        return parent::getContent();
    }
}