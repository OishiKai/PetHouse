function formSwitch() {
    hoge = document.getElementsByName('maker')
    if (hoge[0].checked) {
        // 好きな食べ物が選択されたら下記を実行します
        document.getElementById('fosterForms').style.display = "";
        document.getElementById('conservationForms').style.display = "none";
        // var inputItem = document.getElementById("conservationForms").getElementsByTagName("input");
        // for(var i=0; i<inputItem.length; i++){
        // inputItem[i].checked = "";
        // }
    } else if (hoge[1].checked) {
        // 好きな場所が選択されたら下記を実行します
        document.getElementById('fosterForms').style.display = "none";
        var inputItem = document.getElementById("fosterForms").getElementsByTagName("input");
        for(var i=0; i<inputItem.length; i++){
        inputItem[i].checked = "";
        }
        document.getElementById('conservationForms').style.display = "";
    } else {
        document.getElementById('fosterForms').style.display = "none";
        var inputItem = document.getElementById("fosterForms").getElementsByTagName("input");
        for(var i=0; i<selectItem.length; i++){
        inputItem[i].value = "";
        }
        document.getElementById('conservationForms').style.display = "none";
        var inputItem = document.getElementById("conservationForms").getElementsByTagName("input");
        for(var i=0; i<inputItem.length; i++){
            inputItem[i].checked = "";
        }
    }
}
window.addEventListener('load', formSwitch());