import ContentView from "../../../../content/ContentView.js";
import ParagraphContainer from "../../../../html/Content/Paragraph.js";
import SmallContainer from "../../../../html/Formatting/SmallContainer.js";
import SearchChMapContainer from "../../../Map/Com/SearchChMapContainer.js";
import Debug from "../../../../core/Debug/Debug.js";

export default class LocationView extends ContentView {

    onData(dataRow) {

        (new Debug()).write("onData");


        let p = new ParagraphContainer(this);
        p.text = dataRow.description;

        let map=new SearchChMapContainer(this);
        map.widthPercent=100;
        map.heightPixel=500;
        map.coordinate(dataRow.coordinate.lat, dataRow.coordinate.lon);

        let small = new SmallContainer(this);
        small.text = dataRow.coordinate.lat + "/" + dataRow.coordinate.lon;

    }

}