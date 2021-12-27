function formSwitchPrefecture(state) {
    hoge = document.getElementsByName(state);
    pre = state + 'Prefectures'
    console.log(state);
    console.log(pre);
    console.log(hoge);
    if (hoge[0].checked) {
        document.getElementById(pre).style.display = "";
    } else{
        document.getElementById(pre).style.display = "none";
    }

    // if (hoge.length == 1){
    //     if (hoge[0].checked) {
    //         // 好きな食べ物が選択されたら下記を実行します
    //         document.getElementById('default').style.display = "";
    //         document.getElementById('another').style.display = "none";
    //     } else{
    //         // 好きな場所が選択されたら下記を実行します
    //         document.getElementById('default').style.display = "none";
    //         document.getElementById('another').style.display = "";
    //     }
    // }else{
    //     if (hoge[0].checked) {
    //         // 好きな食べ物が選択されたら下記を実行します
    //         document.getElementById('default').style.display = "";
    //         document.getElementById('another').style.display = "none";
    //     } else if (hoge[1].checked) {
    //         // 好きな場所が選択されたら下記を実行します
    //         document.getElementById('default').style.display = "none";
    //         document.getElementById('another').style.display = "";
    //     }
    // }
}
window.addEventListener('load', formSwitchPrefecture());
