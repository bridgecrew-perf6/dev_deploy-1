<?phpnamespace Nemundo\Roundshot\Parameter;use Nemundo\Web\Parameter\AbstractDateUrlParameter;use Nemundo\Web\Parameter\AbstractUrlParameter;class DateParameter extends AbstractDateUrlParameter{    protected function loadParameter()    {        $this->parameterName = 'date';    }}