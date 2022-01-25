function passwordDisplay(state) {
    hoge = document.getElementsByName(state);
    elm = document.getElementById('password')
    if (hoge[0].checked) {
        elm.type = "text";
    } else{
        elm.type = "password";
    }
}
window.addEventListener('load', passwordDisplay());
