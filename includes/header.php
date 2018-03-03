<!-- The logo on the left of the header is cited from Nike, I display the citation below the main header picture -->

<header >
  <nav class="navbar fixed-top" >
  <a class="navbar-brand" href="#"><img src="../image/logo.png"/></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
      <?php
      foreach($page as $k=>$v){
        if($current_page_id==$v){
          echo "<li class='nav-item'>"."<a id='current_page' class='nav-link' href=".$k.".php>".$v."</a>"."</li>";
        }
        else{
          echo "<li class='nav-item'>"."<a class='nav-link' href=".$k.".php>".$v."</a>"."</li>";
        }
      }
  ?>
  </ul>

    </div>
  </div>
  </nav>
  <div id="head" >
  <img src="../image/lebron4.jpg">
  <span class="citation">(This image is cited from Google: <a href="https://images.fineartamerica.com/images-medium-large-5/lebron-james-artwork-1-sheraz-a.jpg">https://images.fineartamerica.com/images-medium-large-5/lebron-james-artwork-1-sheraz-a.jpg</a>)</span>
  <span class="citation">(The logo is cited from Nike news:<a href="https://news.nike.com/news/lebron-james-a-decade-in-the-making">https://news.nike.com/news/lebron-james-a-decade-in-the-making</a>)</span>
  </div>



</header>
