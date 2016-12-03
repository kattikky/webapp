<?php
    require "dbconnect.php";
    //session_start();
    
?>


<html>
	<head>		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta charset="UTF-8">
		<title>MA-RSA | มาอาสา.com</title>
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="style-homepage.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtr3FT0uDFpjx-VisBICLWclTjETC6UTc"></script>
		<script>
		function initialize() {
		  var mapProp = {
		    center:new google.maps.LatLng(13.746058, 100.534909),
		    zoom:5,
		    mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
        
		<!-- progress bar -->
		<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>-->
		<script>
			$(function() {
				$(".meter > span").each(function() {
					$(this)
						.data("origWidth", $(this).width())
						.width(0)
						.animate({
							width: $(this).data("origWidth")
						}, 1200);
				});
			});
		</script><!-- end progress bar -->	
        
        <script>
            
            $('.number-left').ready(function(){
                $.ajax({
                    type:"POST",
                    url:"count_member.php"
                }).done(function(data){
                        //alert(data);
                        $('.number-left').html(data);
                    });
            });
            
            $('.number-right').ready(function(){
                $.ajax({
                    type:"POST",
                    url:"count_project.php"
                }).done(function(data){
                        //alert(data);
                        $('.number-right').html(data);
                    });
            });
            
        </script><!-- count stat -->
        
        <script>
            
            $(document).ready(function(){
                $('.select-page a').click(function(){
                    var t = $(this).attr('href');
                    t = t.replace('#','');
                    //alert("T IS : "+t);
                    
                    $.ajax({
                        url:'tabs.php',
                        data:{'tab':t},
                        type:'get',
                        cache:false,
                        success: function(value){
                            var data = value.split(",");
                            //alert(data);
                            $('#board-head-text-1').html(data[0]);
                            $('#board-text-b-1').html(data[1]);
                            $('#board-text-b-2').html(data[2]);
                            $('#board-head-text-2').html(data[3]);
                            $('#board-text-m-1').html(data[4]);
                            $('#board-text-m-2').html(data[5]);
                            $('#board-head-text-3').html(data[6]);
                            $('#board-text-tk-1').html(data[7]);
                            $('#board-text-tk-2').html(data[8]);
                            $('#board-head-text-4').html(data[9]);
                            $('#board-text-f-1').html(data[10]);
                            $('#board-text-f-2').html(data[11]);
                            $('#board-head-text-5').html(data[12]);
                            $('#board-text-t-1').html(data[13]);
                            $('#board-text-t-2').html(data[14]);
                        },
                        error: function (error) {
                            alert('error; ' + eval(error));
                        }
                    })
                    
                    
                });
                
            });
        </script><!-- tab -->	

	</head>

	<body>
		<div class="header">
			<video autoplay  id="bgvid" loop>
			<source src="videos/video-header.mp4" type="video/mp4">
			</video>

			<div class="bg-header-mobile"></div>
			<div class="logo">
				<a href="index.php"><img src="images/logo.png"></a>
			</div>

				<div class="menu-nav-destop">
					<ul>
						<li><a href="index.php" class="text-menu-destop active-menu-des">หน้าแรก</a></li>
						<li><a href="#" class="text-menu-destop">บริจาค</a></li>
						<li><a href="#" class="text-menu-destop">โครงการ</a></li>
						<li><a href="content.html" class="text-menu-destop">บอร์ด</a></li>
						<li><a href="contact.html" class="text-menu-destop">เกี่ยวกับเรา</a></li>
						<li><a href="login.php" class="text-menu-destop">เข้าสู่ระบบ</a></li>
					</ul>
				</div>

				<input class="burger-check" id="burger-check" type="checkbox">
				<label for="burger-check" class="burger"></label>
				<nav id="navigation1" class="navigation">
					<ul>
					    <li><a href="index.php" class="text-burger active-menu">หน้าแรก</a></li>
					    <li><a href="#" class="text-burger">บริจาค</a></li>
					    <li><a href="#" class="text-burger">โครงการ</a></li>
					    <li><a href="content.html" class="text-burger">บอร์ด</a></li>
					    <li><a href="contact.html" class="text-burger">เกี่ยวกับเรา</a></li>
					    <li><a href="login.php" class="text-burger">เข้าสู่ระบบ</a></li>
					</ul>
				</nav>
					
				<div class="thumb-button">
					<div class="circle-head">
						<a href="login.php" class="icon-head">
						<i class="fa fa-user"></i></a>
					</div>
					<div class="circle-head">
						<a href="search.php" class="icon-head">
						<i class="fa fa-search"></i></a>
					</div>
				</div>				
		</div><!-- end header -->
		
		<div id="wrapper">
			<div class="stat">
				<div class="stat-left">
					<div class="number-left">4,554</div>
					<div class="textleft-stat"> สมาชิก</div>
					<div class="line-left"></div>
					<div class="line-right"></div>
				</div>
				<div class="line-middle"></div>
				<div class="stat-right">
					<div class="number-right">554</div>
					<div class="textright-stat">โครงการ</div>
					<div class="line-left"></div>
					<div class="line-right"></div>
				</div>	
			</div><!-- end stat -->

			<div class="board">
				<div class="menu-header">				
					<div class="menu-header-text">บอร์ด</div>
				</div>

				<div class="board-bg-box">
					<div class="board-bg-type"></div>
						<div class="icon-board-type">
						<i class="fa fa-tint"></i></div>
					<div id="board-head-text-1">ด่วน!!! ต้องการเลือดให้แมวจำนวนมาก</div>
					<div class="wrap-board-text">
						<div class="icon-board-text">
						<i class="fa fa-user"></i></div>
						<div id="board-text-b-1">อุมา</div>
						<div class="icon-board-text">
						<i class="fa fa-calendar"></i></div>
						<div id="board-text-b-2">05/04/2559</div>
						<div class="icon-board-text">
						<i class="fa  fa-clock-o"></i></div>					
						<div id="board-text-b-3">12:00</div>
					</div>
				</div><!-- board-bg-box1 -->

				<div class="board-bg-box">
					<div class="board-bg-type"></div>
						<div class="icon-board-type">
						<i class="fa fa-dollar"></i></div>
					<div id="board-head-text-2">ต้องการให้มีคนร่วมช่วยเหลือแมว</div>
					<div class="wrap-board-text">
						<div class="icon-board-text">
						<i class="fa fa-user"></i></div>
						<div id="board-text-m-1">กติณีย์</div>
						<div class="icon-board-text">
						<i class="fa fa-calendar"></i></div>
						<div id="board-text-m-2">04/04/2559</div>
						<div class="icon-board-text">
						<i class="fa  fa-clock-o"></i></div>					
						<div id="board-text-m-3">22:00</div>
					</div>
				</div><!-- board-bg-box2 -->

				<div class="board-bg-box">
					<div class="board-bg-type"></div>
						<div class="icon-board-type">
						<i class="fa fa-paw"></i></div>
					<div id="board-head-text-3">ด่วน!! ต้องการที่นอนแมวจำนวนมาก</div>
					<div class="wrap-board-text">
						<div class="icon-board-text">
						<i class="fa fa-user"></i></div>
						<div id="board-text-tk-1">ปริณดา</div>
						<div class="icon-board-text">
						<i class="fa fa-calendar"></i></div>
						<div id="board-text-tk-2">04/04/2559</div>
						<div class="icon-board-text">
						<i class="fa  fa-clock-o"></i></div>					
						<div id="board-text-tk-3">13:00</div>
					</div>
				</div><!-- board-bg-box3 -->

				<div class="board-bg-box">
					<div class="board-bg-type"></div>
						<div class="icon-board-type">
						<i class="fa fa-cutlery"></i></div>
					<div id="board-head-text-4">ด่วน!! ต้องการอาหารแมวจำนวนมาก</div>
					<div class="wrap-board-text">
						<div class="icon-board-text">
						<i class="fa fa-user"></i></div>
						<div id="board-text-f-1">ฉัตร</div>
						<div class="icon-board-text">
						<i class="fa fa-calendar"></i></div>
						<div id="board-text-f-2">03/04/2559</div>
						<div class="icon-board-text">
						<i class="fa  fa-clock-o"></i></div>					
						<div id="board-text-f-3">14:00</div>
					</div>
				</div><!-- board-bg-box4 -->

				<div class="board-bg-box">
					<div class="board-bg-type"></div>
						<div class="icon-board-type">
						<i class="fa fa-home"></i></div>
					<div id="board-head-text-5">หาบ้านให้น้องแมวอายุ 1 เดือน</div>
					<div class="wrap-board-text">
						<div class="icon-board-text">
						<i class="fa fa-user"></i></div>
						<div id="board-text-t-1">อุมากร</div>
						<div class="icon-board-text">
						<i class="fa fa-calendar"></i></div>
						<div id="board-text-t-2">03/04/2559</div>
						<div class="icon-board-text">
						<i class="fa  fa-clock-o"></i></div>					
						<div id="board-text-t-3">18:00</div>
					</div>
				</div><!-- board-bg-box5 -->

				<div class="select-page">
					<a href="#tab1" class="icon-select-page">
					<i class="fa fa-angle-double-left"></i></a>
					<a href="#tab2" class="icon-select-page">
					<i class="fa fa-angle-double-right"></i></a>
				</div>
			</div><!-- end board -->

			<div class="recent-donate">
				<div class="menu-header">
					<div class="menu-header-text">ผู้บริจาคล่าสุด</div>
				</div>
				<div class="work-item">
					<div class="recent-donate-image">
						<img src="images/recent-donate-people_01.png">
						<!-- hover picture-->
						<div class="thumb-overlay">
							<div class="icon-thumb">
							<i class="fa fa-dollar"></i></div>
							<div class="thumb-text">5,000</div>
							<div class="thumb-text">สมพงศ์</div>					
						</div><!-- thumb-overlay -->
					</div>					
				</div><!-- image user1 -->

				<div class="work-item">
					<div class="recent-donate-image">
						<img src="images/recent-donate-people_02.png">
						<!-- hover picture-->
						<div class="thumb-overlay">
							<div class="icon-thumb">
							<i class="fa fa-dollar"></i></div>
							<div class="thumb-text">10,000</div>
							<div class="thumb-text">สมชาย</div>					
						</div><!-- thumb-overlay -->
					</div>					
				</div><!-- image user2 -->

				<div class="work-item">
					<div class="recent-donate-image">
						<img src="images/recent-donate-people_03.png">
						<!-- hover picture-->
						<div class="thumb-overlay">
							<div class="icon-thumb">
							<i class="fa fa-dollar"></i></div>
							<div class="thumb-text">2,000</div>
							<div class="thumb-text">ศรัณย์</div>					
						</div><!-- thumb-overlay -->
					</div>					
				</div><!-- image user3 -->

				<div class="work-item">
					<div class="recent-donate-image">
						<img src="images/recent-donate-people_04.png">
						<!-- hover picture-->
						<div class="thumb-overlay">
							<div class="icon-thumb">
							<i class="fa fa-dollar"></i></div>
							<div class="thumb-text">1,000</div>
							<div class="thumb-text">มาวิน</div>					
						</div><!-- thumb-overlay -->
					</div>					
				</div><!-- image user4 -->

				<div id="work-item5">
					<div class="recent-donate-image">
						<img src="images/recent-donate-people_05.png">
						<!-- hover picture-->
						<div class="thumb-overlay">
							<div class="icon-thumb">
							<i class="fa fa-dollar"></i></div>
							<div class="thumb-text">3,000</div>
							<div class="thumb-text">ณัฐ</div>					
						</div><!-- thumb-overlay -->
					</div>					
				</div><!-- image user5 -->

				<div id="work-item6">
					<div class="recent-donate-image">
						<img src="images/recent-donate-people_06.png">
						<!-- hover picture-->
						<div class="thumb-overlay">
							<div class="icon-thumb">
							<i class="fa fa-dollar"></i></div>
							<div class="thumb-text">2,000</div>
							<div class="thumb-text">ฉัตราพรรณ</div>					
						</div><!-- thumb-overlay -->
					</div>					
				</div><!-- image user6 -->

				<div id="work-item7">
					<div class="recent-donate-image">
						<img src="images/recent-donate-people_07.png">
						<!-- hover picture-->
						<div class="thumb-overlay">
							<div class="icon-thumb">
							<i class="fa fa-dollar"></i></div>
							<div class="thumb-text">1,000</div>
							<div class="thumb-text">วิชัย</div>					
						</div><!-- thumb-overlay -->
					</div>					
				</div><!-- image user7 -->

				<div id="work-item8">
					<div class="recent-donate-image">
						<img src="images/recent-donate-people_08.png">
						<!-- hover picture-->
						<div class="thumb-overlay">
							<div class="icon-thumb">
							<i class="fa fa-dollar"></i></div>
							<div class="thumb-text">1,000</div>
							<div class="thumb-text">อุดม</div>					
						</div><!-- thumb-overlay -->
					</div>					
				</div><!-- image user8 -->

				<div class="select-page-button">
					<div class="page-button activebutton"></div>
					<div class="page-button"></div>
					<div class="page-button"></div>
					<div class="page-button"></div>
					<div class="page-button"></div>
					<div class="page-button"></div>
				</div>
			</div><!-- end recent donate -->

			<div class="donate">
				<div class="menu-header">
					<div class="menu-header-text">การบริจาค</div>
				</div>
                
				<div class="donate-menu-m">
					<a href="#" class="icon-donate-menu">
					<i class="fa fa-dollar"></i></a>
					<div id="text-donate-menu-m1"><a href="#">บริจาคเงิน</a></div>
				</div>
                
                <div class="donate-menu">
					<a href="#" class="icon-donate-menu">
					<i class="fa fa-dollar"></i></a>
					<div id="text-donate-menu-1"><a href="#">บริจาคเงิน</a></div>
				</div>

				<div id="donate-block-mobile1">
					<div class="donate-text-stat-m">5,132</div>
					<div class="donate-text-unit-m">baht</div>
					<div class="donate-line-left-m"></div>
					<div class="donate-line-right-m"></div>
					<div class="input-data-donate-m">
						<input type="text" class="donate-input-text-m" placeholder="จำนวนเงิน" />
						<input type="text" class="donate-input-text-m" placeholder="ชื่อผู้บริจาค"/>
						<input type="submit" class="donate-input-m" placeholder="บริจาค" />
					</div>
				</div>

				<div class="donate-menu-m">
					<a href="#" class="icon-donate-menu">
					<i class="fa fa-cutlery"></i></a>
					<div id="text-donate-menu-m2"><a href="#">บริจาคอาหาร</a></div>
				</div>
                
                <div class="donate-menu">
					<a href="#" class="icon-donate-menu">
					<i class="fa fa-cutlery"></i></a>
					<div id="text-donate-menu-2"><a href="#">บริจาคอาหาร</a></div>
				</div>
                
                <div id="donate-block-mobile2">
					<div class="donate-text-stat-m">500</div>
					<div class="donate-text-unit-m">kg</div>
					<div class="donate-line-left-m"></div>
					<div class="donate-line-right-m"></div>
					<div class="input-data-donate-m">
						<input type="text" class="donate-input-text-m" placeholder="จำนวนอาหาร" />
						<input type="text" class="donate-input-text-m" placeholder="ชื่อผู้บริจาค"/>
						<input type="submit" class="donate-input-m" placeholder="บริจาค" />
					</div>
				</div>

				<div class="donate-menu-m">
					<a href="#" class="icon-donate-menu">
					<i class="fa fa-paw"></i></a>
					<div id="text-donate-menu-m3"><a href="#">บริจาคสิ่งของ</a></div>
				</div>
                
                <div class="donate-menu">
					<a href="#" class="icon-donate-menu">
					<i class="fa fa-paw"></i></a>
					<div id="text-donate-menu-3"><a href="#">บริจาคสิ่งของ</a></div>
				</div>

				<div id="donate-block-mobile3">
					<div class="donate-text-stat-m">132</div>
					<div class="donate-text-unit-m">piece</div>
					<div class="donate-line-left-m"></div>
					<div class="donate-line-right-m"></div>
					<div class="input-data-donate-m">
						<input type="text" class="donate-input-text-m" placeholder="จำนวนสิ่งชอง" />
						<input type="text" class="donate-input-text-m" placeholder="ชื่อผู้บริจาค"/>
						<input type="submit" class="donate-input-m" placeholder="บริจาค" />
					</div>
				</div>

				<div id="donate-block1">
					<div class="donate-text-stat">5,132</div>
					<div class="donate-text-unit">baht</div>
					<div class="donate-line-left"></div>
					<div class="donate-line-right"></div>
					<div class="input-data-donate">
						<input type="text" class="donate-input-text" placeholder="จำนวนเงิน" />
						<input type="text" class="donate-input-text" placeholder="ชื่อผู้บริจาค"/>
						<input type="submit" class="donate-input" placeholder="บริจาค" />
					</div>
				</div>

				<div id="donate-block2">
					<div class="donate-text-stat">500</div>
					<div class="donate-text-unit">kg</div>
					<div class="donate-line-left"></div>
					<div class="donate-line-right"></div>
					<div class="input-data-donate">
						<input type="text" class="donate-input-text" placeholder="จำนวนอาหาร" />
						<input type="text" class="donate-input-text" placeholder="ชื่อผู้บริจาค"/>
						<input type="submit" class="donate-input" placeholder="บริจาค" />
					</div>
				</div>

				<div id="donate-block3">
					<div class="donate-text-stat">132</div>
					<div class="donate-text-unit">piece</div>
					<div class="donate-line-left"></div>
					<div class="donate-line-right"></div>
					<div class="input-data-donate">
						<input type="text" class="donate-input-text" placeholder="จำนวนสิ่งชอง" />
						<input type="text" class="donate-input-text" placeholder="ชื่อผู้บริจาค"/>
						<input type="submit" class="donate-input" placeholder="บริจาค" />
					</div>
				</div>
			</div><!-- end donate -->

			<div class="project">				
				<div class="menu-header">
					<div class="menu-header-text">โครงการ</div>
				</div>
				<div id="wrap-project-box1">
					<div class="project-box">					
						<div class="project-icon-time">
							<i class="fa fa-clock-o"></i>
						</div>
						<div class="project-date">10:00 20/04/2559</div>
						<div class="project-text">โครงการสร้างบ้านแมว</div>
						<a href="#" class="icon-see-project">
						<i class="fa fa-angle-right"></i></a>
					</div><!-- project-box1 -->
				</div>

				<div id="wrap-project-box2">
					<div class="project-box activebg">				
						<div class="project-icon-time">
							<i class="fa fa-clock-o"></i>
						</div>
						<div class="project-date">8:00 15/04/2559</div>
						<div class="project-text">โครงการช่วยสร้างบ้านแมว</div>
						<a href="#" class="icon-see-project">
						<i class="fa fa-angle-right"></i></a>
					</div><!-- project-box2 -->
				</div>

				<div class="wrap-poject-detail">
					<div class="project-detail-box">
						<div class="project-img">
							<div class="project-bg-header">
								<div class="project-text-header">โครงการสร้างบ้านแมว</div>
							</div>
							<div class="project-bg-status">
								<div class="meter orange nostripes">
									<span style="width: 85%"></span>
								</div>
							</div>						
						</div>
						<div class="wrapper-project-button">
							<div class="bg-button">
								<div class="project-text-bottom">ข้อมูล</div>
							</div>
							<div class="bg-button">
								<div class="project-text-bottom">แผนที่</div>
							</div>
						</div>
						<div class="wrapper-project-map">
							<div id="googleMap"></div>
						</div>
					</div><!-- end project-detail-box -->
				</div>
				
				<div id="wrap-project-box3">
					<div class="project-box">					
						<div class="project-icon-time">
							<i class="fa fa-clock-o"></i>
						</div>
						<div class="project-date">8:00 28/04/2559</div>
						<div class="project-text">โครงการให้อาหารแมว</div>
						<a href="#" class="icon-see-project">
						<i class="fa fa-angle-right"></i></a>
					</div><!-- project-box3 -->
				</div>

				<div id="wrap-project-box4">
					<div class="project-box">					
						<div class="project-icon-time">
							<i class="fa fa-clock-o"></i>
						</div>
						<div class="project-date">8:00 28/04/2559</div>
						<div class="project-text">โครงการให้อาหารแมวไร้บ้าน</div>
						<a href="#" class="icon-see-project">
						<i class="fa fa-angle-right"></i></a>
					</div><!-- project-box4 -->
				</div>
			</div><!-- end project -->

			<div class="adopt">
				<div class="menu-header">
					<div class="menu-header-text">รับเลี้ยง</div>
				</div>

				<div class="bg-menu-adopt">
					<div class="wrap-button-type-adopt">
						<div class="button-type-adopt activebtype">
							<div class="text-type-adopt"><a href="#">ส่งต่อแมว</a></div>
						</div>
						<div class="button-type-adopt">
							<div class="text-type-adopt"><a href="#">แมวไร้บ้าน</a></div>
						</div>
					</div>
				</div><!-- end bg-menu-adopt -->

				<div id="adopt-box-data1">
					<div class="warpper-adopt-img">
						<div class="adopt-img-cat">
							<img src="images/adopt-img-cat.png">
						</div>
						<div class="select-img-button">
							<div class="img-button activebutton"></div>
							<div class="img-button"></div>
							<div class="img-button"></div>
							<div class="img-button"></div>
							<div class="img-button"></div>
						</div>
					</div><!-- warpper-adopt-img -->
					<div class="warpper-adopt-detail">
						<div class="wrapper-menu-adopt">
							<div class="button-menu-adopt">
								<div class="text-button-adopt">ข้อมูล</div>
							</div>
							<div class="button-menu-adopt">
								<div class="text-button-adopt">พูดคุย</div>
							</div>
							<div class="button-menu-adopt">
								<div class="text-button-adopt">แผนที่</div>
							</div>
						</div>
						<div class="adopt-detail">
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">ชื่อ : </div>
								<div class="adopt-text-detail">น้องฝ้าย</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">อายุ : </div>
								<div class="adopt-text-detail">6 เดือน</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">เพศ : </div>
								<div class="adopt-text-detail">เมีย</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">สี : </div>
								<div class="adopt-text-detail">ครีม</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">ลาย : </div>
								<div class="adopt-text-detail">ดำ</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">นิสัย : </div>
								<div class="adopt-text-detail">น่ารัก ขี้อ้อน กินจุ ชอบเล่น เลี้ยงง่าย ไม่กัด</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">ย้ายบ้านไปอยู๋คอนโดที่ห้ามเลี้ยงสัตว์</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="icon-text-adopt">
									<i class="fa fa-user"></i>
								</div>
								<div class="adopt-text">user55</div>
								<div class="icon-text-adopt">
									<i class="fa fa-calendar"></i>
								</div>
								<div class="adopt-text">20/04/2559</div>
							</div>
						</div>	<!-- adopt-detail -->
						<div class="button-adopt">
							<div class="text-botton-adopt">รับเลี้ยง</div>
						</div>
						<div class="button-shared">
							<a href="#" class="icon-shared-adopt">
							<i class="fa fa-share-alt"></i></a>
						</div>	
					</div><!-- warpper-adopt-detail -->		
				</div><!-- end adopt-box-data1 -->

				<div id="adopt-box-data2">
					<div class="warpper-adopt-img">
						<div class="adopt-img-cat">
							<img src="images/adopt-img-cat-01.png">
						</div>
						<div class="select-img-button">
							<div class="img-button activebutton"></div>
							<div class="img-button"></div>
							<div class="img-button"></div>
							<div class="img-button"></div>
							<div class="img-button"></div>
						</div>
					</div><!-- warpper-adopt-img -->
					<div class="warpper-adopt-detail">
						<div class="wrapper-menu-adopt">
							<div class="button-menu-adopt">
								<div class="text-button-adopt">ข้อมูล</div>
							</div>
							<div class="button-menu-adopt">
								<div class="text-button-adopt">พูดคุย</div>
							</div>
							<div class="button-menu-adopt">
								<div class="text-button-adopt">แผนที่</div>
							</div>
						</div>
						<div class="adopt-detail">
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">ชื่อ : </div>
								<div class="adopt-text-detail">ลัคกี้</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">อายุ : </div>
								<div class="adopt-text-detail">1 ปี</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">เพศ : </div>
								<div class="adopt-text-detail">ผู้</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">สี : </div>
								<div class="adopt-text-detail">ขาว</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">ลาย : </div>
								<div class="adopt-text-detail">ดำ - เทา</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">นิสัย : </div>
								<div class="adopt-text-detail">ขี้อ้อน ชอบกินขนม ชอบเล่น ขับถ่ายเป็นที่</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">ไม่สะดวกเลี้ยงต่อ</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="icon-text-adopt">
									<i class="fa fa-user"></i>
								</div>
								<div class="adopt-text">katy</div>
								<div class="icon-text-adopt">
									<i class="fa fa-calendar"></i>
								</div>
								<div class="adopt-text">20/04/2559</div>
							</div>
						</div>	<!-- adopt-detail -->
						<div class="button-adopt">
							<div class="text-botton-adopt">รับเลี้ยง</div>
						</div>
						<div class="button-shared">
							<a href="#" class="icon-shared-adopt">
							<i class="fa fa-share-alt"></i></a>
						</div>	
					</div><!-- warpper-adopt-detail -->		
				</div><!-- end adopt-box-data2 -->

				<div id="adopt-box-data3">
					<div class="warpper-adopt-img">
						<div class="adopt-img-cat">
							<img src="images/adopt-img-cat-01.png">
						</div>
						<div class="select-img-button">
							<div class="img-button activebutton"></div>
							<div class="img-button"></div>
							<div class="img-button"></div>
							<div class="img-button"></div>
							<div class="img-button"></div>
						</div>
					</div><!-- warpper-adopt-img -->
					<div class="warpper-adopt-detail">
						<div class="wrapper-menu-adopt">
							<div class="button-menu-adopt">
								<div class="text-button-adopt">ข้อมูล</div>
							</div>
							<div class="button-menu-adopt">
								<div class="text-button-adopt">พูดคุย</div>
							</div>
							<div class="button-menu-adopt">
								<div class="text-button-adopt">แผนที่</div>
							</div>
						</div>
						<div class="adopt-detail">
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">ชื่อ : </div>
								<div class="adopt-text-detail">บาร์บี้</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">อายุ : </div>
								<div class="adopt-text-detail">1 ปี</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">เพศ : </div>
								<div class="adopt-text-detail">เมีย</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">สี : </div>
								<div class="adopt-text-detail">ส้ม</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">ลาย : </div>
								<div class="adopt-text-detail">ขาว - เทา</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">นิสัย : </div>
								<div class="adopt-text-detail">ชอบกิน ชอบเล่น ชอบให้เกาท้องให้</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">ไม่สะดวกเลี้ยงต่อ</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="icon-text-adopt">
									<i class="fa fa-user"></i>
								</div>
								<div class="adopt-text">katy</div>
								<div class="icon-text-adopt">
									<i class="fa fa-calendar"></i>
								</div>
								<div class="adopt-text">20/04/2559</div>
							</div>
						</div>	<!-- adopt-detail -->
						<div class="button-adopt">
							<div class="text-botton-adopt">รับเลี้ยง</div>
						</div>
						<div class="button-shared">
							<a href="#" class="icon-shared-adopt">
							<i class="fa fa-share-alt"></i></a>
						</div>	
					</div><!-- warpper-adopt-detail -->		
				</div><!-- end adopt-box-data3 -->
				
				<div id="adopt-box-data4">
					<div class="warpper-adopt-img">
						<div class="adopt-img-cat">
							<img src="images/adopt-img-cat-01.png">
						</div>
						<div class="select-img-button">
							<div class="img-button activebutton"></div>
							<div class="img-button"></div>
							<div class="img-button"></div>
							<div class="img-button"></div>
							<div class="img-button"></div>
						</div>
					</div><!-- warpper-adopt-img -->
					<div class="warpper-adopt-detail">
						<div class="wrapper-menu-adopt">
							<div class="button-menu-adopt">
								<div class="text-button-adopt">ข้อมูล</div>
							</div>
							<div class="button-menu-adopt">
								<div class="text-button-adopt">พูดคุย</div>
							</div>
							<div class="button-menu-adopt">
								<div class="text-button-adopt">แผนที่</div>
							</div>
						</div>
						<div class="adopt-detail">
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">ชื่อ : </div>
								<div class="adopt-text-detail">ทิฟฟี่</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">อายุ : </div>
								<div class="adopt-text-detail">6 เดือน</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">เพศ : </div>
								<div class="adopt-text-detail">ผู้</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">สี : </div>
								<div class="adopt-text-detail">เทา</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">ลาย : </div>
								<div class="adopt-text-detail">-</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">นิสัย : </div>
								<div class="adopt-text-detail">ไม่ชอบเล่น ชอบกิน ขับถ่ายเป็นที่ ไม่ดื้อ</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="adopt-head-detail">ต้องย้ายไปทำงานต่างจังหวัด</div>
							</div>
							<div class="wrap-text-adopt">
								<div class="icon-text-adopt">
									<i class="fa fa-user"></i>
								</div>
								<div class="adopt-text">fuza</div>
								<div class="icon-text-adopt">
									<i class="fa fa-calendar"></i>
								</div>
								<div class="adopt-text">19/04/2559</div>
							</div>
						</div>	<!-- adopt-detail -->
						<div class="button-adopt">
							<div class="text-botton-adopt">รับเลี้ยง</div>
						</div>
						<div class="button-shared">
							<a href="#" class="icon-shared-adopt">
							<i class="fa fa-share-alt"></i></a>
						</div>	
					</div><!-- warpper-adopt-detail -->		
				</div><!-- end adopt-box-data4 -->

				<div class="select-page">
					<a href="#" class="icon-select-page">
					<i class="fa fa-angle-double-left"></i></a>
					<a href="#" class="icon-select-page">
					<i class="fa fa-angle-double-right"></i></a>
				</div>

			</div><!-- end adopted -->

			<div class="footer">
				<div class="menu-footer"></div>
				<div class="bg-text-footer"></div>

				<div class="wrap-meunu-text">
					<ul class="wrapper-footer-text">
						<li class="text-footer"><a href="reg_member.php">สมัครสมาชิก</a></li>
						<li class="text-footer"><a href="login.php">เข้าสู่ระบบ</a></li>
						<li class="text-footer"><a href="contact.html">เกี่ยวกับเรา</a></li>
						<li class="text-footer"><a href="#">เป้าหมาย</a></li>
						<li class="text-footer"><a href="#">สถิติการบริจาค</a></li>
					</ul>
					<ul class="wrapper-footer-text">
						<li class="text-footer"><a href="#">บริจาคเงิน</a></li>
						<li class="text-footer"><a href="#">บริจาคอาหาร</a></li>
						<li class="text-footer"><a href="#">บริจาคเลือด</a></li>
						<li class="text-footer"><a href="#">หาบ้านให้แมว</a></li>
						<li class="text-footer"><a href="#">ติดต่อเรา</a></li>
					</ul>
					<ul class="wrapper-footer-text">
						<li class="text-footer"><a href="#">วิธีใช้งานเว็บไซต์</a></li>
						<li class="text-footer"><a href="#">ขอความช่วยเหลือ</a></li>
						<li class="text-footer"><a href="#">รับข่าวสารจากเว็บไซต์</a></li>
						<li class="text-footer"><a href="#">ผู้บริจาคล่าสุด</a></li>
						<li class="text-footer"><a href="content.html">ดูบอร์ดทั้งหมด</a></li>
					</ul>	
				</div>
				
				<div class="wrap-meunu-text-destop">
					<ul class="wrapper-footer-text">
						<li class="text-footer"><a href="reg_member.php">สมัครสมาชิก</a></li>
						<li class="text-footer"><a href="#">บริจาคเงิน</a></li>
						<li class="text-footer"><a href="#">วิธีใช้งานเว็บไซต์</a></li>
					</ul>
					<ul class="wrapper-footer-text">
						<li class="text-footer"><a href="login.php">เข้าสู่ระบบ</a></li>
						<li class="text-footer"><a href="#">บริจาคอาหาร</a></li>
						<li class="text-footer"><a href="#">ขอความช่วยเหลือ</a></li>
					</ul>
					<ul class="wrapper-footer-text">
						<li class="text-footer"><a href="contact.html">เกี่ยวกับเรา</a></li>
						<li class="text-footer"><a href="#">บริจาคเลือด</a></li>
						<li class="text-footer"><a href="#">รับข่าวสารจากเว็บไซต์</a></li>
					</ul>
					<ul class="wrapper-footer-text">
						<li class="text-footer"><a href="#">เป้าหมาย</a></li>
						<li class="text-footer"><a href="#">หาบ้านให้แมว</a></li>
						<li class="text-footer"><a href="#">ผู้บริจาคล่าสุด</a></li>
					</ul>	
					<ul class="wrapper-footer-text">
						<li class="text-footer"><a href="#">สถิติการบริจาค</a></li>
						<li class="text-footer"><a href="#">ติดต่อเรา</a></li>
						<li class="text-footer"><a href="content.html">ดูบอร์ดทั้งหมด</a></li>
					</ul>
				</div>

				<div class="wrapper-icon-footer">
					<a href="#" class="icon-footer">
					<i class="fa fa-facebook-square"></i></a>
					<a href="#" class="icon-footer">
					<i class="fa fa-google-plus-square"></i></a>
					<a href="#" class="icon-footer">
					<i class="fa fa-youtube-play"></i></a>
					<a href="#" class="icon-footer">
					<i class="fa fa-instagram"></i></a>
				</div>

				<div class="wrapper-input-footer">
					<input type="text" class="input-email-footer" placeholder="E-mail" />
					<div class="button-email-footer">
						<a href="#" class="icon-email-footer">
						<i class="fa fa-angle-right"></i></a>
					</div>
				</div>		

				<div class="bg-credit-footer">
					<div class="text-credit-footer">
						Copyright 2016   |   ma-rsa.com   |   All right Resered
					</div>
				</div>
			</div><!-- end footer -->

		</div><!-- end wrapper -->
	</body>
</html>

<script>
	//video-header
	var vid = document.getElementById("bgvid");
	function vidFade() {
	  vid.classList.add("stopfade");
	}
	vid.addEventListener('ended', function()
	{
	// only functional if "loop" is removed 
	vid.pause();
	// to capture IE10
	vidFade();
	}); 
	//end video-header
</script>

<script>    
    $(function(){
        $("#text-donate-menu-m1").click(function(){
			$("#donate-block-mobile1").show();
            $("#donate-block-mobile2").hide();
            $("#donate-block-mobile3").hide();
			return false;
		});
        
        $("#text-donate-menu-m2").click(function(){
			$("#donate-block-mobile1").hide();
            $("#donate-block-mobile2").show();
            $("#donate-block-mobile3").hide();
			return false;
		});

        $("#text-donate-menu-m3").click(function(){
			$("#donate-block-mobile1").hide();
            $("#donate-block-mobile2").hide();
            $("#donate-block-mobile3").show();
			return false;
		});
        
        $("#text-donate-menu-1").click(function(){
			$("#donate-block1").show();
            $("#donate-block2").hide();
            $("#donate-block3").hide();
			return false;
		});
        
        $("#text-donate-menu-2").click(function(){
			$("#donate-block1").hide();
            $("#donate-block2").show();
            $("#donate-block3").hide();
			return false;
		});

        $("#text-donate-menu-3").click(function(){
			$("#donate-block1").hide();
            $("#donate-block2").hide();
            $("#donate-block3").show();
			return false;
		});
	})
</script>