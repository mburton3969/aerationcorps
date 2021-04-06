function record_zillow(cid,ls,link){
  var data = "cid="+cid+"&ls="+ls+"&link="+link;
	var xhr = new XMLHttpRequest();
	xhr.addEventListener("readystatechange", function () {
	  if (this.readyState === this.DONE) {
      
	    console.log(this.responseText);
      
	  }
	});
	xhr.open("POST", "customers/php/add-zillow-size.php", true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhr.send(data);
  console.log('Save Request Made...');
}


function clear_zillow(cid){
	var conf = confirm("Are you sure you want to refresh this data?");
	if(conf === false){
		return;
	}
  var data = '';
	var xhr = new XMLHttpRequest();
	xhr.addEventListener("readystatechange", function () {
	  if (this.readyState === this.DONE) {
      
	    console.log(this.responseText);
			window.location.reload();
      
	  }
	});
	xhr.open("GET", "customers/php/remove-zillow-size.php?cid="+cid, true);
	xhr.send();
}