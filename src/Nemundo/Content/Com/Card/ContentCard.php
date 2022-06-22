<?php

namespace Nemundo\Content\Com\Card;

use Nemundo\Admin\Com\Card\AdminCard;
use Nemundo\Content\Builder\ContentBuilder;

class ContentCard extends AdminCard
{

    public $contentId;

    public $content;

    public function getContent()
    {

        if ($this->content === null) {
            $this->content = (new ContentBuilder())->getContent($this->contentId);
        }

        $this->cardTitle = $this->content->getSubject();
        $this->content->getDefaultView($this);

        return parent::getContent();

    }

}