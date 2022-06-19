import ShowTable from "../Com/Table/ShowTable.js";
import AdminColumn from "../../framework/Layout/AdminColumn.js";
import EpisodeTable from "../Com/Table/EpisodeTable.js";
import SrfVideoType from "../Content/Video/SrfVideoType.js";
import SrfVideoView from "../Content/Video/SrfVideoView.js";
import AppContainer from "../../framework/App/Com/Container/AppContainer.js";

export default class SrfAppContainer extends AppContainer {

    render() {

        //this.emptyContainer();

        let col1 = new AdminColumn(this);
        col1.widthPixel = 300;

        let col2 = new AdminColumn(this);
        col2.widthPixel = 600;

        let col3 = new AdminColumn(this);
        col3.widthPixel = 600;

        let show1 = new ShowTable(col1);
        show1.onDataRowClick = function (tableRow) {

            let id = tableRow.getDataAttribute("id");
            (new Debug()).write("show id" + id);

            episode.showId = id;
            episode.reloadData();

        }

        show1.render();


        let episode = new EpisodeTable(col2);
        episode.onDataRowClick = function (tableRow) {

            col3.emptyContainer();

            let view = new SrfVideoView(col3);
            view.widthPercent = 100;
            view.fromDataId((new SrfVideoType()).id, tableRow.getData("id"));

        };
        episode.render();

    }


}