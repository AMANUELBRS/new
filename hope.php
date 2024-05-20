<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
	<style>
		
.hello{
    
   
	color: rgb(157, 135, 14);
	}
	.h{
		display: flex;
	   
	}
	.diamond-box-container {
	  display: grid;
	grid-gap: 55px;
	align-items: center;
	grid-template-columns: repeat(4, 1fr);
	grid-template-rows: repeat(2, 171px);
	max-width: 1111px;
	margin: 100px 100PX 0 250px;
	grid-row-gap: 125px;
	font-family:;
	
	}
	
	.diamond {
	background: rgb(248, 246, 236);
	padding: 20px 0;
	position: relative;
	min-height: 290px;
	display: flex;
	flex-direction: column;
	align-items: center;
	text-align: center;
		justify-content: center;
		padding: 20PX;
		
	}
	.diamond strong {
	margin: 17px 0;
	
	}
	
	.diamond p {
	margin:10;
	font-size: 15px;
	}
	
	.diamond:first-child {
	grid-column-start: 1;
	grid-column-end: 2;
	grid-row-start: 1;
	grid-row-end: 2;
	}
	.diamond:nth-child(2) {
	grid-column-start: 1;
	grid-column-end: 2;
	grid-row-start: 2;
	grid-row-end: 3;
	}
	.diamond:nth-child(3) {
	grid-column-start: 2;
	grid-column-end: 3;
	grid-row-start: 1;
	grid-row-end: 3;
	}
	.diamond:nth-child(6) {
	grid-column-start: 4;
	grid-column-end: 5;
	grid-row-start: 1;
	grid-row-end: 3;
	}
	
	.diamond:before,
	.diamond:after {
	content: " ";
	width: 0; 
	top: 0;
	height: 0;
	border-color: #fff;
	position: absolute;
	}
	.diamond:before {
	left: -49px;
	
	height: 100%;
	background:rgb(100, 178, 226);
	}
	.diamond:after {
	right: -50px;
	
	clip-path: polygon(0 0, 0 100%, 100% 50%);
	width: 50px;
	height: 100%;
	background: rgb(121, 193, 240);
	
	}
	a{
	font-size: 29px;
	}	
	a:hover{
	color:powderblue;
	font-size: 30px;
	}
	h1{
	text-align: center;
	color:rgb(244, 238, 238) ;
	}
	p{
	text-indent: 5px;
	color: rgb(54, 43, 34);
	font-size: medium;
	}.hello {
		
		font-family: Arial, sans-serif;
		margin: 0;
		padding-left: 10px;
		background-repeat: no-repeat;
	  background-size: auto;
	
	}
		
	header {
	   
		color: black;
		padding: 10px;
		text-align: center;
	}
	nav {
		color: black;
		padding: 10px;
		text-align: center;
		font-size: 25px;
	}
	a:hover{
		color:black;
		font-size: 20px;
	}
	nav a {
		color: rgb(85, 48, 48);
		text-decoration: none;
		margin: 0 10px;
	}
	main {
		padding: 20px;
	}
	
	h2{
		margin-left: 320px;
	}
	.first{
	
		margin-left: 230px;
		text-indent: 43px;
		font-size: 20px;
		color: black;
	}
	footer{
		background-color: #5a7cbd;
		color: aliceblue;
		text-align: center;
		font-size: 22px;
	}
	.nav-logo p{
		color: white;
		font-size: 25px;
		font-weight: 600;
	}
	
	.mak{
		margin-right: 12px;
	
	}
	.mak,.mesay,.maki{
		color: black;
	}
	.mesay{
		margin-right: 9px;
	}
	.maki{
		margin-right: 20px;
	
	}
	.mw{
		text-align: center;
	 
	}
	.blog-title{
		text-align: center;
	}
	.like{
		display: flex;
	}
	.prev{
		margin-right: 790px;
		bottom:100%;
		margin-bottom: 20%;
		margin-left: 20%;
		
	
	}
	.testimonial-container{
		
		margin-left: 29%;
		margin-right: 29%;
	}
	.testimonial-slider{
		
		text-align: center;
	}
	.login-link {
		cursor: pointer;
		color: blue;
		text-decoration: underline;
	}
	.login-options {
		display: none;
		margin-top: 10px;
	}
	.login-option {
		display: block;
		padding: 10px 20px;
		margin: 5px 0;
		border-radius: 5px;
		cursor: pointer;
		transition: background-color 0.3s;
	}
	.login-option:hover {
		background-color: #f0f0f0;
	}
	.admin,.doctor,.patient{
	   font-size : 90%;
	   background-color: black;
	   color: #fff;
	   border-radius: 7PX;
	}
	.admin:hover{
		background-color: rgb(246, 228, 228);
		color: black;
		border: none;
	}
	
	.doctor:hover{
		background-color: rgb(246, 228, 228);
		color: black;
		border: none;
	}
	
	.patient:hover{
		background-color: rgb(246, 228, 228);
		color: black;
		border: none;
	}
	
	</style>
