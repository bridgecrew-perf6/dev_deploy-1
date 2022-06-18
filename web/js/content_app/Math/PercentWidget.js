import AdminWidget from "../../framework/Widget/AdminWidget.js";
import TextBox from "../../framework/Form/TextBox.js";
import AdminButton from "../../framework/AdminButton.js";
import InputContainer from "../../html/Form/Input.js";


export default class PercentWidget extends AdminWidget {


    constructor(parentContainer) {

        super(parentContainer);

        this.widgetTitle = "Percent";

        let number1 = new TextBox(this);
        number1.label = "Number";

        let number2 = new TextBox(this);
        number2.label = "Base Number";

        let number3 = new TextBox(this);
        number3.readOnly=true;
        number3.label = "=";

        let btn=new AdminButton(this);
        btn.label="Calc";
        btn.onClick=function () {

            number3.value = (number1.value/number2.value)*100;


        };


    }



}
