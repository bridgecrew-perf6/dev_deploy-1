<?php

namespace Nemundo\Content\App\Contact\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Contact\Content\Contact\ContactContentType;
use Nemundo\Core\Http\Request\HttpRequest;

class ContactPostService extends AbstractServiceRequest
{
    
    protected function loadService()
    {
        $this->serviceName='contact-contact-post';
    }
    
    
    public function onRequest()
    {


        $contentType=new ContactContentType();
        $contentType->company = (new HttpRequest('company'))->getValue();
        $contentType->lastName = (new HttpRequest('last_name'))->getValue();
        $contentType->firstName = (new HttpRequest('first_name'))->getValue();
        $contentType->phone = (new HttpRequest('phone'))->getValue();
        $contentType->email = (new HttpRequest('email'))->getValue();
        $contentType->saveType();
        
        $this->sendOkStatus();

    }


}