<header>
  <!-- Sidebar (hidden by default) -->
  <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left"
  style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
    class="w3-bar-item w3-button">Close Menu</a>
    <a href="index.php#packages" onclick="w3_close()" class="w3-bar-item w3-button">Travel packages</a>
    <a href="Registration.php" onclick="w3_close()" class="w3-bar-item w3-button">Register</a>
    <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button">Contact us</a>
    <a href="index.php#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
  </nav>

  <!-- Top menu -->
  <div class="w3-top">
    <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
      <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
      <div class="w3-center w3-padding-16"><strong>Travel Experts</strong></div>
      <!-- weather widget start -->
      <div class="w3-top w3-right" a target="_blank" href="https://www.booked.net/weather/calgary-30502"><img src="https://w.bookcdn.com/weather/picture/32_30502_1_1_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=2&domid=569&anc_id=70976" alt="booked.net"/></a></div><!-- weather widget end -->
    </div>
  </div>

  <script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</header>
