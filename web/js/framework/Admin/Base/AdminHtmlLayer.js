import DivContainer from "../../../html/Content/Div.js";
import DisplayStyle from "../../../html/Style/Display.js";
import BaseContainerList from "../../../html/Base/BaseList.js";
import Debug from "../../../core/Debug/Debug.js";
import DocumentContainer from "../../../html/Document/Document.js";

// AdminSlider
export default class AdminHtmlLayer extends DivContainer {


    currentSlideIndex = 0;

    maxIndex = 0;


    load() {

        let local=this;

        this.maxIndex = this._htmlElement.children.length

        let dotList = new BaseContainerList("admin-carousel-dot-item");
        dotList.onClick = function (event) {

            let imageIndex = event.currentTarget.getAttribute("data-image-index");
            //local.currentSlideIndex = imageIndex;
            local.showLayer(imageIndex);

            //alert(event.getAttribute('data-image-index'));
            //(new Debug()).write(imageIndex);
            
            /*let imageIndex = this.getAttribute("image-index");
            alert(imageIndex);*/

        };



        let document = new DocumentContainer();
        document.onKeyDown = function (event) {

            //(new Debug()).write(event.code);

            if (event.code === "ArrowLeft") {
                local.showPreviousLayer();
            }

            if (event.code ===  "ArrowRight") {
                local.showNextLayer();
            }

        };


    }


    /*
        hasItem() {

            let value = false;
            if (this._layerList.length > 0) {
                value = true;
            }
            return value;

        }


        showLayer(index) {

            for (let n = 0; n < this._layerList.length; n++) {
                this._layerList[n].display = DisplayStyle.NONE;
            }

            if (this._layerList[index] !== undefined) {
                this._layerList[index].display = DisplayStyle.INLINE;
            }

        }*/


    //let slideIndex = 1;
    //showSlides(slideIndex);

// Next/previous controls
    /*  function plusSlides(n) {
          showSlides(slideIndex += n);
      }

  // Thumbnail image controls
      function currentSlide(n) {
          showSlides(slideIndex = n);
      }

      function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
      }*/


    showPreviousLayer() {

        if (this.currentSlideIndex > 0) {
            this.currentSlideIndex--;
            this.showLayer(this.currentSlideIndex);
        }


    }


    showNextLayer() {

        if (this.currentSlideIndex < (this.maxIndex-1)) {
            this.currentSlideIndex++;

            //(new Debug()).write(this.currentSlideIndex +" "+ this.maxIndex);

            this.showLayer(this.currentSlideIndex);
        }


    }


    showLayer(index) {

        //(new Debug()).write("index: "+index);

        //let i;
        //let slides = document.getElementsByClassName("mySlides");

        this.currentSlideIndex=index;

        let dots = new DivContainer();  // document.getElementsByClassName("dot");
        dots.fromId("admin-carousel-dot");


        /*if (n > this._htmlElement.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }*/


        //this.maxIndex = this._htmlElement.children.length

        for (let i = 0; i < (this.maxIndex); i++) {
            this._htmlElement.children[i].style.display = DisplayStyle.NONE;
            dots._htmlElement.children[i].classList.remove("admin-carousel-dot-active");
            //dots._htmlElement.children[i].style.display = DisplayStyle.NONE;
        }
        /*for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }*/
        this._htmlElement.children[index].style.display = "block";
        dots._htmlElement.children[index].classList.add("admin-carousel-dot-active");


        let previousIcon = new DivContainer();
        previousIcon.fromId("admin-carousel-previous-icon");
        if (index === 0) {
            previousIcon.display = DisplayStyle.NONE;
        } else {
            previousIcon.display = DisplayStyle.INLINE;
        }


        let nextIcon = new DivContainer();
        nextIcon.fromId("admin-carousel-next-icon");
        if (index === (this.maxIndex - 1)) {
            nextIcon.display = DisplayStyle.NONE;
        } else {
            nextIcon.display = DisplayStyle.INLINE;
        }


        //dots[slideIndex - 1].className += " active";

    }


}


