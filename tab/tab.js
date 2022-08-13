

const backgroundArray = getBackgroundList();
const elmnt = document.getElementById("main-icon");
//const mainIconHtml = elmnt.innerHTML;
function setBg(index) {
  const selectedBbg = backgroundArray[index];
  elmnt.innerHTML = selectedBbg;
  document.getElementById("inner-icon").innerHTML = mainIconHtml;
  console.log(document.getElementById("inner-icon"));
  // Get pointers to the outer and inner SVG elements
  var outer = document.getElementById("changeColor");
  var inner = document.getElementById("IconChangeColor");

  //Get the dimensions of the outer SVG
  var outerW = outer.width.baseVal.value;
  var outerH = outer.height.baseVal.value;

 //Find the minimum of the width and height and calculate what 20% of it is
var diff = Math.min(outerW, outerH) * 0.001;

// Adjust the size of the inner SVG
inner.setAttribute("width", outerW - diff);
inner.setAttribute("height", outerH - diff);
}

/*Background  Size change  */
var sizeChange = document.getElementById("sizeChange");
var background_sizeValue = document.getElementById("background_sizeValue");
background_sizeValue.addEventListener("input", function() {
  var element = document.getElementById("changeColor"); 
  element.setAttribute("height", background_sizeValue.value);
  element.setAttribute("width", background_sizeValue.value);
   sizeChange.value = background_sizeValue.value;
 }, false);
sizeChange.addEventListener("input", function() {
 var element = document.getElementById("changeColor"); 
 element.setAttribute("height", sizeChange.value);
 element.setAttribute("width", sizeChange.value);
 background_sizeValue.value = sizeChange.value;
}, false);

/*main-icon size change*/
var MISC = document.getElementById("mainIcon_sizeChange");
var mainIcon_sizeValue = document.getElementById("mainIcon_sizeValue");
 
mainIcon_sizeValue.addEventListener("input", function() {
  var mainelement = document.getElementById("IconChangeColor"); 
  mainelement.setAttribute("height",mainIcon_sizeValue.value);
  mainelement.setAttribute("width",mainIcon_sizeValue.value);
  MISC.value = mainIcon_sizeValue.value;
},false)

MISC.addEventListener("input", function() {
  var mainelement = document.getElementById("IconChangeColor"); 
 //console.log(mainIcon_sizeValue);
 //var inner_icon = document.getElementById("inner-icon");
 //var height = mainelement.getAttribute('height');
 //var width = mainelement.getAttribute('width');
 //var translateX = inner_icon.computedStyleMap().get('transform')[0].x.value;
//var translateY =  inner_icon.computedStyleMap().get('transform')[0].y.value;
/*if(height--){
 a = translateX + 2.5;
 inner_icon.setAttribute('transform',`translate(${a},${a})`);
 console.log(a);
}
else if(height++) {
  b = translateX - 2.5;
  inner_icon.setAttribute('transform',`translate(${b},${b})`);
}*/
 //300-1   40+2.5 
 mainIcon_sizeValue.value =MISC.value;
 mainelement.setAttribute("height", MISC.value);
 mainelement.setAttribute("width", MISC.value);
 console.log(mainelement);
}, false);

