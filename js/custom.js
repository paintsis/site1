
function toggle_showt(id) {
	  var showt = document.getElementById("create"); 
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
          showt.style.display = "none";
    }


function toggle_create(id) {
		var showt = document.getElementById("showt"); 
       var e = document.getElementById(id);
       if(e.style.display == 'block' )
          e.style.display = 'none';
       else
          e.style.display = 'block';
      		showt.style.display = "none";
    }    