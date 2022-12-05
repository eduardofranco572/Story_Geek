
//trocar imagem compra

function img1(){
    document.getElementById('imgprincipal').src="../img/roupas/imgrp1.jpg";

}

function img2(){
    document.getElementById('imgprincipal').src="../img/roupas/imgrp2.jpg";

}

function img3(){
    document.getElementById('imgprincipal').src="../img/ropas2/imgp1.png";

}

function img4(){
    document.getElementById('imgprincipal').src="../img/ropas2/imgp2.png";

}

function img5(){
    document.getElementById('imgprincipal').src="../img/ropas2/imgp3.png";

}

function img6(){
    document.getElementById('imgprincipal').src="../img/roupas/imgrp3.jpg";

}

function img7(){
    document.getElementById('imgprincipal').src="../img/roupas/imgrp4.jpg";

}

function img8(){
    document.getElementById('imgprincipal').src="../img/ropas2/imgp4.png";

}

//carregar imagem

function readImage() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("img-input").addEventListener("change", readImage, false);

function readImage2() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview2").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("img-input2").addEventListener("change", readImage2, false);


function readImage3() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview3").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("img-input3").addEventListener("change", readImage3, false);



function readImage4() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview4").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("img-input4").addEventListener("change", readImage4, false);

function readImage5() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview5").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("img-input5").addEventListener("change", readImage5, false);



