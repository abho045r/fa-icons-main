var x,y,i;
        
function ColorPicker(x,y){
    var val= y.innerHTML;
    
    document.getElementById('selectedBox').style.backgroundColor=x;
    document.getElementById('selectedBox').innerHTML=val;
    document.getElementById('textColor').style.color=x;
    document.getElementById('textColor').innerHTML=x.toUpperCase();

    /**/
    var activeState = document.getElementsByClassName("circle-btn");
    console.log(activeState);
    for(i=0; i<activeState.length; i++){
        console.log(activeState)+1;
        activeState[i].classList.remove('active');
    }
    y.classList.add('active');
   
}
