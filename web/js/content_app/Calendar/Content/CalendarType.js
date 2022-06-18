import ContentType from "../../../content/ContentType.js";
import CalendarForm from "./CalendarForm.js";
import CalendarView from "./CalendarView.js";

export default class CalendarType extends ContentType {

    constructor() {

        super();

        this.label = "Calendar";
        this.id = "566bf75c-b120-4f3c-8fc4-2b0198e73b12";
        this.form = CalendarForm;
        this.view = CalendarView;

    }

}