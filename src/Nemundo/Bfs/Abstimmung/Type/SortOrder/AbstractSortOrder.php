<?phpnamespace Nemundo\Bfs\Abstimmung\Type\SortOrder;use Nemundo\Core\Base\AbstractBase;abstract class AbstractSortOrder extends AbstractBase{    public $id;    public $sortOrder;    public $sql;    abstract protected function loadSortOrder();    public function __construct()    {        $this->loadSortOrder();    }}