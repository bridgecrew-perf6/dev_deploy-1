import AdminWidget from "../../../../framework/Widget/AdminWidget.js";
import HrContainer from "../../../../html/Layout/HrContainer.js";
import DownloadMenuIcon from "../../../../framework/Com/Menu/Icon/DownloadMenuIcon.js";
import ImageView from "../../Content/Image/ImageView.js";
import ShareMenuIcon from "../../../Share/ShareMenuIcon.js";
import DivContainer from "../../../../html/Content/Div.js";
import DisplayStyle from "../../../../html/Style/Display.js";
import ServiceRequestScrollDiv from "../../../../framework/Com/Data/Scroll/ServiceRequestScrollDiv.js";



export default class ImageSearchContainer extends ServiceRequestScrollDiv {

    onImageClick = null;

    constructor(parentContainer) {

        super(parentContainer);

        this.service = "file-image-list";
        this.paginationLimit = 20;

    }


    onDataRow(dataRow) {

        let widget = new AdminWidget(this);
        widget.widgetTitle = dataRow.filename;
        widget.widthPixel=300;
        widget.marginPixel=10;


        //let img = new ImageContainer(this);

        /*let img = new AdminImage(widget);
        img.src = dataRow.image_url_small;
        img.imageLarge= dataRow.image_url_large;
        img.widthPercent=100;*/

        /*if (this.onImageClick !== null) {

            let local=this;

            img.onClick = function () {
                local.onImageClick(dataRow);
            }

        }*/

        /*let table = new LabelValueAdminTable(widget);
        table.addLabelValue("Date/Time",dataRow.date_time);
        table.addLabelValue("Width",dataRow.image_width);
        table.addLabelValue("Height",dataRow.image_height);
        table.addLabelValue("Filename",dataRow.filename);*/

        let view = new ImageView(widget);
        view.fromJsonData(dataRow);

        new HrContainer(widget);

        let div = new DivContainer(widget);

        let download = new DownloadMenuIcon(div);
        download.downloadUrl = dataRow.image_url_large;
        download.display = DisplayStyle.BLOCK;

        /*let share = new ShareMenuIcon(div);
        share.display = DisplayStyle.BLOCK;
        share.contentId = dataRow.content_id;
        share.render();

        let favorite = new FavoriteButton(div);
        favorite.display = DisplayStyle.BLOCK;
        favorite.contentId = dataRow.content_id;
        favorite.render();

        let tree = new _TreeActionView(div);
        tree.contentId = dataRow.content_id;
        tree.render();*/



    }

}