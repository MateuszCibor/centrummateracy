if(window.innerWidth > 900) {

    var d = document.querySelectorAll(".cont");
    var e= document.querySelectorAll(".tooltip-inner");
    d.forEach(function (input, key) {
        input.addEventListener("mouseover", function () {

            e.forEach(function (inputs, keys) {

                if (key == keys) {
                    inputs.style.display = "block";
                }
            })
        });
        input.addEventListener("mouseleave", function () {

            e.forEach(function (inputs, keys) {
                if (key == keys) {
                    inputs.style.display = "none";
                }
            })
        });
    });


    var x = document.querySelectorAll(".js-product-miniature-wrapper.product-carousel");
    var z = document.querySelectorAll(".add_product");
    x.forEach(function (input, key) {
        input.addEventListener("mouseover", function () {

            z.forEach(function (inputs, keys) {

                if (key == keys) {
                    inputs.style.display = "block";
                }
            })
        });
        input.addEventListener("mouseleave", function () {

            z.forEach(function (inputs, keys) {
                if (key == keys) {
                    inputs.style.display = "none";
                }
            })
        });
    });

    var x = document.querySelectorAll(".js-product-miniature-wrapper");
    var z = document.querySelectorAll(".add_product");
    x.forEach(function (input, key) {
        input.addEventListener("mouseover", function () {

            z.forEach(function (inputs, keys) {

                if (key == keys) {
                    inputs.style.display = "block";
                }
            })
        });
        input.addEventListener("mouseleave", function () {

            z.forEach(function (inputs, keys) {
                if (key == keys) {
                    inputs.style.display = "none";
                }
            })
        });
    });

}else{
    var d = document.querySelectorAll(".cont");
    var e= document.querySelectorAll(".tooltip-inner");
    d.forEach(function (input, key) {
        input.addEventListener("mouseover", function () {

            e.forEach(function (inputs, keys) {

                if (key == keys) {
                    inputs.style.display = "block";
                }
            })
        });
        input.addEventListener("mouseleave", function () {

            e.forEach(function (inputs, keys) {
                if (key == keys) {
                    inputs.style.display = "none";
                }
            })
        });
    });


}

let button = 1; document.querySelector(".topDown").addEventListener('click',function(){ if(button == 1){ document.querySelector(".cointeiner1").style.bottom = "0px";
    document.querySelector(".footer-bar__expand-button-arrow").style.transform = "rotate(90deg)"; button = 0; } else{ document.querySelector(".cointeiner1").style.bottom = "-502px"; button = 1; document.querySelector(".footer-bar__expand-button-arrow").style.transform = "rotate(270deg)";} })




document.querySelector(".baner-lewy").addEventListener('click',function (){
    document.querySelector(".box_prawy").style.display = "block";
    document.querySelector(".baner-lewy").style.display = "none";
});
document.querySelector(".box_prawy").addEventListener('click',function (){
    document.querySelector(".baner-lewy").style.display = "block";
    document.querySelector(".box_prawy").style.display = "none";
});
$(window).scroll(function(){
    var top = $(window).scrollTop();
    var find_class_small = $.contains('nav', '.small');
     if(window.innerWidth > 1360)
     {
    if(top > 500 && find_class_small == false) { // tu zmieniamy wysokosc - gdy strona zjedzie 50px w dol
        document.querySelector(".baner-lewy").style.display = "none";
        document.querySelector(".box_prawy").style.display = "block";
        document.querySelector(".baner-lewy").style.transition = "1s";


    }
    else {
        document.querySelector(".baner-lewy").style.display = "block";
        document.querySelector(".box_prawy").style.display = "none";
        document.querySelector(".baner-lewy").style.transition = "1s";
    }
     }
});




