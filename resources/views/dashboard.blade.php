<html>
 <head>
   <title>Home</title>
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
	   /* display: flex;
	   justify-content: center;
	   align-items: center; */
	   
	 }
	 ul.list a{
		color: #ffffff;
		text-decoration: none;
		width: 100%;
		height: 100%;
		display: flex;
	   	justify-content: center;
	   	align-items: center;
	 }
	 ul.list a:hover{
		color: #2B6038;

	 }

	 ul.list li:hover{
	   color: #2B6038;
	   background-color: rgb(0, 0, 0);
	 }

	 .imagec{
	   border-radius: 100px;
	   padding: 40px;
	   text-align: center;
	   vertical-align: middle;
	 }
	 .parent{
	   width: 190px;
	   /* length: 50px; */
	   background-color: #4FBA6A;
	   display: block;
	   height: 100%;
	   margin-top: 0;
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
		 height: 100%;
	    }

		ul.cbs li a:hover{
			color: #4FBA6A;
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
	   
	   .profile{
	     width: 300px;
		 margin-right: 25px;
		 height: 306px;
		 margin-bottom: 15px;
		 margin-top: 0px;
		 padding-top: 0px;
		}
		.schedule{
		 width: 300px;                
		 height: 307px; 
       	 margin-right: 25px;
		 margin-bottom: 15px;
		 margin-top: 0px;
		 padding-top: 0px;
		}
		.notice{
		 width: 285px;
		 height: 306px;
		 margin-right: 24px;
		 margin-bottom: 15px;
		 margin-top: 0px;
		 padding-top: 2px;
		}
		.scanner{
		 width: 300px;
		 height: 300px;
		 margin-right: 25px;
		 }
		
		 
		.settings{
		 width: 300px;
		 height: 300px;
		 margin-right: 25px;
	    }
		.home{
		 width: 293px;
		 height: 300px;
		}
		.review{
	     margin-left: 207px;
		 background-color: #e5e4d7;
		 display: inline-block;
		 padding: 50px;
		 margin-top: 0px;
		 width:  973px;
		 height: 602px;
		 position: absolute;
		 top: 34px;
		 left: 24px;
		 
	   }
	  </style>
 </head>
 <body> 
    
    <div class="parent">
	  <img src="/static/img/prof.png" class="imagec">
	  <p class="name">Ashikur Rahman</p>
	  <p class="id"> ID:1000121 </p>
	  <div class="hov"><ul class="list">
	    <li><a href="/">HOME</a></li>
	    <li><a href="/">DASHBOARD</a></li>
		<li><a href="schedule">SCHEDULE</a></li>
		<li><a href="profile">PROFILE</a></li>
		<li><a href="Scanner">SCANNER</a></li>
		<li><a href="#">SETTINGS</a></li>
	  </ul></div>
	</div>
	  <div id="nav2">
	   <p class="review">
	   
		<a href="profile"><img src="/static/img/profile.png" class="profile"></a>
        <a href="schedule"><img src="/static/img/schedule.png" class="schedule"></a>
        <a href=""><img src="/static/img/notices.png" class="notice"></a>
        <a href="Scanner"><img src="/static/img/scanner.png" class="scanner"></a>
        <a><img src="/static/img/settings.png" class="settings"></a>
        <a><img src="/static/img/folders.png" class="home"></a>		
	   </p>
	  </div>
	 
  </body>
 </html>