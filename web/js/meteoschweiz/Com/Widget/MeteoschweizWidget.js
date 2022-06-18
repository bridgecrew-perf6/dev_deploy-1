import ServiceRequest from "../../../framework/Service/ServiceRequest.js";
import H1Container from "../../../html/Title/H1.js";
import ParagraphContainer from "../../../html/Content/Paragraph.js";
import SmallContainer from "../../../html/Formatting/SmallContainer.js";
import ViewWidgetContainer from "../../../framework/Com/Widget/ViewWidget.js";
import AutocompleteTextBox from "../../../framework/Com/Autocomplete/AutocompleteTextBox.js";
import StationAutocomplete from "../Autocomplete/StationAutocomplete.js";
import MeteoschweizStationView from "../../Content/MeteoschweizStationView.js";
import DivContainer from "../../../html/Content/Div.js";


export default class MeteoschweizWidget extends ViewWidgetContainer {

    constructor(parentContainer) {

        super(parentContainer);
        this.widgetTitle = "Meteoschweiz";
        this.widgetIcon = "cloud";

    }


    render() {

        let local=this;

        /*
        let station = new StationListBox(this);
        station.onChange = function () {

            p.text = station.value;

            let service = new ServiceRequest("meteoschweiz-station-item");
            service.addParameter("data_id", station.value);
            service.onRow = function (row) {

                (new Debug()).write(row);

                h1.text = row.station;

                small.text = row.station_code;

                p.text = row.latitude + "/" + row.longitude;

                //(new ContentWidgetLoader()).fromContentId(row.content_id);


            };

            service.sendRequest();

        };
        station.render();*/


        let autocomplete = new StationAutocomplete(this);  // new AdminAutocomplete(this);
        //autocomplete.serviceName = "meteoschweiz-station-word";
        autocomplete.onWordChange = function (wordId) {

            //p.text = autocomplete.value;

            let service = new ServiceRequest("meteoschweiz-station-item");
            service.addParameter("data_id", wordId);
            service.onDataRow = function (dataRow) {

                local.widgetTitle=dataRow.station;

                h1.text = dataRow.station;
                small.text = dataRow.station_code;
                p.text = dataRow.latitude + "/" + dataRow.longitude;

                contentContainer.emptyContainer();

                let view = new MeteoschweizStationView(contentContainer);
                view.fromDataId(dataRow.id);


            };
            service.sendRequest();


        };

        let p = new ParagraphContainer(this);
        let h1 = new H1Container(this);
        let small = new SmallContainer(this);

        let contentContainer = new DivContainer(this);

        //let button = new FavoriteButton(this);*/

    }

}