import DivContainer from "../../../../html/Content/Div.js";
import ServiceRequest from "../../../../framework/Service/ServiceRequest.js";
import H3Container from "../../../../html/Title/H3.js";
import ImageTimelineListBox from "../ListBox/ImageTimelineListBox.js";
import BootstrapImage from "../../../../framework/Bootstrap/Image/BootstrapImage.js";
import FavoriteButton from "../../../Favorite/Com/Button/FavoriteButton.js";

export default class ImageTimelineContainer extends DivContainer {


    render() {

        let listbox = new ImageTimelineListBox(this);
        listbox.widthPixel = 350;
        listbox.onChange = function (id) {

            let imageService = new ServiceRequest("imagetimeline-list");
            imageService.addParameter("data_id", id);
            imageService.onDataRow = function (dataRow) {

                container.emptyContainer();

                let h3 = new H3Container(container);
                h3.text = dataRow.timeline;

                let img = new BootstrapImage(container);
                img.label = dataRow.timeline;
                img.src = dataRow.image_url;
                img.imageLarge = dataRow.image_url;
                img.render();

                /*let favorite = new FavoriteButton(container);
                favorite.contentId = dataRow.content_id;
                favorite.render();*/

            };
            imageService.sendRequest();


        };

        listbox.render();

        let container = new DivContainer(this);


    }

}