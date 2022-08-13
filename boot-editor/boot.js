/************************************Stop dropdown close on click******************************************* */
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});
/*********************Boot Color function*********************************************************************/

function bootIconColorPicker(colorCode){
  $("#boot-icon").css("color",colorCode);
}

/*****************************Boot Color Picker Function************************************************** */
const bootColorPicker1 = document.querySelector("#boot-picker-1");
const bootColorPicker2 = document.querySelector("#boot-picker-2");
const bootColorPicker3 = document.querySelector("#boot-picker-3");
function setColor(){
  $("#boot-icon").css("color",bootColorPicker1.value);
}

function setGradient(){
  $("#boot-icon").css("-webkit-background-clip","text");
  $("#boot-icon").css("color","transparent")
  $('#boot-icon').css("background-image", `-webkit-linear-gradient(${bootColorPicker2.value},${bootColorPicker3.value})`);
  

};
bootColorPicker1.addEventListener("input",setColor );
bootColorPicker2.addEventListener("input", setGradient);
bootColorPicker3.addEventListener("input", setGradient);

/**********BOOT SIZE ROTATE STROKE FUNCTION *******************************************************************/
const bootIconSize = document.querySelector("#bootIcon-Size");
const bootIconRotate = document.querySelector("#bootIcon-Rotate");
const bootIconStroke = document.querySelector("#bootIcon-Stroke");
const bootIconStrokeValue = document.querySelector("#bootIconStrokeValue")
const bootIconSizeValue = document.querySelector("#bootIconSizeValue")
const bootIconRotateValue = document.querySelector("#bootIconRotateValue")
const bootIconStrokeColor = document.querySelector("#bootIconStrokeColor")
function setSize(size){
    $("#boot-icon").css({"font-size": size+"px"});
    
}
function setOpacity(opacity){
  
  $("#boot-icon").css("opacity",opacity);
}
function setStroke(stroke){
  $("#boot-icon").css("-webkit-text-stroke-width",stroke +"px")
   
  }

 function setStrokeColor(color){
  $("#boot-icon").css("-webkit-text-stroke-color", color)
 } 

bootIconSize.addEventListener("input",function(){
     setSize(this.value)
     bootIconSizeValue.value = this.value
});
bootIconSizeValue.addEventListener("input",function(){
    setSize(this.value)
    bootIconSize.value = this.value
})
bootIconRotate.addEventListener("input",function(){
    setOpacity(this.value)
    bootIconRotateValue.value = this.value
});
bootIconRotateValue.addEventListener("input",function(){
   setRotate(this.value)
   bootIconRotate.value = this.value
})
bootIconStroke.addEventListener("input",function(){
     setStroke(this.value)
     bootIconStrokeValue.value = this.value
});
bootIconStrokeValue.addEventListener("input",function(){
    setStroke(this.value)
    bootIconStroke.value = this.value 
})
bootIconStrokeColor.addEventListener("input",function(){
  setStrokeColor(this.value)
})

/************************Boot Box Shadow Function *****************************************************************/
const bootXoffset = document.getElementById("bootXoffset");
const bootYoffset = document.getElementById("bootYoffset");
const bootBlurRadius = document.getElementById("boot-blur-radius");
const bootSpreadRadius = document.getElementById("boot-spread-radius");
const bootInsetRadius = document.getElementById("boot-inset-radius");
const settings = document.querySelectorAll(".setting input");
const bootXOffsetValue = document.getElementById("bootXOffsetValue");
const bootYOffsetValue = document.getElementById("bootYOffsetValue");
const bootBlur_RadiusValue = document.getElementById("bootBlur_RadiusValue");
const bootSpread_RadiusValue = document.getElementById("bootSpread_RadiusValue");
const bootShadow_ColorPicker = document.getElementById("bootShadow-ColorPicker");

settings.forEach(setting =>{
  setting.addEventListener("input",bootBoxShadow);
})
function bootBoxShadow(event){
  const boxShadow = `${bootXoffset.value}px ${bootYoffset.value}px ${bootBlurRadius.value}px ${bootSpreadRadius.value}px ${bootShadow_ColorPicker.value} ${bootInsetRadius.checked ? "inset":" "}`;
  $("#boot-icon").css({"box-shadow": boxShadow});
  bootXOffsetValue.value = bootXoffset.value;
  bootYOffsetValue.value = bootYoffset.value;
  bootBlur_RadiusValue.value= bootBlurRadius.value;
  bootSpread_RadiusValue.value= bootSpreadRadius.value;
}

/******************Box Shadow Reset button function **********************************************************/
$("#bootShadowReset").on("click",function(){
  $("#boot-icon").css("box-shadow",'');
})

