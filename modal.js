var counter = 0;
var keysLeft = 0;

//function that counts how many times the key image is clicked & displays correct message
function addOne(){
    counter++
    keysLeft= 4-counter;
    // localStorage.setItem("keysLeft", 4-counter);
    // console.log(localStorage.setItem("keysLeft", 4-counter));
    if (keysLeft==3) {
            $('#myModal1').modal();
        }
        if (keysLeft==2) {
            $('#myModal2').modal();
        }
        if (keysLeft==1) {
            $('#myModal3').modal();
        }
        if (keysLeft==0){
            $('#myModal4').modal();
        }
}

function deleteClick1() {
    document.getElementById('modal1').removeAttribute("onclick");
}
function deleteClick2() {
    document.getElementById('modal2').removeAttribute("onclick");
}
function deleteClick3() {
    document.getElementById('modal3').removeAttribute("onclick");
}
function deleteClick4() {
    document.getElementById('modal4').removeAttribute("onclick");
}
