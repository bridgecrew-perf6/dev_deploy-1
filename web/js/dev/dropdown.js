import DocumentContainer from "../html/Document/Document.js";
import BaseContainerList from "../html/Base/BaseList.js";

let document = new DocumentContainer();
document.onLoaded = function () {

    let dropdown = new BaseContainerList("dropdown-btn");
    dropdown.onClick = function () {

        //alert("toggle");
        //dropdown-content

        let dropdownContent = new BaseContainerList("dropdown-content");
        dropdownContent.toggle = "show";

    };

    //dropdown.toggle = "show";

};



/*
window.onclick = function(event) {
    if (!event.target.matches(".dropdown-btn")) {

        let dropdownContent = new BaseContainerList("dropdown-content");
        dropdownContent.toggle = "show";

        /*
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }*/
  /*  }
}*/










/*function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}*/