function formSwitchThird() {
    hoge = document.getElementsByName('switch')
    if (hoge[0].checked) {
        // 好きな食べ物が選択されたら下記を実行します
        document.getElementById('default').style.display = "";
        document.getElementById('another').style.display = "none";
    } else if (hoge[1].checked) {
        // 好きな場所が選択されたら下記を実行します
        document.getElementById('default').style.display = "";
        document.getElementById('another').style.display = "none";
    } else if (hoge[2].checked) {
        // 好きな場所が選択されたら下記を実行します
        document.getElementById('default').style.display = "none";
        document.getElementById('another').style.display = "";
    }
}
window.addEventListener('load', formSwitchThird());