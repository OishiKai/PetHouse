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
}
window.addEventListener('load', formSwitchPrefecture());