/****************************Text SHadow Function*************************************************************** */
const bootIconXoffset = document.getElementById("bootIconXoffset");
const bootIconYoffset = document.getElementById("bootIconYoffset");
const bootIcon_BlurRadius = document.getElementById("boot-icon-blur-radius");
const bootIcon_XoffsetValue = document.getElementById("bootIconXOffsetValue");
const bootIcon_YoffsetValue = document.getElementById("bootIconYOffsetValue");
const bootIcon_BlurRadiusValue = document.getElementById("bootIconBlurRadiusValue");
const iconsettings = document.querySelectorAll(".iconSetting input");
const bootIcon_ShadowColorPicker = document.getElementById("bootTextShadow-ColorPicker"); 
iconsettings.forEach(iconsetting =>{
  iconsetting.addEventListener("input",updateIconShadow);
})
function updateIconShadow(){
  const iconShadow = `${bootIconXoffset.value}px ${bootIconYoffset.value}px ${bootIcon_BlurRadius.value}px ${bootIcon_ShadowColorPicker.value}`
  $("#boot-icon").css("text-shadow", iconShadow);
  bootIcon_BlurRadiusValue.value = bootIcon_BlurRadius.value;
  bootIcon_XoffsetValue.value = bootIconXoffset.value;
  bootIcon_YoffsetValue.value = bootIconYoffset.value;
}

/******Icon Shadow Reset Button Function*************************************************************** */
$("#bootIcon-ShadowReset").on("click",function(){
  $("#boot-icon").css("text-shadow",'')
})


/***************Shapes Button*********************************************************** */
function setBorder(border){
  $("#boot-icon").css({"border":border} )
}
const boot_icon = document.getElementById("boot-icon")
bootOutlineShapes.addEventListener("click",function(){
  boot_icon.style.backgroundColor =""
  if(boot_icon.style.borderStyle ==""){
   setBorder("solid")
  }
})
/********************Shapes Padding Radius Border Function */
const bootIconPaddings = document.getElementsByClassName("bootIconPadding")
const bootIconRadius = document.getElementsByClassName("bootIconRadius")
const bootOutlineBorder = document.getElementsByClassName("bootOutlineBorder")
const bootIconPaddingValue = document.getElementsByClassName("bootIconPaddingValue")
const bootIconRadiusValue = document.getElementsByClassName("bootIconRadiusValue");
const bootOutlineBorderValue = document.getElementsByClassName("bootOutlineBorderValue")
const bootBorder_ColorPicker = document.getElementsByClassName("bootBorder_ColorPicker")
const bootBackgroundColorPicker = document.getElementById("bootBackgroundColorPkr")
const bootFilledShapes =  document.getElementById("bootFilledShapes")


function bootSetCSS(padding,radius,border,borderColor,backgroundColor){
  $("#boot-icon").css({"padding" : padding, "border-radius": radius +"%","border-width":border, "border-color" : borderColor, "background-color": backgroundColor})
}


/********FIlled Shapes Button Function**************************************************************************** */
bootFilledShapes.addEventListener("click",function(){
  if(boot_icon.style.backgroundColor ==""){
    bootSetCSS(undefined,undefined,undefined,undefined,"#f2f2f2")
    }
  })

/******Padding Function************************************************************************************** */
for (var i = 0; i < bootIconPaddings.length; i++) {
  bootIconPaddings[i].addEventListener('input',function(){
    bootSetCSS(this.value)
      for(var i = 0; i < bootIconPaddingValue.length; i++){
           bootIconPaddingValue[i].value = this.value
      }
 });
}
/**Radius Function******************************************************************************************************* */
for(var i = 0; i < bootIconRadius.length; i++){
  bootIconRadius[i].addEventListener("input",function(){
    bootSetCSS( undefined,this.value)
     for(var i = 0; i < bootIconRadiusValue.length; i++){
           bootIconRadiusValue[i].value = this.value
     }
})
}

/***********************Border Function************************************************************************ */
for(var i = 0; i < bootOutlineBorder.length; i++){
  bootOutlineBorder[i].addEventListener("input",function(){
 
    if(boot_icon.style.borderStyle ==''){
     $("#boot-icon").css("border","solid")
      bootSetCSS(undefined,undefined,this.value)
       for(var i = 0; i < bootOutlineBorderValue.length; i++){
           bootOutlineBorderValue[i].value = this.value
       }
    }
    else{
      bootSetCSS(undefined,undefined,this.value)
       for(var i = 0; i < bootOutlineBorderValue.length; i++){
           bootOutlineBorderValue[i].value = this.value
       }
    }
    
})
}
/******Border Color Picker function*********************************************************************** */
for(var i = 0; i < bootBorder_ColorPicker.length; i++){
  bootBorder_ColorPicker[i].addEventListener("input",function(){
    bootSetCSS(undefined,undefined,undefined,this.value)
  })
}

/**********Background Color Picker Function**************************************************************** */
bootBackgroundColorPicker.addEventListener("input",function(){
  bootSetCSS(undefined,undefined,undefined,undefined,this.value)
})

$('#accordion a').on('click',function(){
  $('#accordion a').removeClass('active');
   $(this).addClass('active');
});

$('#thirdRowBtn a').on('click',function(){
  $('#thirdRowBtn a').removeClass('active');
   $(this).addClass('active');
});







 
  




 













