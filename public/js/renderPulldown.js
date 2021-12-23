function renderPulldown() {
    var value = document.getElementById("renderPulldown").value;
    console.log(value);
    switch(value){
        case '1' :
            console.log('hi');
            document.getElementById('pd1').style.display = "";
            document.getElementById('pd2').style.display = "none";
            document.getElementById('pd3').style.display = "none";
            document.getElementById('pd4').style.display = "none";
            document.getElementById('pd5').style.display = "none";
            document.getElementById('pd6').style.display = "none";
            document.getElementById('pd7').style.display = "none";
            document.getElementById('pd8').style.display = "none";
            document.getElementById('pd9').style.display = "none";
            break;
        case '2':
            document.getElementById('pd1').style.display = "";
            document.getElementById('pd2').style.display = "";
            document.getElementById('pd3').style.display = "none";
            document.getElementById('pd4').style.display = "none";
            document.getElementById('pd5').style.display = "none";
            document.getElementById('pd6').style.display = "none";
            document.getElementById('pd7').style.display = "none";
            document.getElementById('pd8').style.display = "none";
            document.getElementById('pd9').style.display = "none";
            break;
        case '3' :
            document.getElementById('pd1').style.display = "";
            document.getElementById('pd2').style.display = "";
            document.getElementById('pd3').style.display = "";
            document.getElementById('pd4').style.display = "none";
            document.getElementById('pd5').style.display = "none";
            document.getElementById('pd6').style.display = "none";
            document.getElementById('pd7').style.display = "none";
            document.getElementById('pd8').style.display = "none";
            document.getElementById('pd9').style.display = "none";
            break;
        case '4':
            document.getElementById('pd1').style.display = "";
            document.getElementById('pd2').style.display = "";
            document.getElementById('pd3').style.display = "";
            document.getElementById('pd4').style.display = "";
            document.getElementById('pd5').style.display = "none";
            document.getElementById('pd6').style.display = "none";
            document.getElementById('pd7').style.display = "none";
            document.getElementById('pd8').style.display = "none";
            document.getElementById('pd9').style.display = "none";
            break;
        case '5' :
            document.getElementById('pd1').style.display = "";
            document.getElementById('pd2').style.display = "";
            document.getElementById('pd3').style.display = "";
            document.getElementById('pd4').style.display = "";
            document.getElementById('pd5').style.display = "";
            document.getElementById('pd6').style.display = "none";
            document.getElementById('pd7').style.display = "none";
            document.getElementById('pd8').style.display = "none";
            document.getElementById('pd9').style.display = "none";
            break;
        case '6' :
            document.getElementById('pd1').style.display = "";
            document.getElementById('pd2').style.display = "";
            document.getElementById('pd3').style.display = "";
            document.getElementById('pd4').style.display = "";
            document.getElementById('pd5').style.display = "";
            document.getElementById('pd6').style.display = "";
            document.getElementById('pd7').style.display = "none";
            document.getElementById('pd8').style.display = "none";
            document.getElementById('pd9').style.display = "none";
            break;
        case '7':
            document.getElementById('pd1').style.display = "";
            document.getElementById('pd2').style.display = "";
            document.getElementById('pd3').style.display = "";
            document.getElementById('pd4').style.display = "";
            document.getElementById('pd5').style.display = "";
            document.getElementById('pd6').style.display = "";
            document.getElementById('pd7').style.display = "";
            document.getElementById('pd8').style.display = "none";
            document.getElementById('pd9').style.display = "none";
            break;
        case '8' : 
            document.getElementById('pd1').style.display = "";
            document.getElementById('pd2').style.display = "";
            document.getElementById('pd3').style.display = "";
            document.getElementById('pd4').style.display = "";
            document.getElementById('pd5').style.display = "";
            document.getElementById('pd6').style.display = "";
            document.getElementById('pd7').style.display = "";
            document.getElementById('pd8').style.display = "";
            document.getElementById('pd9').style.display = "none";
            break;
        case '9' :
            document.getElementById('pd1').style.display = "";
            document.getElementById('pd2').style.display = "";
            document.getElementById('pd3').style.display = "";
            document.getElementById('pd4').style.display = "";
            document.getElementById('pd5').style.display = "";
            document.getElementById('pd6').style.display = "";
            document.getElementById('pd7').style.display = "";
            document.getElementById('pd8').style.display = "";
            document.getElementById('pd9').style.display = "";
            break;
        default:
            document.getElementById('pd1').style.display = "";
            document.getElementById('pd2').style.display = "none";
            document.getElementById('pd3').style.display = "none";
            document.getElementById('pd4').style.display = "none";
            document.getElementById('pd5').style.display = "none";
            document.getElementById('pd6').style.display = "none";
            document.getElementById('pd7').style.display = "none";
            document.getElementById('pd8').style.display = "none";
            document.getElementById('pd9').style.display = "none";
            break;
    }
}

window.addEventListener('load', renderPulldown());