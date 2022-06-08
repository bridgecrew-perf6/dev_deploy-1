<?phpnamespace Nemundo\App\MySql\Page;use Nemundo\Admin\Com\Button\AdminSiteButton;use Nemundo\App\MySql\Com\Table\MySqlIndexBootstrapTable;use Nemundo\App\MySql\Com\Table\MySqlTableFieldBootstrapTable;use Nemundo\App\MySql\Parameter\TableParameter;use Nemundo\App\MySql\Site\Action\MySqlIndexDeleteSite;use Nemundo\App\MySql\Template\MySqlTemplate;class MySqlTablePage extends MySqlTemplate{    public function getContent()    {        $tableParameter = new TableParameter();        $tableName = $tableParameter->getValue();        $table = new MySqlTableFieldBootstrapTable($this);        $table->tableName = $tableName;        $table = new MySqlIndexBootstrapTable($this);        $table->tableName = $tableName;        $btn = new AdminSiteButton($this);        $btn->site = clone(MySqlIndexDeleteSite::$site);        $btn->site->addParameter($tableParameter);        return parent::getContent();    }}