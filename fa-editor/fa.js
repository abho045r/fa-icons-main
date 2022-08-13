$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});
/*
//const backgroundArray = getBackgroundList();
const oldParent = document.getElementById('old_parent');
const span = document.createElement('span');

function setBg(index){
const selectedBbg = backgroundArray[index];
const oldChild = document.getElementById('old_child');

span.id ="fa-stack";
span.classList ="fa-stack fa-2x";
oldParent.appendChild(span);
span.innerHTML = selectedBbg;
const add_classBg = document.getElementById("shapes");
add_classBg.className +=" fa-stack-2x ";
//console.log(selectedBbg);
span.appendChild(oldChild);
oldChild.className +=" fa-stack-1x";
}
*/

/*main-icon color change*/

var colors, g;
function IconColorPicker(colors) {
  const MIPA = document.querySelectorAll("#old_child");
        for(var i = 0; i<MIPA.length;i++){
          MIPA[i].style.color = colors;
          
         }
        
 var activeState = document.getElementsByClassName("rounded-btn");
  for (g = 0; g < activeState.length; g++) {
    activeState[g].classList.remove("active");
  }
}


/*Main Icon ColorPicker*/

const colorPicker1 = document.querySelector("#picker-1");
const colorPicker2 = document.querySelector("#picker-2");
const colorPicker3 = document.querySelector("#picker-3");
console.log(colorPicker2)
function setColor(){
  $("#old_child").css("color",colorPicker1.value);
}

function setGradient(){
  $("#old_child").css("-webkit-background-clip","text");
  $("#old_child").css("color","transparent")
  $('#old_child').css("background-image", `-webkit-linear-gradient(${colorPicker2.value},${colorPicker3.value})`);
  

};
//
colorPicker1.addEventListener("input",setColor );
colorPicker2.addEventListener("input", setGradient);
colorPicker3.addEventListener("input", setGradient);



/*******Main-Icon Size Range Slider*****/

const iconSizeValue = document.getElementById("iconSizeValue");
const old_child = document.getElementById("old_child");
const iconSize = document.getElementById("iconSize");
iconSize.addEventListener("input",function(){
  const sizes = iconSize.value
  old_child.style.fontSize =  sizes + "px";
           iconSizeValue.value = sizes;
},false)

iconSizeValue.addEventListener("input",function(){
  value = iconSizeValue.value;
  old_child.style.fontSize =  value + "px";
   iconSize.value = value;
})

/*****Main-Icon Radius Range slider***/

  const iconRadius = document.getElementById("iconRadius");
  const iconRadiusValue = document.getElementById("iconRadiusValue");
  iconRadius.addEventListener("input",function(){
    const value = iconRadius.value;
    old_child.style.borderRadius = value +"%";
    iconRadiusValue.value = value;
  });
  iconRadiusValue.addEventListener("input",function(){
    old_child.style.borderRadius = this.value +"%";
    iconRadius.value = this.value;
  })

  /*****Stroke Color Function */
  const OutlineBorderColor = document.getElementById("borderColorPkr");
  const filledBorderColor = document.getElementById("backgroundBorderColor")

  function setBorderColor(borderColor){
     old_child.style.borderColor = borderColor;
  }
   
  OutlineBorderColor.addEventListener("input",function(){
      setBorderColor(this.value);
  })
  filledBorderColor.addEventListener("input",function(){
     setBorderColor(this.value);
  })


  //background Radius
  const backgroundRadius = document.getElementById("backgroundRadius");
  const backgroundRadiusValue = document.getElementById("backgroundRadiusValue");
  backgroundRadius.addEventListener("input",function(){
    value = backgroundRadius.value ;
    old_child.style.borderRadius = value + "%";
    backgroundRadiusValue.value = value;
  })
  backgroundRadiusValue.addEventListener("input",function(){
    old_child.style.borderRadius = this.value + "%";
    backgroundRadius.value = this.value;
  })
/****Main Icon Stroke Function */
const iconStroke = document.getElementById("iconStroke");
const iconStrokeValue = document.getElementById("iconStrokeValue");

function setStroke(){
$("#old_child").css("-webkit-text-stroke-width",iconStroke.value +"px")
 iconStrokeValue.value = iconStroke.value
}
function setStrokeValue(){
  $("#old_child").css("-webkit-text-stroke-width",iconStrokeValue.value +"px")
  iconStroke.value = iconStrokeValue.value;
}
iconStroke.addEventListener("input",setStroke);
iconStrokeValue.addEventListener("input",setStrokeValue);

 

