const colorPicker  = document.querySelectorAll("#container input[type=color");
const  iconColor = colorPicker[0] 

/****Color Change function */
function setColor(color){
$("#materialIcon").css("color",color)
}

iconColor.addEventListener("input",function(){
    setColor(this.value)
})

/******************size Change*************8 */
const sizeRangebar = document.getElementsByClassName("sizeChange")

for(var  i = 0; i < sizeRangebar.length;i++){
    sizeRangebar[i].addEventListener("input",function(){
        $("#materialIcon").css("font-size",this.value )
        sizeRangebar[1].value = this.value
        sizeRangebar[0].value = this.value
  })
}

/****Rotate Icon function******** */
const rotateRangebar = document.getElementsByClassName("rotateRangebar")

for (var i = 0; i<rotateRangebar.length;i++){
    rotateRangebar[i].addEventListener("input",function(){
        $("#materialIcon").css("transform",`rotate(${this.value}deg)`)
        rotateRangebar[0].value = this.value;
        rotateRangebar[1].value = this.value
    })
}

/****Stroke-width,Stroke-color  Icon Function */
const strokeRangebar = document.getElementsByClassName("strokeRangebar")
const strokeColor = colorPicker[3];
for (var i = 0;i<strokeRangebar.length;i++){
    strokeRangebar[i].addEventListener("input",function(){
        $("#materialIcon").css("-webkit-text-stroke-width",this.value+"px")
        strokeRangebar[0].value = this.value;
        strokeRangebar[1].value = this.value;
    })
}

colorPicker[3].addEventListener("input",function(){
    $("#materialIcon").css("-webkit-text-stroke-color",this.value)
})

/****Set Shapes function ******************************/
function setShapes(index){
$("#materialIcon").removeClass().addClass(index)
}
$("#shapesbtn a").on("click",function(){
    $("#shapesbtn a").removeClass("active")
    $(this).addClass("active")
})

/***********Set borderStyle function******* */
function materialSetBorder(border){
    $("#materialIcon").css("border-style",border)

}
