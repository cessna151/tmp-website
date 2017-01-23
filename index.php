<?php $page_title = "Main";
$page_description = "Providing both on location and in-studio photography services to Lexington/Scottsburg, Indiana 
		and surrounding areas."; ?>

<?php include("/home/lkzwvspz/public_html/header.php"); ?>
<?php include("/home/lkzwvspz/public_html/nav.php"); ?>
<body>
	<center><h1>Welcome to Taylor Made Photography</h1></center>
	<p>
		Providing both on location and in-studio photography services to Lexington/Scottsburg, Indiana 
		and surrounding areas. My goal is to give each and every person I work with a quality product 
		and service! From "I do to baby bump and more" I've got you covered. Let’s create lasting 
		memories!
	</p>
	
	<div id="slides"> 
		<figure class="slide showing"> 
			<img alt="slideshow" src="images/1.jpg"/> 
		</figure> 
		<figure class="slide"> 
			<img alt="slideshow" src="images/2.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/3.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/4.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/5.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/6.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/7.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/8.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/9.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/10.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/11.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/12.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/13.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/14.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/15.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/16.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/17.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/18.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/19.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/20.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/21.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/22.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/23.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/24.jpg"/> 
		</figure>
		<figure class="slide"> 
			<img alt="slideshow" src="images/25.jpg"/> 
		</figure>
	</div>
	<script>
            var slides = document.querySelectorAll('#slides .slide');
            var currentSlide = 0;
            var slideInterval = setInterval(nextSlide,2000);

            function nextSlide() {
                slides[currentSlide].className = 'slide';
                currentSlide = (currentSlide+1)%slides.length;
                slides[currentSlide].className = 'slide showing';
            }
        </script>
</body>
<?php include("/home/lkzwvspz/public_html/footer.php"); ?>
</html>