/****main-icon stroke color function******/
 const colorPicker4 = document.getElementById("picker-4");
  function setStrokeColor(){
    $("#old_child").css("-webkit-text-stroke-color",colorPicker4.value)
    }

  colorPicker4.addEventListener("input",setStrokeColor);
  
  
 /************************************Box shadow Remove********************************************************* */ 
 $('#shadowReset').on("click",function(){
  $('#old_child').css("boxShadow","none")
})

/***************************************Icon Shadow Remove ************************************************************/
$("#IconShadowReset").on("click",function(){
  $("#old_child").css("textShadow","none")
})
/************************Box Shadow Function *****************************************************************/
const Xoffset = document.getElementById("Xoffset");
const Yoffset = document.getElementById("Yoffset");
const blurRadius = document.getElementById("blur-radius");
const spreadRadius = document.getElementById("spread-radius");
const insetRadius = document.getElementById("inset-radius");
const settings = document.querySelectorAll(".setting input");
const xOffsetValue = document.getElementById("xOffsetValue");
const yOffsetValue = document.getElementById("yOffsetValue");
const blurRadiusValue = document.getElementById("blurRadiusValue");
const spreadRadiusValue = document.getElementById("spreadRadiusValue");
const boxShadowColorPkr = document.getElementById("picker-5");
settings.forEach(setting =>{
  setting.addEventListener("input",updateBoxShadow);
})
function updateBoxShadow(event){
  const boxShadow = `${Xoffset.value}px ${Yoffset.value}px ${blurRadius.value}px ${spreadRadius.value}px ${boxShadowColorPkr.value} ${insetRadius.checked ? "inset":" "}`;
  old_child.style.boxShadow  = boxShadow;
  xOffsetValue.value = Xoffset.value;
  yOffsetValue.value = Yoffset.value;
  blurRadiusValue.value= blurRadius.value;
  spreadRadiusValue.value= spreadRadius.value;
}
/***********Icon Shadow function ***********************************************************************/
const iconXoffset = document.getElementById("iconXoffset");
const iconYoffset = document.getElementById("iconYoffset");
const iconBlurRadius = document.getElementById("icon-blur-radius");
const iconXoffsetValue = document.getElementById("iconXOffsetValue");
const iconYoffsetValue = document.getElementById("iconYOffsetValue");
const iconBlurRadiusValue = document.getElementById("iconBlurRadiusValue");
const iconsettings = document.querySelectorAll(".iconSetting input");
const iconShadowColorPicker = document.getElementById("picker-6"); 
iconsettings.forEach(iconsetting =>{
  iconsetting.addEventListener("input",updateIconShadow);
})
function updateIconShadow(){
  const iconShadow = `${iconXoffset.value}px ${iconYoffset.value}px ${iconBlurRadius.value}px ${iconShadowColorPicker.value}`
  old_child.style.textShadow  = iconShadow;
  iconBlurRadiusValue.value = iconBlurRadius.value;
  iconXoffsetValue.value = iconXoffset.value;
  iconYoffsetValue.value = iconYoffset.value;
}
/*********************Toggle Class Function******************************************************************/
function addClass(x){
  $("#old_child").toggleClass(x);
}
/***********Horizontal flip function**** */
const horizontalFlip = document.getElementById("fa-horizontal-flip")
horizontalFlip.addEventListener("click",function(){
  $("#old_child").removeClass("fa-flip-vertical").toggleClass("fa-flip-horizontal")
})
/******Vertical flip function***** */
const verticalFlip = document.getElementById("fa-vertical-flip")
verticalFlip.addEventListener("click",function(){
  $("#old_child").removeClass("fa-flip-horizontal").toggleClass("fa-flip-vertical")
})

$('#group-btn a').on('click',function(){
  $('#group-btn a').removeClass('active');
   $(this).toggleClass('active');
});
$('#accordion a').on('click',function(){
  $('#accordion a').removeClass('active');
   $(this).toggleClass("active");
});


//main-icon Rotate
const iconRotate = document.getElementById("iconRotate");
const iconRotateValue = document.getElementById("iconRotateValue");
iconRotate.addEventListener('input',function() {
  $( "#old_child" ).addClass( "fa-rotate-by" );
  $('#old_child').css({'--fa-rotate-angle': this.value+"deg"});
  iconRotateValue.value = this.value;
});

