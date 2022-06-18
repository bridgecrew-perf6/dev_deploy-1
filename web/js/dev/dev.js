import DocumentContainer from "../html/Document/Document.js";
import DivContainer from "../html/Content/Div.js";
import ParagraphContainer from "../html/Content/Paragraph.js";
import AdminCarousel from "../framework/Admin/Carousel/AdminCarousel.js";
import RatsmitgliedService from "../parlament/Service/RatsmitgliedService.js";
import AdminLayer from "../framework/Admin/Base/AdminLayer.js";
import AdminImage from "../framework/Image/AdminImage.js";
import AdminTabs from "../framework/Admin/Tabs/AdminTabs.js";
import FileContentForm from "../content_app/File/Com/Form/FileContentForm.js";
import ImageForm from "../content_app/File/Content/Image/ImageForm.js";
import {LargeTextForm} from "../content_app/LargeText/LargeTextForm.js";
import AdminButton from "../framework/Admin/Button/AdminButton.js";

let document = new DocumentContainer();
document.onLoaded = function () {

    let mainContent = (new DivContainer()).fromId("main-content");

    let tabs = new AdminTabs(mainContent);

    let one = new DivContainer();
    let p = new ParagraphContainer(one);
    p.text = "1";


    let btn=new AdminButton(one);
    btn.label="save";
    btn.onClick=function () {




    };


    let large=new LargeTextForm(one);
    large.serviceName="plenum-post";
    large.onAfterSubmit=function () {
      large.resetForm();
    };
    large.render();

    tabs.addTab("One", one);

    let two = new DivContainer();
    let p2 = new ParagraphContainer(two);
    p2.text = "2";

    let form= new ImageForm(two);  // new FileContentForm(two);
    form.render();


    tabs.addTab("Two", two);

    tabs.render();





    /*
    let carousel = new AdminCarousel(mainContent);

    let service = new RatsmitgliedService();
    service.onDataRow = function (dataRow) {

        /*carousel.addImage(dataRow.bild_url);

        let img = new AdminImage();
        img.src =dataRow.bild_url;  // imageUrl;
        img.addCssClass("admin-carousel-item");
        //img.render();

        carousel.addLayer(img);*/
/*
        let p = new ParagraphContainer();
        p.text = dataRow.ratsmitglied;
        carousel.addLayer(p);

    };
    service.onLoaded = function () {

        carousel.render();

        carousel.showLayer(0);

    };
    service.sendRequest();*/


    //tabs.addTab("Three");


    /*let button = new AdminButton(mainContent);
    button.label = "First";*/


};