<header>
  <nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded" >
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <?php
      foreach($page as $k=>$v){
        if($current_page_id==$v){
          echo "<a id='current_page' class='nav-item nav-link' href=".$k.".php>".$v."</a>";
        }
        else{
          echo "<a class='nav-item nav-link' href=".$k.".php>".$v."</a>";
        }
      }

  ?>
      <!-- <a class="nav-item nav-link" href="#">HOME</span></a>
      <a class="nav-item nav-link" href="#">BIOGRAPHY</a>
      <a class="nav-item nav-link" href="#">STATS</a>
      <a class="nav-item nav-link" href="#">GALLERY</a> -->
    </div>
  </div>
  </nav>
  <div class="jumbotron" id="head" >
  </div>



</header>