iconRotateValue.addEventListener("input",function(){
  $( "#old_child" ).addClass( "fa-rotate-by" );
  $('#old_child').css({'--fa-rotate-angle': this.value+"deg"});
     iconRotate.value = this.value;

})
/*******************************************************Border Style Function **********************/

function setBorderStyle(borderStyle){
  $("#old_child").css("border-style",borderStyle);
}

/******************************Outline Shapes Button********************************************* */
$("#outlineShape").click(function(){
  $("#old_child").css("background-color",'');
  $("#old_child").css("border-style","solid");
},)

/*******************************Filled Shapes Button***************************************************** */
$("#filledShape").click(function(){
  $("#old_child").css("background-color","#f2f2f2");
  $("#old_child").css("border-style",'');
})

/******************************Shapes Remove Button******************************************************** */
$("#removeShape").click(function(){
  $("#old_child").css("background-color",'');
  $("#old_child").css("border-style",'');
})
/*****************************************Shapes Padding Function******************************************** */
const outlinePadding = document.querySelector("#iconPadding");
const outlinePaddingValue = document.querySelector("#iconPaddingValue");
const filledPadding = document.querySelector("#backgroundPadding");
const filledPaddingValue = document.querySelector("#backgroundPaddingValue");

function setPadding(padding){
  $("#old_child").css("padding",padding);
 }

outlinePadding.addEventListener("input",function(){
  setPadding(this.value);
  outlinePaddingValue.value = this.value;
});

outlinePaddingValue.addEventListener("input",function(){
  setPadding(this.value);
  outlinePadding.value = this.value;
});

filledPadding.addEventListener("input",function(){
  setPadding(this.value);
  filledPaddingValue.value = this.value;
})
filledPaddingValue.addEventListener("input",function(){
  setPadding(this.value);
  filledPadding.value = this.value;
})

/******************************Shapes Stroke Function****************************************************************/
const outlineStroke = document.getElementById("outlineStroke");
const outlineStrokeValue = document.getElementById("outlineStrokeValue");
const backgroundStroke = document.getElementById("backgroundStroke");
const backgroundStrokeValue = document.getElementById("backgroundStrokeValue");

function setBorderWidth(borderWidth){
  $("#old_child").css("border-width",borderWidth)
}

outlineStroke.addEventListener("input",function(){
   setBorderWidth(this.value)
  outlineStrokeValue.value = this.value;
})

outlineStrokeValue.addEventListener("input",function(){
   setBorderWidth(this.value)
  outlineStroke.value = this.value;
})

backgroundStroke.addEventListener("input",function(){
  $("#old_child").css("border-style","solid");
  setBorderWidth(this.value);
  backgroundStrokeValue.value = this.value
})

backgroundStrokeValue.addEventListener("input",function(){
  $("#old_child").css("border-style","solid");
  setBorderWidth(this.value);
  backgroundStroke.value = this.value;
})

/***************************Filled Shape Background Color function *********************************************/

function backgroundColorPkr(value){
  $("#old_child").css("background-color",value);
}
const backgroundColrPkr = document.getElementById("backgroundColorPkr");
backgroundColrPkr.addEventListener('click',function(){
  backgroundColrPkr.addEventListener("input",function(){
    value = backgroundColrPkr.value;
    $("#old_child").css("background-color",value);
  })
})

/****************Filled Shape Stroke COlor FUnction ***************/

$("#faVersion4").on("click",function(){
  if($("#old_child").hasClass("fas")){
    $("#old_child").removeClass('fas').addClass('fa');
  }
  else if($("#old_child").hasClass("fa-solid")){
    $("#old_child").removeClass('fa-solid').addClass('fa');
  }

})

$("#faVersion5").on("click",function(){
  if($("#old_child").hasClass("fa")){
    $("#old_child").removeClass('fa').addClass('fas');
  }
  else if($("#old_child").hasClass("fa-solid")){
    $("#old_child").removeClass('fa-solid').addClass('fas');
  }
})
$("#faVersion6").on("click",function(){
  if($("#old_child").hasClass("fa")){
    $("#old_child").removeClass('fa').addClass('fa-solid');
  }
  else if($("#old_child").hasClass("fas")){
    $("#old_child").removeClass('fas').addClass('fa-solid');
  }
})




