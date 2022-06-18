import MenuIcon from "../../../../framework/Menu/MenuIcon.js";
import FavoritePostService from "../../Service/FavoritePostService.js";
import FavoriteCountService from "../../Service/FavoriteCountService.js";


export default class FavoriteButton extends MenuIcon {

    contentId;

    render() {

        let local = this;

        this.label = "Favorite";

        let countService = new FavoriteCountService();
        countService.contentId = this.contentId;
        countService.onDataRow = function (dataRow) {
            //p.text = dataRow.count_text+" Items";

            if (dataRow.count === 0) {
                local.icon = "bookmark";
            } else {
                local.icon = "bookmark-fill";
            }

        };
        countService.sendRequest();


        this.onClick = function () {

            let service = new FavoritePostService();
            service.contentId = local.contentId;
            service.onFinished = function () {
                local.icon = "bookmark-fill";
            };
            service.sendRequest();

        };

    }

}
