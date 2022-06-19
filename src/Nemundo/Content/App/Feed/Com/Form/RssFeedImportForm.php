<?php

namespace Nemundo\Content\App\Feed\Com\Form;

use Nemundo\Admin\Com\Form\AbstractAdminForm;
use Nemundo\Admin\Com\ListBox\AdminLargeTextBox;
use Nemundo\Content\App\Feed\Content\Feed\FeedContentBuilder;
use Nemundo\Content\App\Feed\Import\FeedImport;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Type\Text\Text;

class RssFeedImportForm extends AbstractAdminForm
{

    /**
     * @var AdminLargeTextBox
     */
    private $feedUrl;

    public function getContent()
    {

        $this->feedUrl = new AdminLargeTextBox($this);
        $this->feedUrl->label = 'Feed Url';

        return parent::getContent();

    }


    protected function onSubmit()
    {

        $text = new Text($this->feedUrl->value);
        foreach ($text->split("\r\n") as $line) {

            (new Debug())->write('rss: '.$line);

            $builder=new FeedContentBuilder();
            $builder->rssUrl=$line;
            $builder->saveContent();

        }

        exit;

    }

}