</head>
<body>
	<div class="h">
		
<p>
<p style="color: rgb(208, 169, 169); font-size: 33PX; font-family: 'Times New Roman', Times, serif;">BIRUK   CLINIC</p>
               
</p>	<h1 style="padding-left: 17%; color: black;"></h1>
	<nav style=" padding-left: 27%">
        <a href="http://localhost//wab/hope.php" >Home</a>
		<a href="about us.php">About us</a>
        
        <a href="contact us.php">Contact</a>
		<a href="login.php">LOGIN</a>


		<a href="signup.php">Signup</a>

    </nav>
	</div>
	<div>
	<img src="ima.jpg" >
   </div>
   
    
        
    
    <header>
        
    </header>
	<div class="hello">
	<h2 style="text-align: center;float: center;padding-left: 10px; color: darkslategray;font-size: 25px;text-decoration:none;">
            WELCOME TO BIRUK
                MEDIUM CLINIC! </h2>

    </div>
    <section style="display: flex; ">
        <div style="padding:0px;margin-left: 0px;font-size: 20px;">
            <main style="">

                <h3 style="padding-left: 100px; font-size:24px;">KILINIKA GIDDU-GALEESSA BIRUK.</h3>
                <p  style="font-size:24px;"> We believe in the power of healing, resilience, and the promise of a brighter tomorrow.<br>
                    As you step through our doors, know that you are entering a sanctuary of care, compassion, and hope.

                </p>
            </main>
        </div>
        <div class="image" style=" height: 500px; display: flex; margin-left:14%;text-align: center;margin-right:12%;">
            <img src="../IMAGE/HOME.svg" style="transform: scale(0.7,0.7);" alt="">
        </div>
    </section>
    <br><br>
   
   </div>
   <br><br>
<div class="div">
<h1 class="ma"style=" color:#A8D480; "> OUR SERIVES</h1>
<p style="font-size: 26px; text-align: center;color: rgb(0, 0, 0);"> Our mission is to provide exceptional care tailored to your needs,<br> ensuring you receive the support and guidance you deserve on your journey to well-being.
	</p>
<div class="diamond-box-container"style="font-family:verdana" >
<div class="diamond">
<img loading="lazy" decoding="async" src="div.jfif" width="60" height="60" />
<p ><b>Primary Care Excellence</b></p>
</div>
<div class="diamond">
<img loading="lazy" decoding="async" src="div2.png" width="60" height="60" />
<p><b>Specialized Wellness Programs</b></p>
</div>
<div class="diamond">
<img loading="lazy" decoding="async" src="div3.png" width="60" height="60" />
<p><b>Chronic Disease Management</b></p>
</div>
<div class="diamond">
<img loading="lazy" decoding="async" src="div5.jfif" width="60" height="60" />
<p><b>Mental Health Support</b></p>
</div>
<div class="diamond">
<img loading="lazy" decoding="async" src="div6.jfif" width="60" height="60" />
<p><b>Women's Health Focus</b>

</p>
</div>
<div class="diamond">
    <img loading="lazy" decoding="async" src="div8.jpg" width="60" height="60" />
    <p><b>Diagnostic Expertise</b></p>
</div><br><BR>
<div><a href="feature.php" class="btn btn-primary float-end" id="back-button" style="text-decoration:none;text-align: center;background-color:#A8D480;COLOR:white;">LEARN MORE</a></div>