/*Rotate Main Icon */
function mainIconRotate(degree){
  const mainIconRotate = document.getElementById("IconChangeColor");
  mainIconRotate.setAttribute("transform", `rotate(${degree})`);
}
/*Rotate background Icon */
function Rotate(Bgdegree){
  const Rotate_0 = document.getElementById("changeColor");
  Rotate_0.setAttribute("transform", `rotate(${Bgdegree})`);
}
/*main-icon color change*/
var colors, g;
function IconColorPicker(colors) {
  const MIPA = document.querySelectorAll("#mainIconPathAttribute");
        for(var i = 0; i<MIPA.length;i++){
          MIPA[i].setAttribute("fill",colors);
          console.log(MIPA[i]);
        }
 var activeState = document.getElementsByClassName("rounded-btn");
  for (g = 0; g < activeState.length; g++) {
    activeState[g].classList.remove("active");
  }
}
/*Main Icon ColorPicker*/
function mainIconFillClrPkr(){
  var mainIconFillPkr = document.getElementById("mainIconFillPkr");
  mainIconFillPkr.addEventListener("input",updateMIFill,false);
  mainIconFillPkr.select(); 
}
function updateMIFill(event){
  var MIFillClr = document.querySelectorAll("#mainIconPathAttribute"),
      p;
      for(p = 0; p < MIFillClr.length; p++){
        MIFillClr[p].setAttribute("fill",event.target.value);
      }
}
/* background Color Change */
var color, i, j;
function ColorPicker(color) {
  var bgColor = document.querySelectorAll("#pathAttribute"),
  j;
for (j = 0;  j< bgColor.length; j++) {
  bgColor[j].setAttribute('fill',color);
 
}
var activeState = document.getElementsByClassName("rounded-btn");
  console.log(activeState);
  for (i = 0; i < activeState.length; i++) {
    console.log(activeState) + 1;
    activeState[i].classList.remove("active");
  }
}
/*Background COlor change COlor Picker*/
function bgFillClrPkr() {
  var bgFillPicker = document.getElementById("bgFillPicker");
  bgFillPicker.addEventListener("input", updatefill, false);
  bgFillPicker.select();
}
function updatefill(event) {
  var FillColor = document.querySelectorAll("#pathAttribute"),
  l;
for (l = 0;  l< FillColor.length; l++) {
  FillColor[l].setAttribute('fill',event.target.value);
 }
}
/*Bg Stroke change */
var bgStrokeChange = document.getElementById("bgStrokeChange");
var bgStrokeValue = document.getElementById("bgStrokeValue")
    bgStrokeChange.addEventListener("input",function(){
            bgStrokeValue.value = bgStrokeChange.value
      var bgStroke = document.querySelectorAll("#pathAttribute"),
          k;
          for(k=0; k < bgStroke.length; k++){
               bgStroke[k].setAttribute("stroke-width",bgStrokeChange.value)
          }
    },false)

   bgStrokeValue.addEventListener("input", function(){
        bgStrokeChange.value = bgStrokeValue.value;
        var bgStroke = document.querySelectorAll("#pathAttribute"),
        k;
        for(k=0; k < bgStroke.length; k++){
             bgStroke[k].setAttribute("stroke-width",bgStrokeValue.value)
        }
   },false); 

/*main Icon stroke change*/
var IconStrokeChange = document.getElementById("IconStrokeChange");
var mainIconStrokeValue = document.getElementById("mainIconStrokeValue");
IconStrokeChange.addEventListener("input",function(){
  var x = document.getElementById("mainIconPathAttribute");
   x.setAttribute("stroke-width",IconStrokeChange.value);
   mainIconStrokeValue.value = IconStrokeChange.value;
},false);
mainIconStrokeValue.addEventListener("input", function(){
  var x = document.getElementById("mainIconPathAttribute");
   x.setAttribute("stroke-width",mainIconStrokeValue.value);
   IconStrokeChange.value = mainIconStrokeValue.value;
},false);

//color picker for stroke
function IconStrokeClr() {
  const StrokePicker = document.getElementById("IconStrokeColorPicker");
  StrokePicker.addEventListener("input", update, false);
  StrokePicker.select();
}
function update(event) {
  document.getElementById("mainIconPathAttribute").setAttribute("stroke",event);
  console.log(event)
}
//Color picker for background stroke
var colorWell;
function backgroundStrokeClr() {
  colorWell = document.getElementById("strokePicker");
  colorWell.addEventListener("input", updateFirst, false);
  colorWell.select();
}
function updateFirst(event) {
  var bgStrokeColor = document.querySelectorAll("#pathAttribute"),
    i;
for (i = 0; i < bgStrokeColor.length; i++) {
    bgStrokeColor[i].setAttribute('stroke',event.target.value);
}
 }
