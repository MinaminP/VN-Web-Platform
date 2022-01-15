    function backgroundImg(imgs) {
    var expandImg = document.getElementById("backgroundImg");
    expandImg.src = imgs.src;
    expandImg.parentElement.style.display = "block";
  }  

  function charaImg(imgs) {
    var charImg = document.getElementById("characterImg");
    charImg.src = imgs.src;
    charImg.parentElement.style.display = "block";
  }    

  function openAsset(evt, assetList) {
    var i, row, tablinks;
  
    row = document.getElementsByClassName("row");
    for (i = 0; i < row.length; i++) {
      row[i].style.display = "none";
    }
  
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    document.getElementById(assetList).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  function moveChar(str){
    var defaultPos = 0;
    var moveRight = 300;
    var moveLeft = 300;
    var charImg = document.getElementById("characterImg");

    switch(str){
      case "Left":
        defaultPos -= moveLeft;
        charImg.style.transform = "translateX(" + defaultPos + "px)";
        break;
      case "Right":
        defaultPos += moveRight;
        charImg.style.transform = "translateX(" + defaultPos + "px)";
       break; 
       case "Mid":
        defaultPos = 0;
        charImg.style.transform = "translateX(" + defaultPos + "px)";
        break; 
    }
  }