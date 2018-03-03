window.onload=function(){
  // when the window is scrolled, the narbar will change opacity
  window.onscroll=function(){
    var t=document.documentElement.scrollTop||document.body.scrollTop;
    if( t > 0){

      document.getElementsByClassName("navbar")[0].style.opacity=0.8;

    }
    else{
      document.getElementsByClassName("navbar")[0].style.opacity=1;
    }
  };
  // when one social circle is horvered, the class name will be added to it to make it has css style
  var foot=document.getElementsByClassName("social-circle");
  var a=foot[0].getElementsByTagName("a");

  for(var j=0; j<a.length; j++){
    a[j].onmouseover=function(){
      var id=this.id;
      this.classList.add(id);
    };
    a[j].onmouseout = function(){
      var id=this.id;
      this.classList.remove(id);
    };
  }
}
