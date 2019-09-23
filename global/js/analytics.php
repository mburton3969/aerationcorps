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
	
	<?php 
	if(isset($_GET['atc'])){
		echo 'var atc = "' . $_GET['atc'] . '";
		localStorage.setItem("ad_code",atc);';
	}else{
		//echo 'var atc = "NO_CODE";';
		echo 'if(localStorage.getItem("ad_code") === null){
		console.log("No Ad Code...");
		var atc = "NO_CODE";
		localStorage.setItem("ad_code",atc);
		}';
	}
	?>
	
</script>