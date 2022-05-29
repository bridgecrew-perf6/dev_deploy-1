import PageContainer from "../../../framework/Page/PageContainer.js";
import LoaderContainer from "../../../framework/Com/Loader/Loader.js";
import H5Container from "../../../html/Title/H5.js";
import ParagraphContainer from "../../../html/Content/Paragraph.js";
import ServiceRequest from "../../../framework/Service/ServiceRequest.js";
import DateFormat from "../../../core/Date/DateFormat.js";
import BootstrapCard from "../../../framework/Bootstrap/Card/BootstrapCard.js";

export default class AllgemeineLagePage extends PageContainer {


   loadPage() {
       this.pageTitle="Allgemeine Lage";
       this.pageUrl="allgemeine-lage";
   }


    render() {

        let loader = new LoaderContainer(this);

        let card=new BootstrapCard(this);

        //let h5 = new H5Container(this);
        //let p = new ParagraphContainer(this);*/

        let service = new ServiceRequest("meteoschweiz-allgemeinelage");
        service.onDataRow = function (dataRow) {

            /*h5.text = (new DateFormat(dataRow.datum)).getGermanDateTime();
            p.text = dataRow.allgemeine_lage;*/
            card.cardTitle= (new DateFormat(dataRow.datum)).getGermanDateTime();
            card.cardText= dataRow.allgemeine_lage;

            loader.removeContainer();
        };
        service.sendRequest();



    }


}