<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{  background-color: black; }
	</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div style="position: absolute; height: 600px; width: 1100px; background-color: white; left: 170px; top:50px;">
<div ><img src= "plane.jpg" style="background:#98bf21;height:60px;width:60px;position:absolute; left:0px; top:0px;" id="c"> <div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 10px;"></div> </div>   

<div style="background-color: red; height: 10px; width: 10px; position: absolute; left: 40px; top:10px;" class="b1"> </div>

</div>
<script>
var b = document.getElementById("c");
var d=0;
var e=0;
var f=0;
var g=0;

$(document).ready(function(){  $("#c").animate({left: "770px"},5000, function(){   alert("Game Over");     });     } );

$(document).keydown(
	function a1(event){  var a = event.keyCode;
                         var y = setInterval(xyz,1);         
     				if(a==39 )
     				{  
               $("#c").stop();
         				if(e%2==0||f==2||f==4)			 
        			{   f=3;    $("#c").animate({left: "770px"},3000, function(){   alert("Game Over");     });   }
             e++;
            }
     				
     if(a==40 )
     {   $("#c").stop();
         
         if(d%2==0||f==1||f==3) 
        {          f=4;         $("#c").animate({top: "470px"},1000, function(){   alert("Game Over");     });  }
      d++;
     }
     if(a==37 )
     {   $("#c").stop();
         
         if(e%2==0||f==2||f==4)  
        {   f=1;  $("#c").animate({left: "0px"},3000, function(){   alert("Game Over");     });   }
        e++;
      }
     if(a==38 )
     {   $("#c").stop();
          
          if(d%2==0||f==1||f==3)
        { f=2;  $("#c").animate({top: "0px"},1000 , function(){   alert("Game Over");     });   }
          d++
     }
         
      //  if(x=="40px"){  alert("Game Over"); }
        
        //alert("Top position: " + x.top + " Left position: " + x.left); 
     
}
);
 function xyz()  { var x = $("#c").position().left;
                   var y = $("#c").position().top; 
            str = String(x);
            str2= String(y);
            top1 = parseInt(str2);
            left1 = parseInt(str);
              if(left1 ==10||top1==20 )
              {	  
                    
              	  if(top1 < 20 && top1 > 0 )
            		{    
            			  var w = $("#c").width();    
                   		 j=w+.5;   
                   		  $("#c").css("width",j+"px")
                   		 document.getElementsByClassName("b1").style.display="none";   
            		}
                    if(left1>30 && left1<60)
                    {   var h = $("#c").height();     i=h+.5+"px"; alert(i);     $("#c").css("height",i);  }
               }		     
             // if(str=="100"){ alert("HELLO"); }    
         }
        // if(x=="100px"){  alert("HELLO");   clearInterval(y);}    }
/*<div  style="background-color: red; height: 200px; width: 20px; position: absolute; left:100px; "></div>
<div  style="background-color: red; height: 240px; width: 20px; position: absolute; left:100px; top:260px;"></div>
<div  style="background-color: red; height: 440px; width: 20px; position: absolute; left:200px; "></div>
<div  style="background-color: red; height: 455px; width: 20px; position: absolute; left:280px; top:45px; "></div>
<div  style="background-color: red; height: 50px; width: 20px; position: absolute; left:340px; "></div>
<div  style="background-color: red; height: 400px; width: 20px; position: absolute; left:340px; top:100px;"></div>
*/
</script>
</body>
</html>