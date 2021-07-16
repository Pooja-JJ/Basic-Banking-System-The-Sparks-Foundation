<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
#main{
	background-color: #fff;
	position: absolute;
	top: 50%;
	left:50%;
	transform: translate(-50%,-50%);
	width:600px;
	padding: 30px;
	box-sizing: border-box;
	border-radius: 10px;
	box-shadow:0 15px 50px rgba(0,0,0,.2);
	/*background-color: #e5e4d7;
	margin-left: 10px;
	margin-right: 320px;
	margin-bottom: 10px;
	margin-top:10px;
	border-radius: 5px;
	padding: 20px;
	font-size: 110%;*/
}
#main2{
	width:145px;
	height: 145px;
	background: url(img/pkn.png);
	border-radius: 80%;
	float:left;
	shape-outside:circle();
	margin: 60px 30px 30px 0; 
	box-shadow: 0 0 20px #999999;

}
        p{
	margin:25px;
	padding: 5px;
	text-align: justify;
	line-height: 22px;
}
h1{
	margin: 0 0 20px;
	padding: 0;
	font-size: 30px;
}
.social-menu ul {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 0;
    margin-top: 150px;
    display: flex;
}
.social-menu ul li {
    list-style: none;
    margin: 0 10px;
}
.social-menu ul li .fa {
    color: #000000;
    font-size: 25px;
    line-height: 70px;
    transition: .5s;
}
.social-menu ul li .fa:hover {
    color: #ffffff;
}
.social-menu ul li a {
    position: relative;
    display: block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: white;
    text-align: center;
    transition: 0.5s;
    transform: translate(0,0px);
    box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.5);
}
.social-menu ul li a:hover {
    transform: rotate(0deg) skew(0deg) translate(0, -10px);
}
.social-menu ul li:nth-child(1) a:hover {
background-color: #deebdd;
background-image: linear-gradient(315deg, #deebdd 0%, #bbdbbe 74%);}
.social-menu ul li:nth-child(2) a:hover {
background-color: #deebdd;
background-image: linear-gradient(315deg, #deebdd 0%, #bbdbbe 74%);}
.social-menu ul li:nth-child(3) a:hover {
background-color: #deebdd;
background-image: linear-gradient(315deg, #deebdd 0%, #bbdbbe 74%);}

img{margin-top: 9px; 
 } 
 .nv ul{
 	float:right;
			list-style-type: none;
			margin-top: 25px;
			margin-right: 100px;
 }
 .nv ul li{
display:inline-block;
 }
 .nv ul li a{
 text-decoration: none;
			padding:5px 10px;
			border:1px solid black;
			border-width: 2px;
			transition: 0.6s ease;
			position: relative;
		    display: inline-block;
		    padding: 12px 36px;
		    margin: 10px 0;
		    text-decoration: none;
		    text-transform: uppercase;
		    font-size: 18px;
		    letter-spacing: 2px;
		    border-radius: 7px;
		    color: black;
		    
    
 }
 .nv ul li a:hover{
 	color: white;
 	background-color: #9dc5c3;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
		}

	</style>
	<title>About Me</title>
 
 
</head>
<body>
	<div  class="nv">
	<ul >
				<li class="active"><a  href="index.php" >Home</a></li> </ul></div>
	
			<div id="main">
				<div id="main2"></div>
				<h2> Pooja JJ</h2>
				    <!--img id="image2" src="C:\xampp\htdocs\TSF\r.jpg" align="left"-->

			    <p> I am an  aspiring web developer pursuing B.Tech in Computer Science Engineering from Indur Institute of Engineering and Technology.I have skills in coordination and development of engineering projects.I have also worked on different programming languages such as,HTML,CSS,JavaScript, PHP ,MYSQL ,PYTHON ,JAVA and WordPress.
			
			<br>Looking for an
organization which provides me the opportunity to improve
my skills and knowledge to growth along with the organization
objective.    <br><center><h3 style="margin-top:-30px;">Follow Me Through</h3></center>
			  </p>

			</div>
<div class="social-menu">
  <ul>
    <li><a href=""><i class="fa fa-facebook"><img src="img/fb.png"></i></a></li>
    <li><a href=""><i class="fa fa-youtube"><img src="img/youtube.png"></i></a></li>
    <li><a href=""><i class="fa fa-twitter"><img src="img/twitter.png"></i></a></li>
      
  </ul>
</div>



</body>
</html>