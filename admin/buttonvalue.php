<!DOCTYPE html>
<html>
<body>



<button id="myBtn" name="myname" value="<?php echo 80; ?>" onclick="alert(this.value)">My Button</button>

<p>Click on "Try it" to change the value attribute of "My Button".</p>

<button onclick="myFunction()">Try it</button>

<p><b>Tip:</b> Click on "My Button" before and after you have clicked on "Try it".</p>

<script>
function myFunction() {
  document.getElementById("myBtn").value = "newButtonValue";
}
</script>
<button onclick="openLink()">Open Link</button>

<script>
function openLink() {
    var btnValue = document.getElementById("myBtn").value;

  // Specify the URL you want to navigate to
  var url = "phpcode/admin_delete.php?del=" + btnValue;
  // Navigate to the URL
  window.location.href = url;
}
</script>
</body>
</html>
