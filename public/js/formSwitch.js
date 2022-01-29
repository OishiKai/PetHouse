function formSwitch() {
    hoge = document.getElementsByName('switch')
    if (hoge[0].checked) {
        document.getElementById('default').style.display = "";
        document.getElementById('another').style.display = "none";
    }else{
        document.getElementById('default').style.display = "none";
        document.getElementById('another').style.display = "";
    }
}
window.addEventListener('load', formSwitch());
