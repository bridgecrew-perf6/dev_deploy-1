import ContentView from "../../../../content/ContentView.js";
import SmallContainer from "../../../../html/Formatting/SmallContainer.js";
import AbstimmungResultatTable from "../../Com/Table/AbstimmungResultatTable.js";
import GeoLevelType from "../../../Gemeinde/Type/GeoLevelType.js";


export default class AbstimmungView extends ContentView {


    onData(data) {

        let table=new AbstimmungResultatTable(this);
        table.abstimmungId=data.id;
        table.geoLevelId=GeoLevelType.BUND;
        table.render();


        let small = new SmallContainer(this);
        small.text = "Quelle Bfs";

    }

}