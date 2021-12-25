function renderPulldown(num) {
    if (num == 1){
        var value = document.getElementById("housemate").value;
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
    }else if(num==2){
        var value = document.getElementById("allergy").value;
        console.log(value);
        switch(value){

            case 'なし' :
                console.log('hi');
                document.getElementById('allergyDetail').style.display = "none";
                break;
            case '1' :
                document.getElementById('allergyDetail').style.display = "";
                document.getElementById('al1').style.display = "";
                document.getElementById('al2').style.display = "none";
                document.getElementById('al3').style.display = "none";
                document.getElementById('al4').style.display = "none";
                document.getElementById('al5').style.display = "none";
                document.getElementById('al6').style.display = "none";
                document.getElementById('al7').style.display = "none";
                document.getElementById('al8').style.display = "none";
                document.getElementById('al9').style.display = "none";
                break;
            case '2' :
                document.getElementById('allergyDetail').style.display = "";
                document.getElementById('al1').style.display = "";
                document.getElementById('al2').style.display = "";
                document.getElementById('al3').style.display = "none";
                document.getElementById('al4').style.display = "none";
                document.getElementById('al5').style.display = "none";
                document.getElementById('al6').style.display = "none";
                document.getElementById('al7').style.display = "none";
                document.getElementById('al8').style.display = "none";
                document.getElementById('al9').style.display = "none";
                break;
            case '3':
                document.getElementById('allergyDetail').style.display = "";
                document.getElementById('al1').style.display = "";
                document.getElementById('al2').style.display = "";
                document.getElementById('al3').style.display = "";
                document.getElementById('al4').style.display = "none";
                document.getElementById('al5').style.display = "none";
                document.getElementById('al6').style.display = "none";
                document.getElementById('al7').style.display = "none";
                document.getElementById('al8').style.display = "none";
                document.getElementById('al9').style.display = "none";
                break;
            case '4' :
                document.getElementById('allergyDetail').style.display = "";
                document.getElementById('al1').style.display = "";
                document.getElementById('al2').style.display = "";
                document.getElementById('al3').style.display = "";
                document.getElementById('al4').style.display = "";
                document.getElementById('al5').style.display = "none";
                document.getElementById('al6').style.display = "none";
                document.getElementById('al7').style.display = "none";
                document.getElementById('al8').style.display = "none";
                document.getElementById('al9').style.display = "none";
                break;
            case '5' :
                document.getElementById('allergyDetail').style.display = "";
                document.getElementById('al1').style.display = "";
                document.getElementById('al2').style.display = "";
                document.getElementById('al3').style.display = "";
                document.getElementById('al4').style.display = "";
                document.getElementById('al5').style.display = "";
                document.getElementById('al6').style.display = "none";
                document.getElementById('al7').style.display = "none";
                document.getElementById('al8').style.display = "none";
                document.getElementById('al9').style.display = "none";
                break;
            case '6':
                document.getElementById('allergyDetail').style.display = "";
                document.getElementById('al1').style.display = "";
                document.getElementById('al2').style.display = "";
                document.getElementById('al3').style.display = "";
                document.getElementById('al4').style.display = "";
                document.getElementById('al5').style.display = "";
                document.getElementById('al6').style.display = "";
                document.getElementById('al7').style.display = "none";
                document.getElementById('al8').style.display = "none";
                document.getElementById('al9').style.display = "none";
                break;
            case '7' : 
                document.getElementById('allergyDetail').style.display = "";
                document.getElementById('al1').style.display = "";
                document.getElementById('al2').style.display = "";
                document.getElementById('al3').style.display = "";
                document.getElementById('al4').style.display = "";
                document.getElementById('al5').style.display = "";
                document.getElementById('al6').style.display = "";
                document.getElementById('al7').style.display = "";
                document.getElementById('al8').style.display = "none";
                document.getElementById('al9').style.display = "none";
                break;
            case '8' :
                document.getElementById('allergyDetail').style.display = "";
                document.getElementById('al1').style.display = "";
                document.getElementById('al2').style.display = "";
                document.getElementById('al3').style.display = "";
                document.getElementById('al4').style.display = "";
                document.getElementById('al5').style.display = "";
                document.getElementById('al6').style.display = "";
                document.getElementById('al7').style.display = "";
                document.getElementById('al8').style.display = "";
                document.getElementById('al9').style.display = "none";
                break;
            case '9' :
                document.getElementById('allergyDetail').style.display = "";
                document.getElementById('al1').style.display = "";
                document.getElementById('al2').style.display = "";
                document.getElementById('al3').style.display = "";
                document.getElementById('al4').style.display = "";
                document.getElementById('al5').style.display = "";
                document.getElementById('al6').style.display = "";
                document.getElementById('al7').style.display = "";
                document.getElementById('al8').style.display = "";
                document.getElementById('al9').style.display = "";
                break;
            default:
                document.getElementById('allergyDetail').style.display = "none";
                document.getElementById('al1').style.display = "none";
                document.getElementById('al2').style.display = "none";
                document.getElementById('al3').style.display = "none";
                document.getElementById('al4').style.display = "none";
                document.getElementById('al5').style.display = "none";
                document.getElementById('al6').style.display = "none";
                document.getElementById('al7').style.display = "none";
                document.getElementById('al8').style.display = "none";
                document.getElementById('al9').style.display = "none";
                break;
        }
    }
}

window.addEventListener('load', renderPulldown());