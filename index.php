<!DOCTYPE html>
<html>
  <head>
    <script src="gallery.js"></script>
    <?php  include('database.php'); ?>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="tab">
      <button class="tablinks" onclick="openAsset(event, 'Background')">Background</button>
      <button class="tablinks" onclick="openAsset(event, 'Character')">Character</button>
      <button class="tablinks" onclick="openAsset(event, 'Dialogue')">Dialogue</button>
    </div>
    
    <div id="Background"class="row">
      <h3>Select Background</h3>
      <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
      <br>
      <div class="columnBG">
        <img src="background/bg_1.jpg" onclick="backgroundImg(this);">
      </div>
      <div class="columnBG">
        <img src="background/bg_home.png" onclick="backgroundImg(this);">
      </div>
      <div class="columnBG">
        <img src="background/bg_plain.png" onclick="backgroundImg(this);">
      </div>
      <div class="columnBG">
        <img src="background/bg_sky.png" onclick="backgroundImg(this);">
      </div>
      <div class="columnBG">
        <img src="background/bg_beach.png" onclick="backgroundImg(this);">
      </div>
      <div class="columnBG">
        <img src="background/bg_kantin.png" onclick="backgroundImg(this);">
      </div>
      <div class="columnBG">
        <img src="background/bg_mountain.png" onclick="backgroundImg(this);">
      </div>
      <div class="columnBG">
        <img src="background/bg_pyramid.jpg" onclick="backgroundImg(this);">
      </div>
    </div>
    
    <div id="Character"class="row">
      <h3>Select Character</h3>
      <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
      <br>
      <div class="columnChara">
        <img src="character/Miki_Casual_Smile.png" onclick="charaImg(this);">
      </div>
      <div class="columnChara">
        <img src="character/hoshi_school_smile.png" onclick="charaImg(this);">
      </div>
      <div class="columnChara">
        <img src="character/Miki_Winter_Uni_OpenSmile.png" onclick="charaImg(this);">
      </div>
      <div class="columnChara">
        <img src="character/Sora_Casual_Smile.png" onclick="charaImg(this);">
      </div>
      <div class="columnChara">
        <img src="character/Sumi_Casual_Smile.png" onclick="charaImg(this);">
      </div>
      <div class="columnChara">
        <img src="character/Sumi_WinterUni_Smile.png" onclick="charaImg(this);">
      </div>
      <br>
      <input type="button" value = "Move Character Left" onclick="moveChar('Left')"/><br>
      <input type="button" value = "Move Character Center" onclick="moveChar('Mid')"/><br>
      <input type="button" value = "Move Character Right" onclick="moveChar('Right')"/>
    </div>

    <div id="Dialogue"class="row">
      <h3>Add Name and Dialogue</h3>
      <form method="post" action="database.php" >
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      Name : <br>
      <input type="text" name="charname" value=""> <br><br>
      Dialogue : <br>
      <input type="text" name="dialogue" value=""> <br><br>
      <button class="btn" type="submit" name="save" >Save Dialogue </button>
    	</div>
    </div>
    
    <div class="container">
    <?php $story = mysqli_query($conn, "SELECT * FROM game ORDER BY scenenum DESC LIMIT 1"); 
    $showscript = mysqli_fetch_array($story) ?>
      <div class="charaimg">
        <img id="characterImg"> 
      </div>
      <img id="backgroundImg">
      <div class="charname">
         <?php  
         if ($showscript!="")
         {
         echo $showscript['name'];
         }
         else
         {
         echo "Character";
         }
         ?> 
      </div>
      <div class="dialogue"> 
        <?php  
         if ($showscript!="")
         {
         echo $showscript['dialogue'];
         }
         else
         {
         echo "Hello, this is the starting point.";
         }
         ?>
      </div>
    </div>


  </body>
</html>
