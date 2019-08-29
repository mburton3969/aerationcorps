<script>
  var ip = '<?php echo $_SERVER['REMOTE_ADDR']; ?>';
  var pageName = '<?php echo basename($_SERVER['PHP_SELF']); ?>';
  var data = '';
	var xhr = new XMLHttpRequest();
	xhr.addEventListener("readystatechange", function () {
	  if (this.readyState === this.DONE) {
      
	    console.log(this.responseText);
      
	  }
	});
	xhr.open("GET", "global/php/log-analytics.php?ip="+ip+"&page="+pageName, true);
	xhr.send();
</script>