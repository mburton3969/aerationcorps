<script>
	function get_filtered_results(){
		var sdate = document.getElementById('sdate').value;
		var edate = document.getElementById('edate').value;
		/*if(sdate === ''){
			alert('You must have a start date to filter the totals!');
			return;
		}
		if(edate === ''){
			alert('You must have an end date to filter the totals!');
			return;
		}*/
		var xhr = new XMLHttpRequest();
		xhr.addEventListener("readystatechange", function () {
		  if (this.readyState === this.DONE) {
  	    
		    console.log(this.responseText);
				var results = document.getElementById('filtered_results');
				var r = JSON.parse(this.responseText);
				if(r.total <= 0){
					results.innerHTML = '<p style="color:red;font-weight:bold;">No Results Found</p>';
				}else{
					results.innerHTML = '';
					
				}
  	    
		  }
		});
		xhr.open("GET", "dashboard/php/get-filtered-totals.php?sdate="+sdate+"&edate="+edate, true);
		xhr.send();
	}
	
  if($('#morris_extra_line_chart').length > 0) {
		var data=[{
            period: 'Son',
            iphone: 50,
            ipad: 80,
            itouch: 20
        }, {
            period: 'Mon',
            iphone: 130,
            ipad: 100,
            itouch: 80
        }, {
            period: 'Tue',
            iphone: 80,
            ipad: 60,
            itouch: 70
        }, {
            period: 'Wed',
            iphone: 70,
            ipad: 200,
            itouch: 140
        }, {
            period: 'Thu',
            iphone: 180,
            ipad: 150,
            itouch: 140
        }, {
            period: 'Fri',
            iphone: 105,
            ipad: 100,
            itouch: 80
        },
         {
            period: 'Sat',
            iphone: 250,
            ipad: 150,
            itouch: 200
        }];
		var dataNew = [{
            period: 'Jan',
            iphone: 10,
            ipad: 60,
            itouch: 20
        }, 
		{
            period: 'Feb',
            iphone: 110,
            ipad: 100,
            itouch: 80
        },
		{
            period: 'March',
            iphone: 120,
            ipad: 100,
            itouch: 80
        },
		{
            period: 'April',
            iphone: 110,
            ipad: 100,
            itouch: 80
        },
		{
            period: 'May',
            iphone: 170,
            ipad: 100,
            itouch: 80
        },
		{
            period: 'June',
            iphone: 120,
            ipad: 150,
            itouch: 80
        },
		{
            period: 'July',
            iphone: 120,
            ipad: 150,
            itouch: 80
        },
		{
            period: 'Aug',
            iphone: 190,
            ipad: 120,
            itouch: 80
        },
		{
            period: 'Sep',
            iphone: 110,
            ipad: 120,
            itouch: 80
        },
		{
            period: 'Oct',
            iphone: 10,
            ipad: 170,
            itouch: 10
        },
		{
            period: 'Nov',
            iphone: 10,
            ipad: 470,
            itouch: 10
        },
		{
            period: 'Dec',
            iphone: 30,
            ipad: 170,
            itouch: 10
        }
		];
		var lineChart = Morris.Line({
        element: 'morris_extra_line_chart',
        data: dataNew ,
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iphone', 'ipad', 'itouch'],
        pointSize: 2,
        fillOpacity: 0,
		lineWidth:2,
		pointStrokeColors:['#f2b701', '#b10058', '#0f4fa8'],
		behaveLikeLine: true,
		gridLineColor: '#878787',
		hideHover: 'auto',
		lineColors: ['#f2b701', '#b10058', '#0f4fa8'],
		resize: true,
		redraw: true,
		gridTextColor:'#878787',
		gridTextFamily:"Roboto",
        parseTime: false
    });

	}
</script>