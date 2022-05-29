import DocumentContainer from "../html/Document/Document.js";
import H1Container from "../html/Title/H1.js";
import ImageContainer from "../html/Image/Image.js";
import DisplayStyle from "../html/Style/Display.js";
import ParagraphContainer from "../html/Content/Paragraph.js";
import ButtonContainer from "../html/Form/Button.js";
import DivContainer from "../html/Content/Div.js";

let document = new DocumentContainer();
document.onLoaded = function () {


    let btn=new ButtonContainer();
    btn.fromId("open");
    btn.onClick=function () {

        //alert("123123");


        let nav=new DivContainer();
        nav.fromId("sidenav");
        nav.widthPixel=250;

        let main=new DivContainer();
        main.fromId("main");
        main.marginLeftPixel=250;


        /*
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";*/

    };


    /*
    let showStatus=false;

    let h1 = new H1Container();
    h1.fromId("helloworld");
    h1.onClick = function () {
        //alert("hello");


        /*
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";*/




        /*
        let img = new ImageContainer();
        img.fromId("bild");

        if (showStatus) {
            img.display = DisplayStyle.NONE;
        } else {
        img.display = DisplayStyle.BLOCK;
        }

        let output = new ParagraphContainer();
        output.fromId("output");
        output.text = "123123123";

        showStatus=!showStatus;*/

    //};


};