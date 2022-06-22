<?phpnamespace Nemundo\WebLog\DataList;use Nemundo\Core\DataList\AbstractDataList;use Nemundo\WebLog\Data\Domain\Domain;use Nemundo\WebLog\Data\Domain\DomainReader;class DomainDataList extends AbstractDataList{    protected function loadDataList()    {        $reader=new DomainReader();        foreach ($reader->getData() as $domainRow) {            $this->addIdValue($domainRow->id,$domainRow->domain);        }    }    protected function onNew($value)    {        $data=new Domain();        $data->domain=$value;        $id = $data->save();        $this->addIdValue($id,$value);    }}