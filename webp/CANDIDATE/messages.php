<?php 
include('session/session_check.php');
include('header.php');
include('magic_menu.php');
        $_SESSION['idd']=null;

 ?>



<style type="text/css">
  .carousel-item {
    height: 25rem;
    background: #ffffff;
    position: relative;
    background-color: #ffffff;
    background-position: center;
  }
  #yy {
    height: 25rem;
    background: #ffffff;
    position: relative;
    background-color: #ffffff;
    background-position: cover;
  }

  .hovver:hover {
    background-color: #E4D611;
  }
</style>



<div class=" container-lg col-md-12 col-lg-7 mt-4">
  <div class="daform2">
       <div class="card border-primary scroll4 shadow-lg">
        <h5 class="card-header text-center fs-2 border-blue bg-blue" style="color: white; font-weight: bold; font-family: Passion One, sans-serif;">MESSAGES</h5>
        <div class="card-body bg-primary-subtle">
            

            <div id="link_wrapper">
              
            </div>



        </div>

 </div>
</div>
</div>
<!-- include jQuery to use AJAX -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "phpcode/messages_code.php", true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc();
  //1 sec
},1000);

window.onload = loadXMLDoc;
</script>



 







  <div class="row mb-5"></div>
    <div class="row mt-5 mb-3 scroll8">
      <h5 class="display-4 text-center">Companies That Hire From Us.</h5>
</div>
</div>

<div class="scroll">
  <div class="logos">
    <div class="logos-slide">
    <img class="bw" src="img/111.svg" >
    <img class="bw" src="img/2.svg">
    <img class="bw" src="img/333.svg">
    <img class="bw" src="img/4.svg">
    <img class="bw" src="img/5.svg">
    <img class="bw" src="img/6.svg">
    <img class="bw" src="img/7.svg">
    <img class="bw" src="img/8.svg">
    <img class="bw" src="img/9.svg">
    <img class="bw" src="img/10.svg">
    <img class="bw" src="img/11.svg">
    <img class="bw" src="img/12.svg">
    <img class="bw" src="img/13.svg">
    <img class="bw" src="img/14.svg">
    <img class="bw" src="img/15.svg" style="width: 78px; height: auto;">
    <img class="bw" src="img/16.svg">
    <img class="bw" src="img/17.svg">
    <img class="bw" src="img/18.svg">
    <img class="bw" src="img/19.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/20.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/21.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/22.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/23.svg">
    <img class="bw" src="img/24.svg">
    <img class="bw" src="img/25.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/26.svg">
      
    </div>
    <div class="logos-slide">
    <img class="bw" src="img/111.svg" >
    <img class="bw" src="img/2.svg">
    <img class="bw" src="img/333.svg">
    <img class="bw" src="img/4.svg">
    <img class="bw" src="img/5.svg">
    <img class="bw" src="img/6.svg">
    <img class="bw" src="img/7.svg">
    <img class="bw" src="img/8.svg">
    <img class="bw" src="img/9.svg">
    <img class="bw" src="img/10.svg">
    <img class="bw" src="img/11.svg">
    <img class="bw" src="img/12.svg">
    <img class="bw" src="img/13.svg">
    <img class="bw" src="img/14.svg">
    <img class="bw" src="img/15.svg" style="width: 78px; height: auto;">
    <img class="bw" src="img/16.svg">
    <img class="bw" src="img/17.svg">
    <img class="bw" src="img/18.svg">
    <img class="bw" src="img/19.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/20.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/21.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/22.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/23.svg">
    <img class="bw" src="img/24.svg">
    <img class="bw" src="img/25.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/26.svg">
      
    </div>
  </div>
</div>

<?php 
include('include/footer.php'); ?>