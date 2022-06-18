<?php

namespace Nemundo\Content\App\Contact\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Contact\Content\Contact\ContactContentType;
use Nemundo\Content\App\Contact\Content\Email\EmailContentType;
use Nemundo\Core\Http\Request\HttpRequest;

class EmailPostService extends AbstractServiceRequest
{
    
    protected function loadService()
    {
        $this->serviceName='contact-email-post';
    }
    
    
    public function onRequest()
    {


        $contentType= new EmailContentType();
        $contentType->email = (new HttpRequest('email'))->getValue();
        $contentType->saveType();

        $this->sendOkStatus();

    }


}