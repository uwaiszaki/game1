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
<div id = "d" style="color:white; height: 50px;  "> </div>
<div style="position: relative; height: 600px; width: 1100px; left: 170px; top:50px;  border: 10px; border-color: red;">
<video width="1110  " height="600"  autoplay   style="padding: 0;  margin: 0; ">
  <source src="Animated Clouds Motion Background.mp4" type="video/mp4">

</video>
<div >
<img src= "plane2.png" style="height:60px;width:60px;position:absolute; left:20px; top:100px;" class="c"> 
</div>   


<div style="background-color: red; height: 400px; width: 10px; position: absolute; right: 0; top:200px; display: none;" class="b1"> </div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 100px; display: none; top:0;" class="b2"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 200px; display: none; top:0;" class="b3"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 200px; display: none; top:400px;" class="b4"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 300px; display: none; top:0;" class="b5"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 100px; display: none; top:500px;" class="b6"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 380px; display: none; top:0;" class="b7" ></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 20px; display: none; top:580px;" class="b8"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 20px; display: none; top:0;" class="b9"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 380px; display: none; top:220px;" class="b10"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 100px; display: none; top:0;" class="b11"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 300px; display: none; top:300px;" class="b12"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 20px; display: none; top:0; " class="b13"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 380px; display: none; top:220px;" class="b14"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 200px; display: none;  top:0;" class="b15"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 200px; display: none; top:400px;" class="b16"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 300px; display: none; top:0;" class="b17"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 100px; display: none; top:500px;" class="b18"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 0px; display: none;  top:0; " class="b19"></div>
<div style=" background-color:red; position: absolute; right: 0px; width: 10px; height: 450px; display: none; top:150px;" class="b20"></div>
</div>
<script>
var b = document.getElementById("c");
var d=0;
var e=0;
var h=2;
var g=1;
var i=1;
var j=1;
var k= 8 ;
$(document).ready(function(){  $(".c").animate({left: "1040px"},3000, function(){   alert("Game Over");     });     });

$(document).ready(  function(){    
                                         xyza();

                                      function xyza()
                                      {    for (let z = 1; z <= 20; z++) {    $(".b"+z).css("left","1090px");      }
                                                                                                              
                                          g=1; h=2;

                                          interval1=0;
                                                       var n = k*1000;
                                                       if(k==8){ document.getElementById("d").innerHTML="LEVEL : EASY";  }
                                                       if(k==6){ document.getElementById("d").innerHTML="LEVEL : NORMAL";  }
                                                       if(k==4){ document.getElementById("d").innerHTML="LEVEL : HARD";  }
                                                       if(k==2){ document.getElementById("d").innerHTML="LEVEL : LEGENDARY";  }
                                          var interval1 = setInterval( function(){   $(".b"+g).show();   $(".b"+h).show();     
                                                                                  $(".b"+g).animate({left:"8px"},n, function(){    });
                                                                                 $(".b"+h).animate({left:"8px"},n, function(){   });
                                                                                 g=g+2;  h=h+2;
                                                                                if(g==25){   
                                                                                          clearInterval(interval1); 
                                                                                             k = k - 2;
                                                                                            if(k>=2)
                                                                                            { 
                                                                                              
                                                                                              xyza(); }
                                                                                          else  {   alert("Won the Game");   


                                                                                           }
                                                                                          }

                                                                                 }

                                          ,1000);
                                       }  
                              } 
                 );