</div>		
</section>
</div><br><br>
<br><br>

	<div>
		<section class="hospital-blog">
			<h1 class="section-title" style="color: black; font-size: 43px;">Latest Blog</h1>
			<BR>
			<div class="like">
				
			
			<div class="mesay">	<div class="blog-posts">
					<div class="blog-post">
						<div class="blog-thumbnail">
							<img src="../IMAGE/OIP%20(9).jfif" alt="Blog Post 1">
						</div>
						<div class="blog-content">
							<h3 class="blog-title">Instant Access, Personalized Care</h3>
						</div>
					</div>
					</div>
					</div>
					<div class="maki">
					<div class="blog-post">
						<div class="blog-thumbnail">
							<img src="../IMAGE/OIP.jfif" alt="Blog Post 2"  >
						</div>
						<div class="blog-content">
							<h3 class="blog-title">Convenience at Your Fingertips</h3>
						</div>
					</div>
				</div>
				<div class="mak">
					<div class="blog-post">
						<div class="blog-thumbnail">
							<img src="../IMAGE/OIP (10).jfif" alt="Blog Post 2">
						</div>
						<div class="blog-content">
							<h3 class="blog-title" >Seamless Care, Anytime, Anywhere</h3>
						</div>
					</div>
				</div>
			</div>
		</section>			
	</div><br><br>
	
	</div>
	
	<div class="mw">
	
		<div class="testimonial-slider">
			<h3>Read What Our Customers Say</h3>
			<div class="testimonial-container" >
				<div class="testimonial-slide">
					<div class="testimonial-text">
						<img src="https://docpulse.com/wp-content/uploads/2020/01/doctor_img.png" alt="Pramendra Rajak">
						<p>Our hospital is entirely managed by Docpulse HIMS.<br> The software is very easy to use and the whole work flow is end to end automated for Appointments,<br> Electronic Medical Records, Lab, Store Management, IP management, and handling CSR patients with internal insurance.<br> The analysis and reports are very comprehensive and enable us to monitor our hospital metrics<br> remotely and easily. <br>We are very happy with their software quality and the support they have provided so far.</p>
					</div>
					
						<cite class="testimonial-cite"><span class="testimonial-name">MAKDA NEBYU</span><span class="testimonial-title">IT Head, </span></cite>
					</div>
				</div>
				<div class="testimonial-slide">
					<div class="testimonial-text">
						<img src="https://docpulse.com/wp-content/uploads/2020/01/doctor_img.png" alt="Dr. Naveen Kini">
						<p>After looking at various products, I finally zeroed down to Docpulse, <br>which I have been using for the last 2 years. Online booking is seamless, Queue Management & Vaccine reminders are appreciated by my patients. I highly recommend Docpulse.</p>
					</div>
					
						<cite class="testimonial-cite"><span class="testimonial-name">BEZA</span><span class="testimonial-title"></span></cite>
					</div>
					<div class="testimonial-slide">
						<div class="testimonial-text">
							<img src="https://docpulse.com/wp-content/uploads/2020/01/doctor_img.png" alt="Dr. Naveen Kini">
							<p>looking at various products, I finally zeroed down to Docpulse, <br>which I have been using for the last 2 years. Online booking is seamless, Queue Management & Vaccine reminders are appreciated by my patients. I highly recommend Docpulse.</p>
						</div>
						
							<cite class="testimonial-cite"><span class="testimonial-name">Dr. BIRUK</span><span class="testimonial-title">, India</span></cite>
						</div>
				</div>
			</div>
			<button class="prev"> < </button>
			<button class="next"> > </button>
		</div>
	</div>
	<footer>
             BIRUK   MEDIUM CLINIC
		<h6 style="text-align: center;">&copy; 2024 Hospital Management System</h6>
     <b><h6>proudct</h6></b>
        <h6>features</h6>
        <h6>blog</h6><br>
	
		</footer>
		<script>
    document.addEventListener('DOMContentLoaded', function() {
        const aboutUsLink = document.querySelector('a[href="#about-us-section"]');
        aboutUsLink.addEventListener('click', function(event) {
            event.preventDefault(); 
            const section = document.getElementById('about-us-section');
            section.scrollIntoView({ behavior: 'smooth' }); 
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const slides = document.querySelectorAll(".testimonial-slide");
        const prevBtn = document.querySelector(".prev");
        const nextBtn = document.querySelector(".next");
        let currentSlide = 0;
    
        showSlide(currentSlide);
    
        prevBtn.addEventListener("click", function() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        });
    
        nextBtn.addEventListener("click", function() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        });
    
        function showSlide(index) {
            slides.forEach(function(slide) {
                slide.style.display = "none";
            });
            slides[index].style.display = "block";
        }
    });

    function toggleSection(sectionId) {
        const sections = document.querySelectorAll('.section');
        sections.forEach(section => {
            if (section.id === sectionId) {
                section.style.display = (section.style.display === 'none') ? 'block' : 'none';
            } else {
                section.style.display = 'none';
            }
        });
    }

    function toggleLoginOptions() {
        var options = document.getElementById('loginOptions');
        options.style.display = (options.style.display === 'block') ? 'none' : 'block';
    }

    function login(userType) {
        switch (userType) {
            case 'admin':
                alert('Admin login clicked');
                break;
            case 'doctor':
                alert('Doctor login clicked');
                break;
            case 'patient':
                alert('Patient login clicked');
                break;
            default:
                alert('Invalid user type');
                break;
        }
    }
</script>

	</body>
	</html>