//Add Background spin
var backgroundSpin = document.getElementById("backgroundSpin");
backgroundSpin.addEventListener("click", function() {
 var element = document.getElementById("changeColor");
  var NS = "http://www.w3.org/2000/svg";
  var animateTransform = document.createElementNS( NS, "animateTransform" );
  animateTransform.setAttribute( "xlink:href", "#changeColor");
  animateTransform.setAttribute( "attributeType", "xml" );
  animateTransform.setAttribute("attributeName","transform");
  animateTransform.setAttribute("type","rotate");
  animateTransform.setAttribute("from","0");
  animateTransform.setAttribute("to","359");
  animateTransform.setAttribute( "dur", "2s");
  animateTransform.setAttribute( "repeatCount", "indefinite" );
  element.appendChild(animateTransform);
},{once:true});
 
//Add mainIcon spin
var Spin = document.getElementById("SPIN");
Spin.addEventListener("click", function() {
 var element = document.getElementById("IconChangeColor");
 var NS = "http://www.w3.org/2000/svg";
  var animateTransform = document.createElementNS( NS, "animateTransform" );
  animateTransform.setAttribute( "xlink:href", "#IconChangeColor");
  animateTransform.setAttribute( "attributeType", "xml" );
  animateTransform.setAttribute("attributeName","transform");
  animateTransform.setAttribute("type","rotate");
  animateTransform.setAttribute("from","0");
  animateTransform.setAttribute("to","359");
  animateTransform.setAttribute( "dur", "2s");
  animateTransform.setAttribute( "repeatCount", "indefinite" );
  element.appendChild(animateTransform);
},{once:true});

//Add main Icon Horizontal Flip
var H_flip = document.getElementById("HorizontalFLIP");
H_flip.addEventListener("click", function(){
var  setFlip =  document.getElementById("IconChangeColor");
if (setFlip.getAttribute("transform") == "scale(1,1)"){
  setFlip.setAttribute("transform","scale(-1,1)");
} else {
  setFlip.setAttribute("transform","scale(1,1)");
}

}, false);
//Add mainIcon Vertical Flip
var V_flip = document.getElementById("VerticalFLIP");
V_flip.addEventListener("click", function(){
var  setFlip =  document.getElementById("IconChangeColor");
if (setFlip.getAttribute("transform") == "scale(1,1)"){
  setFlip.setAttribute("transform","scale(1,-1)");
} else {
  setFlip.setAttribute("transform","scale(1,1)");
}
}, false);

//Add Background  Horizontal Flip
var backgroundH_flip = document.getElementById("backgroundHorizontalFLIP");
backgroundH_flip.addEventListener("click", function(){
var  setFlip =  document.getElementById("changeColor");
if (setFlip.style.transform === "none"){
  setFlip.style.transform = "scale(-1,1)";
} else {
  setFlip.style.transform = "none";
}
},false);

//Add Background Vertical Flip
var backgroundV_flip = document.getElementById("backgroundVerticalFLIP");
backgroundV_flip.addEventListener("click", function(){
var  setFlip =  document.getElementById("changeColor");
if (setFlip.style.transform === "none"){
  setFlip.style.transform = "scale(1,-1)";
} else {
  setFlip.style.transform = "none";
}
},false);
  
 /* Remove Shapes Btn*/
var RemoveShapeBtn = document.getElementById("RemoveShapeBtn");
    RemoveShapeBtn.addEventListener("click", function(){
            var pathAttribute = document.querySelectorAll("#pathAttribute"),
            R;
            for(R = 0; R < pathAttribute.length; R++){
              pathAttribute[R].remove();
            }
    },false);


