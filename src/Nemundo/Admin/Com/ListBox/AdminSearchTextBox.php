<?php

namespace Nemundo\Admin\Com\ListBox;

use Nemundo\Core\Language\LanguageCode;

class AdminSearchTextBox extends AdminTextBox
{

    public function getContent()
    {

        $this->placeholder[LanguageCode::EN] = 'Search';
        $this->placeholder[LanguageCode::DE] = 'Suchen';

        return parent::getContent();

    }

}