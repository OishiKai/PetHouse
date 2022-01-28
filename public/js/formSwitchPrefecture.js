function formSwitchPrefecture(state) {
    if (state.match('Child')){
        len = state.length - 5
        parent = state.substring(0, len)
        console.log(parent)
        hoge = document.getElementById(parent).checked = false;
    }else{
        target = state + 'Child'
        for(i=1; i <= 10; i++){
            tar = target + String(i)
            console.log(target);
            hoge = document.getElementById(tar).checked = true;
        }
    }

}
window.addEventListener('load', formSwitchPrefecture());