/*Add mainIcon shadow*/
const addShadow = document.getElementById("Add_shadow");
addShadow.addEventListener("click",function(){
  var NS = "http://www.w3.org/2000/svg";
  var filter = document.createElementNS( NS, "filter" );
  filter.setAttribute( "id", "shadow" );
  
  var blur = document.createElementNS( NS, "feDropShadow" );
  blur.setAttribute("id","shadowValue")
  blur.setAttribute( "stdDeviation", ".5" );
  blur.setAttribute("dx","0");
  blur.setAttribute("dy","0");
  blur.setAttribute("flood-color","black");
  filter.appendChild( blur );

  let element = document.getElementById('IconChangeColor');
  element.appendChild( filter );
        document.getElementById("mainIconPathAttribute").setAttribute("filter", "url(#shadow)");
  },false);

  const shadow_dx = document.getElementById("dx");
  const shadow_dy = document.getElementById("dy");
  const stdDeviation = document.getElementById("stdDeviation");

  shadow_dx.addEventListener("input",function(){
    const shadowValue = document.getElementById("shadowValue");
    shadowValue.setAttribute("dx",shadow_dx.value);
},false);

shadow_dy.addEventListener("input",function(){
  const shadowValue = document.getElementById("shadowValue");
  shadowValue.setAttribute("dy",shadow_dy.value);
})

stdDeviation.addEventListener("input",function(){
  const shadowValue = document.getElementById("shadowValue");
  shadowValue.setAttribute("stdDeviation",stdDeviation.value);
})

function shadowColor() {
  var SCI = document.getElementById("shadowColorInput");
  SCI.addEventListener("input", updateshadow, false);
  SCI.select();
}
function updateshadow(event) {
  var SC = document.querySelectorAll("#shadowValue"),
  l;
for (l = 0;  l< SC.length; l++) {
  SC[l].setAttribute('flood-color',event.target.value);
 }
}

/*Add BG shadow*/
const bgShadow = document.getElementById("BG_shadow");
bgShadow.addEventListener("click",function(){
  var NS = "http://www.w3.org/2000/svg";
  var filter = document.createElementNS( NS, "filter" );
  filter.setAttribute( "id", "bgShadow" );
  
  var blur = document.createElementNS( NS, "feDropShadow" );
  blur.setAttribute("id","bgShadowValue")
  blur.setAttribute( "stdDeviation", ".5" );
  blur.setAttribute("dx","0");
  blur.setAttribute("dy","0");
  blur.setAttribute("flood-color","black");
  filter.appendChild( blur );

  let element = document.getElementById('pathAttribute');
  element.appendChild( filter );
          var pathAttribute = document.querySelectorAll("#pathAttribute"),
            R;
            for(R = 0; R < pathAttribute.length; R++){
              pathAttribute[R].setAttribute("filter", "url(#bgShadow)");
            }
  },false);

  const bg_dx = document.getElementById("bg_dx");
  const bg_dy = document.getElementById("bg_dy");
  //const stdDeviation = document.getElementById("stdDeviation");

  bg_dx.addEventListener("input",function(){
    const bgShadowValue = document.getElementById("bgShadowValue");
    bgShadowValue.setAttribute("dx",bg_dx.value);
},false);

bg_dy.addEventListener("input",function(){
  const bgShadowValue = document.getElementById("bgShadowValue");
  bgShadowValue.setAttribute("dy",bg_dy.value);
})

bgStdDeviation.addEventListener("input",function(){
  const bgShadowValue = document.getElementById("bgShadowValue");
  bgShadowValue.setAttribute("stdDeviation",bgStdDeviation.value);
})
function bgShadowColor() {
  var BSCI = document.getElementById("bgShadowColorInput");
  BSCI.addEventListener("input", updatebgshadow, false);
  BSCI.select();
}
function updatebgshadow(event) {
  var BSC = document.querySelectorAll("#bgShadowValue"),
  l;
for (l = 0;  l< BSC.length; l++) {
  BSC[l].setAttribute('flood-color',event.target.value);
 }
}






    



