import AdminImage from "../Image/AdminImage.js";
import FontAwesomeIcon from "../../FontAwesome/FontAwesomeIcon.js";
import AdminLayer from "../Base/AdminLayer.js";


export default class AdminCarousel extends AdminLayer {


    addImage(imageUrl) {

        let img = new AdminImage();
        img.src = imageUrl;
        img.addCssClass("admin-carousel-item");

        this.addLayer(img);

        return this;

    }





    render() {

        let local = this;
        let slideIndex = 0;

        let previousIcon = new FontAwesomeIcon(this);
        previousIcon.addCssClass('icon-button');
        previousIcon.icon = 'chevron-left';
        previousIcon.onClick = function () {
            slideIndex--;
            local.showLayer(slideIndex);
        }

        let nextIcon = new FontAwesomeIcon(this);
        nextIcon.addCssClass('icon-button');
        nextIcon.icon = 'chevron-right';
        nextIcon.onClick = function () {
            slideIndex++;
            local.showLayer(slideIndex);
        };



    }


}


