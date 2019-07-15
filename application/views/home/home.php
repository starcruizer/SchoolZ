<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

	<!-- including header -->
<?php  include_once(APPPATH.'/views/templates/header.php'); ?>
    
    <main class="page landing-page">
        <section class="clean-block slider dark">
            <div class="container_two" >
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="w-100 d-block" src="/assets/img/slider/1.JPG" alt="Slide Image" style="font-size:16px;"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="/assets/img/slider/2.JPG" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="/assets/img/slider/3.JPG" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                            data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
            <div class="container">
                <div style="margin-top:20px;">
                    <span style="font-family:Oswald, sans-serif; font-size: 40px; color: #002d70 ">
                        <span style="font-weight: 400">ABOUT</span><br>
                        <span style="font-weight:bold"><span style="text-decoration: underline; text-decoration-color:rgb(245,228,8);">THE LOYOLA</span> SCHOOL, </span> 
                        <span style="font-weight: 200">Taldanga</span>
                        
                    </span>
                    <br>
                    <br/>
                    <p>Loyola School, Taldanga, is established and administered by the Jamshedpur Diocesan Educational Society belonging to the Diocese of Jamshedpur,
                         a province of the Catholic Church. The school is assisted in the task by the Sisters of Charity of Jesus and Mary, a women Religious order 
                         belonging to the Catholic Church.
                    </p>
                    <p>
                        As a Catholic School Loyola, Taldanga, draws its inspiration and guidance from the life and teachings of Jesus Christ.
                         Special attention is paid to faith formation of the Catholic students, through weekly religion classes. Eucharistic celebration, 
                         recollections and Annual retreat. The religion beliefs of all students are respected.
                    </p>
                </div>
            </div>

            <section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/background/students.jpg&quot;);color:rgba(33, 33, 33, 0.66);">
                <div class="container text news_section ">
                    
                    <span style="font-family:Oswald, sans-serif; font-size: 40px; color: #ffffff; margin:0;">
                        <span style="font-weight: 400">LATEST</span>
                        <span style="text-decoration: underline; text-decoration-color:rgb(245,228,8); font-weight:700;">NEWS & EVENTS</span>         
                    </span>
                    
                </div>
            </section>

        </section>
        
    </main>
	
	<!-- Inculde generic footer template -->
	<?php include_once(APPPATH.'/views/templates/footer.php'); ?>

</body>

</html>