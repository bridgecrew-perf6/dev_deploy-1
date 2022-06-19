import PageContainer from "../../framework/Page/PageContainer.js";
import SrfContainer from "../Com/Container/SrfContainer.js";
import PositionStyle from "../../html/Style/Position.js";
import IconPageContainer from "../../framework/Page/IconPageContainer.js";
import EpisodeTable from "../Com/Table/EpisodeTable.js";
import SrfVideoView from "../Content/Video/SrfVideoView.js";
import SrfVideoType from "../Content/Video/SrfVideoType.js";
import AdminButton from "../../framework/AdminButton.js";

export default class SrfPage extends IconPageContainer {

    constructor(parentContainer) {

        super(parentContainer);
        this.pageTitle = "SRF";
        this.pageIcon="tv";

    }


    render() {

        let container = new SrfContainer(this);
        container.heightPercent=100;
        container.render();


        /*
        let btn = new AdminButton(this);
        btn.label="load";
        btn.onClick=function () {

            episode.showId=1;
            /*episode.emptyData();
            episode.reloadData();*/
/*
        };


        let episode = new EpisodeTable(this);
        episode.paginationLimit=50;
        episode.onDataRowClick = function (tableRow) {

            /*col3.emptyContainer();

            let view = new SrfVideoView(col3);
            view.widthPercent = 100;
            view.fromDataId((new SrfVideoType()).id, tableRow.getData("id"));*/
/*
        };
        episode.render();*/


    }


}