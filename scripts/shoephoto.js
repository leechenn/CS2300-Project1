// JavaScript Document
var loopIndex=0;
var timer=null;
var alpha=0;
var timer2=null;
var oldOnload = window.onload;

window.onload=function(){
// prevent overwrite when loading two onload() function
          if (typeof oldOnload == 'function') {
            oldOnload();
          }
  // set the interval time of photo slide
  timer=setInterval(function(){autoloop()},3000);
  var oIcon=document.getElementsByTagName("i");
  slide();
  oIcon[1].onclick=function(){
    directloop("positive");
  }
  oIcon[0].onclick=function(){
    directloop("negative");
  }

}
function startMove(obj, target){
// prevent interval time overlap
  clearInterval(timer2);
  var speed=0;
  alpha=0;
  timer2=setInterval(function(){

    if (alpha< target){
      speed=5;
    }
    else{
      speed=-5;
    }
    if (alpha==target){
      clearInterval(timer2);
    }
    else{
      alpha+=speed;
      obj.style.opacity=alpha/100;
      obj.style.filter="alpha(opacity:"+alpha+")";


    }
  },50);
}
// define slide function, make the current image displayed and the others hidden
function slide(){
  var oSilde=document.getElementById("slide");
  var aImg=oSilde.getElementsByTagName("img");
  var aIcon=oSilde.getElementsByTagName("a");
  for(var i=0; i< aIcon.length; i++){
    aIcon[i].index=i;
    aIcon[i].onclick=function(){
      loopIndex=this.index;
      for(var j=0; j<aIcon.length; j++){
        aImg[j].style.display="none";
        aIcon[j].className="";
      }
      this.className="active";
      aImg[this.index].style.display="block";
    }
  }
  // when hovering, make icon display
  oSilde.onmouseover=function(){
    var oIcon=document.getElementsByTagName("i");
    oIcon[0].style.display="block";
    oIcon[1].style.display="block";

    clearInterval(timer);
  }
  oSilde.onmouseout=function(){
    timer=setInterval(function(){autoloop()},3000);
    var oIcon=document.getElementsByTagName("i");
    oIcon[0].style.display="none";
    oIcon[1].style.display="none";
  }
}
// make the pictures slide automatically when the user do not click index icon
function autoloop(){
  if(loopIndex==10){
    loopIndex=-1;
  }
  var oSilde=document.getElementById("slide");
  var aImg=oSilde.getElementsByTagName("img");
  var aIcon=oSilde.getElementsByTagName("a");
  loopIndex++;
  for(var i=0; i<aImg.length; i++){
    if(i == loopIndex){
      aImg[i].style.display="block";
      aIcon[i].className="active";
      startMove(aImg[i],100);
    }
    else{
      aImg[i].style.display="none";
      aIcon[i].className="";
    }
  }

}
// make the picture return to the first when it slides to the last one
function directloop(direction){
  var oSilde=document.getElementById("slide");
  var aImg=oSilde.getElementsByTagName("img");
  var aIcon=oSilde.getElementsByTagName("a");
  if(direction=="positive"){
    if(loopIndex==10){
      loopIndex=-1;
    }
    loopIndex++;
  }
  else{
    if(loopIndex==0){
      loopIndex=11;
    }
    loopIndex--;
  }
  for(var i=0; i<aImg.length; i++){
    if(i == loopIndex){
      aImg[i].style.display="block";
      aIcon[i].className="active";
      startMove(aImg[i],100);
    }
    else{
      aImg[i].style.display="none";
      aIcon[i].className="";
    }
  }

}
