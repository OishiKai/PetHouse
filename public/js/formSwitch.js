function formSwitch() {
    hoge = document.getElementsByName('maker')
    if (hoge[0].checked) {
        // 好きな食べ物が選択されたら下記を実行します
        document.getElementById('fosterForms').style.display = "";
        document.getElementById('conservationForms').style.display = "none";
    } else if (hoge[1].checked) {
        // 好きな場所が選択されたら下記を実行します
        document.getElementById('fosterForms').style.display = "none";
        document.getElementById('conservationForms').style.display = "";
    }
}
window.addEventListener('load', formSwitch());