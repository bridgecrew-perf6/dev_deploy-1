<?phpnamespace Nemundo\Office\Excel\Reader;use PhpOffice\PhpSpreadsheet\Spreadsheet;trait ExcelTrait{    /**     * @var string     */    public $filename;    /**     * @var bool     */    public $useFirstRowAsHeader = true;    /**     * @var string     */    public $sheetName;    /**     * @var Spreadsheet     */    private $spreadsheet;}