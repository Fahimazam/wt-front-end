<html>
 <head>
   <title>Profile Page</title>
   <style>
    body{
	 margin-top: 0;
	 padding-top: 0;
	}
     ul.list{
	  margin: 0;
	  padding: 0;
	  list-style: unordered;
	  
     }
	 ul.list li{
	   text-decoration: none;
	   /* display: block; */
	   display: inline-block;
	   background-color: #2B6038;
	   width: 187px;
	   text-align: center;
	   border-color: rgb(255, 255, 255);
	   border-style: solid;
	   border-width: 1px;
	   height:60px;
	   display: flex;
	   justify-content: center;
	   align-items: center;
	 }
	 ul.list a{
	   color: white;
	   text-align: center;
	   text-decoration: none;
	   margin: auto;
	   text-decoration: none;
	 }
	 ul.list a li:hover{
	   color: #2B6038;
	   background-color: black;
	   /* background-color: silver; */
	   /* border: 1px solid blue; */
	 }
	 
	 .imagec{
	   border-radius: 100px;
	   padding: 40px;
	   text-align: center;
	   vertical-align: middle;
	 }
	 .parent{
	   width: 190px;
	   background-color: #4FBA6A;
	   display: block;
	   height: 100%;
	   height: 716px;
	 }
	 .name{
	   margin-left: 30px;
	   padding: 0;
	   color: white;
	   font-size: 20px;
	   text-align: center;
	   margin: auto;
	   text-align: center;
	   margin: auto;
	 }
	 .id{
	  margin-left: 45px;
	  color: white;
	  font-size: 20px;
	  
	 }
	 .features{
	   display: block;
	   background-color: white;
	   width: 80px;
	   height: 20px;
	 }
	 .nav{
	     background-color: #2B6038;
		 height: 35px;
		 font-size: 25px;
	     font-weight: bold;
		 font: Tahoma;
		 padding-top: 0;
		 margin-top: 0;
		 position: absolute;
		 top: 0px;
		 left: 210px;
		 width: 900px;
		 
	   }
	    ul.cbs{
	     padding: 0;
		 margin-left: 50px;
		 list-style-type: none;
		 text-align: center;
		 padding-left: 80px;
		 margin-top: 0px;
		 padding-left: 0px;
	   }
	    ul.cbs li{
	     display: inline;
		 padding: 15px;
		 vertical-align: middle;
		 margin-top: 0px;
	   }
	    ul.cbs li a{
	     text-decoration: none;
		 padding: 10px 10px 10px 10px;
		 color: rgb(255, 255, 255);
		 vertical-align: middle;
		 margin-top: 20px;
	    }

		ul.cbs li a:hover{
			color: #4FBA6A;
		}

		.review{
	     margin-left: 190px;
		 background-color: #e5e4d7;
		 display: inline-block;
		 padding: 50px;
		 margin-top: 0px;
		 width:  960px;
		 height: 600px;
		 position: absolute;
		 top: 34px;
		 left: 24px;
		 box-shadow: 10px 10px 5px silver;
	   }
		.about{
		 width: 900px;
		 height: 250px;
		 background-color: white;
		 margin-left: 250px;
		 margin-top: 40px;
		 padding-top: 40px;
		 position: absolute;
		 top: 60px;
		 left: 40px;
		 border: 2px solid #2B6038;
		 border-width: thick;
		 overflow: auto;
		 box-shadow: 10px 10px 5px #2B6038;
		}
		h2{
		 margin-left: 45px;
		 font-family: Arial;
		}
		.para{
		 margin-left: 45px;
		 font-family: Arial;
		}
		.recent{
		 width: 900px;
		 height: 250px;
		 background-color: white;
		 position: absolute;
		 top: 450px;
		 left: 289px;
		 border: 2px solid #2B6038;
		 border-width: thick;
		 overflow: auto;
		 box-shadow: 10px 10px 5px #2B6038;
		}
		
	  </style>
 </head>
 <body> 
    
    <div class="parent">
	  <img src="/static/img/prof.png" class="imagec">
	  <p class="name">Ashikur Rahman</p>
	  <p class="id"> ID:1000121 </p>
	  <ul class="list">
	    <a href="/"><li>HOME</li></a>
	    <a href="/"><li>DASHBOARD</li></a>
	    <a href="schedule"><li>SCHEDULE</li></a>
	    <a href="profile"><li>PROFILE</li></a>
	    <a href="Scanner"><li>SCANNER</li></a>
	    <a href="#"><li>SETTINGS</li></a>
	  </ul>
	</div>
	
	<div id="nav2">
	    <p class="review">
	     <div class="about">
  		   <h2>About</h2>
		   <br>
		   <p class="para">Full Name &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Ashikur Rahman </p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ashik@gmail.com</p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">Phone &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 01723864250</p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">Address &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Noor-Jahan Road, Dhaka</p>
		   <br> 
		 </div>
		
	    <div class="recent">
		   <h2>Details</h2>
		   <br>
		   <p class="para">Blood Group &nbsp &nbsp; &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp O Positive</p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">NID No. &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 187660215</p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">Birth Date &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 06/11/1992</p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Male</p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">Father's Name &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Noor-Jahan Road, Akkas Rahman</p>
		   <br> 
		   <hr width="90%">
		   <br>
		   <p class="para">Mother's Name &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Noor-Jahan Road, Zahanara Khatun</p>
		 </div>
		</p>   
		   
	</div>
	 
  </body>
 </html>