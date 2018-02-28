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
<div style="position: relative; height: 600px; width: 1100px; background-color: white; left: 170px; top:50px;">
<div >
<img src= "plane.jpg" style="background:#98bf21;height:60px;width:60px;position:absolute; left:0px; top:0px;" class="c"> 
</div>   


<div style="background-color: red; height: 400px; width: 10px; position: absolute; right: 0; top:200px; display: none;" class="b1"> </div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 100px; display: none;" class="b2"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 200px; display: none; " class="b3"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 200px; display: none; top:400px;" class="b4"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 300px; display: none;" class="b5"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 100px; display: none; top:500px;" class="b6"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 380px; display: none;" class="b7" ></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 20px; display: none; top:580px;" class="b8"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 20px; display: none;" class="b9"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 380px; display: none; top:220px;" class="b10"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 100px; display: none;" class="b11"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 300px; display: none; top:300px;" class="b12"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 400px; display: none;" class="b13"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 0px; display: none; top:600px;" class="b14"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 200px; display: none;" class="b15"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 200px; display: none; top:400px;" class="b16"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 300px; display: none;" class="b17"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 100px; display: none; top:500px;" class="b18"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 0px; display: none;" class="b19"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 450px; display: none; top:1 50px;" class="b20"></div>
</div>
<script>
var b = document.getElementById("c");
var d=0;
var e=0;
var h=2;
var g=1;
var i=1;
var j=1;
$(document).ready(function(){  $("#c").animate({left: "1040px"},3000, function(){   alert("Game Over");     });     });

$(document).ready(  function(){      
                                    setInterval( function(){   $(".b"+g).show();   $(".b"+h).show();     
                                                            $(".b"+g).animate({left:"-10px"},8000, function(){  $(".b"+g).hide();  });
                                                            $(".b"+h).animate({left:"-10px"},8000, function(){  $(".b"+h).hide();  });
                                                            g=g+2;  h=h+2;
                                                            

                                                            }
                                          ,1000);
                              } 
                 );
$(document).ready(
function()
{
setInterval(function(){      var leftb1 = curleft("b1");      
                               var leftb3 = curleft("b3");      
                               var leftb5 = curleft("b5");        
                               var leftb7 = curleft("b7");        
                               var leftb9 = curleft("b9");   leftc= curleft("c");       
                               var topc = curtop("c");            
                               console.log(typeof(topc));
                               
                                           

                      },3000);
         }
                );


$(document).keydown(
	function a1(event){  var a = event.keyCode;
                         var y = setInterval(xyz,1);         
     				if(a==39 )
     				{  
               $(".c").stop();
         				if(e%2==0||f==2||f==4)			 
        			{   f=3;    $(".c").animate({left: "1040px"},2000, function(){   alert("Game Over");     });   }
             e++;
            }
     				
     if(a==40 )
     {   $(".c").stop();
         
         if(d%2==0||f==1||f==3) 
        {          f=4;         $(".c").animate({top: "540px"},1000, function(){   alert("Game Over");     });  }
      d++;
     }
     if(a==37 )
     {   $(".c").stop();
         
         if(e%2==0||f==2||f==4)  
        {   f=1;  $(".c").animate({left: "0px"},2000, function(){   alert("Game Over");     });   }
        e++;
      }
     if(a==38 )
     {   $(".c").stop();
          
          if(d%2==0||f==1||f==3)
        { f=2;  $(".c").animate({top: "0px"},1000 , function(){   alert("Game Over");     });   }
          d++
     }
         
      //  if(x=="40px"){  alert("Game Over"); }
        
        //alert("Top position: " + x.top + " Left position: " + x.left); 
     
}
);
 function xyz()  { var x = $(".c").position().left;
                   var y = $(".c").position().top; 
            str = String(x);
            str2= String(y);
            top1 = parseInt(str2);
            left1 = parseInt(str);
              if(left1 ==10||top1==20 )
              {	  
                    
              	  if(top1 < 20 && top1 > 0 )
            		{    
            			  var w = $(".c").width();    
                   		 j=w+.5;   
                   		  $(".c").css("width",j+"px")
                   		 document.getElementsByClassName("b1").style.display="none";   
            		}
                    if(left1>30 && left1<60)
                    {   var h = $(".c").height();     i=h+.5+"px"; alert(i);     $(".c").css("height",i);  }
               }		     
             // if(str=="100"){ alert("HELLO"); }    
         }

function curleft(l)
{
     var x = $("."+l).position().left;
     str = String(x);   
     left = parseInt(str);
     return left;
}

function curtop(m)
{
var y = $("."+m).position().top;
str2 = String(y);
top = parseInt(str2);
return top;  
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