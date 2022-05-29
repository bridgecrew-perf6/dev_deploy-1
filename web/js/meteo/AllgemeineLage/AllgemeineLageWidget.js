import AdminWidget from "../../framework/Widget/AdminWidget.js";
import ServiceRequest from "../../framework/Service/ServiceRequest.js";
import ParagraphContainer from "../../html/Content/Paragraph.js";
import H5Container from "../../html/Title/H5.js";
import LoaderContainer from "../../framework/Com/Loader/Loader.js";
import DateFormat from "../../core/Date/DateFormat.js";
import WidgetContainer from "../../framework/Com/Widget/Widget.js";

export default class AllgemeineLageWidget extends WidgetContainer {

    constructor(parentContainer) {

        super(parentContainer);
        this.widgetTitle = "Allgemeine Lage";
        this.widgetIcon="cloud";

    }


    render() {

        let loader = new LoaderContainer(this);

        let h5 = new H5Container(this);
        let p = new ParagraphContainer(this);

        let service = new ServiceRequest("meteoschweiz-allgemeinelage");
        service.onDataRow = function (row) {
            h5.text = (new DateFormat(row.datum)).getGermanDateTime();
            p.text = row.allgemeine_lage;
            loader.removeContainer();
        };
        service.sendRequest();

    }

}