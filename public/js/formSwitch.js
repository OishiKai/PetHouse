function formSwitch() {
    hoge = document.getElementsByName('switch')
    console.log(hoge.length);
    if (hoge.length == 1){
        if (hoge[0].checked) {
            // 好きな食べ物が選択されたら下記を実行します
            document.getElementById('default').style.display = "";
            document.getElementById('another').style.display = "none";
        } else{
            // 好きな場所が選択されたら下記を実行します
            document.getElementById('default').style.display = "none";
            document.getElementById('another').style.display = "";
        }
    }else{
        if (hoge[0].checked) {
            // 好きな食べ物が選択されたら下記を実行します
            document.getElementById('default').style.display = "";
            document.getElementById('another').style.display = "none";
        } else if (hoge[1].checked) {
            // 好きな場所が選択されたら下記を実行します
            document.getElementById('default').style.display = "none";
            document.getElementById('another').style.display = "";
        }
    }
}
window.addEventListener('load', formSwitch());
