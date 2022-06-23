import DocumentContainer from "../../../html/Document/Document.js";
import DivContainer from "../../../html/Content/Div.js";
import Debug from "../../../core/Debug/Debug.js";

let document = new DocumentContainer();
document.onLoaded = function () {

    let showMenu = false;

    let content = new DivContainer();
    content.fromId("admin-navbar-menu");

    let italic = new DivContainer();
    italic.fromId("admin-navbar-hamburger");
    italic.onClick = function () {

        //(new Debug()).write(showMenu);

        //alert(content.width);

        //if ((content.display === DisplayStyle.NONE)||(content.display === "")) {
        if (!showMenu) {
            //content.display = DisplayStyle.BLOCK;
            content.widthPixel = 300;
            //content.heightPixel=300;
        } else {
            //content.display =DisplayStyle.NONE
            content.width = 0;
            //content.height=0;
        }

        showMenu = !showMenu;

    };


    let close=new DivContainer();
    close.fromId("admin-navbar-close");
    close.onClick=function () {
        content.width = 0;
        showMenu = false;
    };



    window.addEventListener('mouseup', function (e) {
        //var container = document.getElementById('container');
        if (!content._htmlElement.contains(e.target)) {

            content.width = 0;
            showMenu = false;
            //content.height=0;

            //content.display =DisplayStyle.NONE;
            /*container.style.display = 'none';*/
        }
    });


};


