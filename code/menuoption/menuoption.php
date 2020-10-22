<!DOCTYPE html>
<head>
    <title>menu option</title>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> </link>


<!-- start menu option -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.klik_menu').click(function(){
			var menu = $(this).attr('id');
			if(menu == "all"){
				$('.isi').load('all.php');						
			}else if(menu == "course"){
				$('.isi').load('course.php');	

			}else if(menu == "videos"){
				$('.isi').load('videos.php');	

      }else if(menu == "podcast"){
				$('.isi').load('podcast.php');


			}else if(menu == "quotes"){
				$('.isi').load('quotes.php');	
      }else if(menu == "stories"){
				$('.isi').load('stories.php');					
			}
		});
 
 
		// halaman yang di load default pertama kali
		$('.isi').load('all');						
 
	});

    


</script>
    
</head>
<body>

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="menu" data-aos="fade-up">
          <h2 style="text-align: center;">Option Menu</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active klik_menu" id="all">All</li>
              <li data-filter="*" class="klik_menu" id="course">Course</li>
          <li data-filter="*" class="klik_menu" id="videos">Videos</li>

               <li data-filter="*"   class="klik_menu" id="podcast">Podcast</li>
              <li data-filter="*"   class="klik_menu" id="quotes">Quotes</li>
              <li data-filter="*"     class="klik_menu" id="stories">Stories</li>

            </ul>
          </div>
        </div>
  <div class="isi">
  </div>
   </div>
  
    </section>
</body>