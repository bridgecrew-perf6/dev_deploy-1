<?phpnamespace Nemundo\Model\Request;use Nemundo\Core\Http\Request\AbstractHttpRequest;class PageRequest extends AbstractHttpRequest{    protected function loadRequest()    {        $this->requestName = 'page';        $this->defaultValue = '0';    }}