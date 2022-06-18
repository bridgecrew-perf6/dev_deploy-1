import ContentForm from "../../../content/ContentForm.js";
import BootstrapDatePicker from "../../../framework/Bootstrap/Form/BootstrapDatePicker.js";
import BootstrapTextBox from "../../../framework/Bootstrap/Form/BootstrapTextBox.js";

export default class CalendarForm extends ContentForm {

    render() {

        this.serviceName = "calendar-post";

        let datepicker = new BootstrapDatePicker(this);  // new DatePicker(this);
        datepicker.label = "Date";
        datepicker.name = "date";

        let event = new BootstrapTextBox(this);  // new TextBox(this);
        event.label = "Event";
        event.name = "event";

        this.renderSubmitButton();

    }

}