$(document).ready(
function()
{
var interval2 = setInterval(function(){      let leftb1 = curleft("b1");   let rightb1 = leftb1 + 10;      
                               let leftb3 = curleft("b3");      let rightb3 = leftb3 + 10;
                               var leftb5 = curleft("b5");        var rightb5 = leftb5 + 10;
                               var leftb7 = curleft("b7");        var rightb7 = leftb7 + 10;
                               var leftb9 = curleft("b9");          var rightb9 = leftb9 + 10;
                               var leftb11 = curleft("b11");          var rightb11 = leftb11 + 10;
                               var leftb13 = curleft("b13");          var rightb13 = leftb13 + 10;
                               var leftb15 = curleft("b15");          var rightb15 = leftb15 + 10;
                               var leftb17 = curleft("b17");          var rightb17 = leftb17 + 10;
                               var leftb19 = curleft("b19");          var rightb19 = leftb19 + 10;
                               var topc = curtop("c");       var leftc= curleft("c");   var rightc= leftc + 60;   var bottomc = topc + 60;     
                             //   ab bachjaega  ..ab game poora krdunga
                              if(rightc> leftb1 && rightc < rightb1) 
                               {               if(topc < 80 || bottomc> 220){  alert("game over");   clearInterval(interval2);   }          }
                             else
                              if(leftc > leftb1 && leftc <rightb1   )
                                { if(topc < 80 || bottomc> 220){  alert("game over");  clearInterval(interval2);  }   }
                              
                             else 
                              if(rightc> leftb3 && rightc < rightb3) 
                               {               if(topc < 180 || bottomc> 420){  alert("game over 3");  clearInterval(interval2); }          }
                             else
                              if(leftc > leftb3 && leftc <rightb3   )
                                {              if(topc < 180 || bottomc> 420){  alert("game over 3");   clearInterval(interval2); }     }

                              else
                              if(rightc> leftb5 && rightc < rightb5) 
                               {               if(topc < 280 || bottomc> 520){  alert("game over 4");  clearInterval(interval2);  }          }
                             else
                              if(leftc > leftb5 && leftc <rightb5   )
                                {              if(topc < 280 || bottomc> 520){  alert("game over 4");  clearInterval(interval2);  }   }
                                
                              else   
                               if(rightc> leftb7 && rightc < rightb7) 
                               {               if(topc < 360 || bottomc> 600){  alert("game over");   clearInterval(interval2);  }          }
                             else
                              if(leftc > leftb7 && leftc <rightb7   )
                                {              if(topc < 360 || bottomc> 600){  alert("game over");     clearInterval(interval2);   }   }
                             
                             else
                              if(rightc> leftb9 && rightc < rightb9) 
                               {               if(topc < 0 || bottomc> 240){  alert("game over");      clearInterval(interval2);  }          }
                             else
                              if(leftc > leftb9 && leftc <rightb9)
                                {              if(topc < 0 || bottomc> 240){  alert("game over");     clearInterval(interval2);  }   }
                            
                              else
                              if(rightc> leftb11 && rightc < rightb11) 
                               {               if(topc < 80 || bottomc> 320){  alert("game over");    clearInterval(interval2);  }          }
                             else
                              if(leftc > leftb11 && leftc <rightb11   )
                                {              if(topc < 80 || bottomc> 320){  alert("game over");   clearInterval(interval2); }   }
                             
                              else
                              if(rightc> leftb13 && rightc < rightb13) 
                               {               if(topc < 0 || bottomc> 240){  alert("game over");   clearInterval(interval2); }          }
                             else
                              if(leftc > leftb13 && leftc <rightb13   )
                                {              if(topc < 0 || bottomc> 240){  alert("game over");  clearInterval(interval2); }   }
                             
                             else
                              if(rightc> leftb15 && rightc < rightb15) 
                               {               if(topc < 180 || bottomc> 420){  alert("game over");  clearInterval(interval2);  }          }
                             else
                              if(leftc > leftb15 && leftc <rightb15   )
                                {              if(topc < 180 || bottomc> 420){  alert("game over");  clearInterval(interval2);  }   }

                             else
                              if(rightc> leftb17 && rightc < rightb17) 
                               {               if(topc < 280 || bottomc> 520){  alert("game over"); clearInterval(interval2);  }          }
                             else
                              if(leftc > leftb17 && leftc <rightb17   )
                                {              if(topc < 280 || bottomc> 520){  alert("game over");  clearInterval(interval2);  }   }
                             
                             else
                              if(rightc> leftb19 && rightc < rightb19) 
                               {               if(topc < -20 || bottomc> 170){  alert("game over");  clearInterval(interval2); }          }
                             else
                              if(leftc > leftb19 && leftc <rightb19   )
                                {              if(topc < -20 || bottomc> 170){  alert("game over"); clearInterval(interval2); }   }
                              
                              
                              
                                                                           

                      },10);
         }
                );


$(document).keydown(
	function a1(event){  var a = event.keyCode;
                         var y = setInterval(xyz,1);         
     				if(a==39 )
     				{  
               $(".c").stop();
         				if(e%2==0||f==2||f==4)			 
        			{   f=3;    $(".c").animate({left: "1020px"},2000, function(){        });   }
             e++;
            }
     				
     if(a==40 )
     {   $(".c").stop();
         
         if(d%2==0||f==1||f==3) 
        {          f=4;         $(".c").animate({top: "540px"},1000, function(){        });  }
      d++;
     }
     if(a==37 )
     {   $(".c").stop();
         
         if(e%2==0||f==2||f==4)  
        {   f=1;  $(".c").animate({left: "20px"},2000, function(){        });   }
        e++;
      }
     if(a==38 )
     {   $(".c").stop();
          
          if(d%2==0||f==1||f==3)
        { f=2;  $(".c").animate({top: "0px"},1000 , function(){        });   }
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
let top = parseInt(str2);
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