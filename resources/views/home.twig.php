{% extends 'templates/app.twig.php' %}


        {% block content %}

            <style>


                .h1-white
{
    text-align: center;

    color: #fff;
}

.h1-gray
{
    text-align: center;
	color: #888888;
}

.h2-white
{
    text-align: center;

    color: #fff;
}

.h3
{
    text-align: center;
	color: #40b4e5;
}

.h3-white
{
    text-align: center;
	color: #ffffff;
}



.h4
{
    text-align: center;
	color: #40b4e5;
}
.transfer-h1-white
{
    padding-top: 50px;
    padding-bottom: 50px;
	
    background-color: #40b4e5;
}

.tour-h1-gray
{
    padding-top: 50px;
    padding-bottom: 50px;
	background-color: #ffffff;

}

.tour-h1-gray-pad-10
{
    padding-top: 10px;
    padding-bottom: 50px;
	background-color: #ffffff;
}

.img-center{
    
    padding-top: 30px;
    text-align: center;
}

.contact-white-right {

	color: #40b4e5;
	padding-top: 10px;
    padding-bottom: 10px;
	text-align: right;
}

.contact-white-left {

	color: #40b4e5;
	padding-top: 10px;
    padding-bottom: 10px;
	text-align: left;
}




            </style>    
        

           <div class="container">			

				<div>
									<img src="/assets/imgs/st-home-banner.jpg" class="img-responsive">
				</div>

                
				<div class="col-sm-12" style="background: #40b4e5" >
                  
					<h1 class="h1-white">Samui Airport Transfer Service</h1>

					<h3 class="h3-white" style="font-weight: lighter;">Good Service & Good Fare</h3>
                  
					<p class="img-center"><a href="{{ path_for('transfers.routes')}}"> <img src="/assets/imgs/Do-it-now-Button.png" style="width: 180px; cursor: pointer" ></a></p>
				</div>	


			<!-- <img src="/assets/imgs/Transfer-Service-Box-001.png" class="img-responsive"> -->
			<!-- 
				 888888888888888888
				 8	Tour Section  8
				 888888888888888888 
			-->
			<div>
					<img src="/assets/imgs/Transfer-Service-002.png" class="img-responsive">
			</div>

			 <div class="col-sm-12" class="tour-h1-gray" style="padding-top: 30px; padding-bottom: 30px">

					<h1 class="h1-gray">Tour Service</h1>

					<h3 class="h3" style="font-weight: lighter;">Great Daily Trip Rate</h3>
					<div class="col-xs-12"><p align="center"><a href="{{ path_for('tours.packages')}}"><img src="/assets/imgs/iwill-book-now-Button.png" style="width: 180px; ; cursor: pointer" ></a></p></div>
			</div>	
 
			
			<div>
			
			 <img src="/assets/imgs/Tour-Service-001.png" class="img-responsive"> 
			</div>

                                                <div class="col-sm-12" class="tour-h1-gray-pad-10"> 
                                                        <div class="col-xs-12 col-sm-12">
                                                            <h1 class="h1-gray"><p style="color: #40B4E5">Why Book With Us?</h1>
                                                        </div>
                                                        <p></p>
                                                        
                                                        <p></p>
                                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                                        <ul>
                                                            <li>Private transfer in 9 seat VIP Minibus.</li>
                                                            <li>Private transfer in Toyota Camry</li>
                                                            <li>A price guarantee that we will beat any other quote.</li>
                                                            <li>Ability to instantly reserve seats online whilst payment is taken on the arrival day.
                                                            </li>
                                                        </ul>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                                        <ul>
                                                            <li>Experienced and professional English speaking 
                                                                reps and drivers who will meet you at Samui Airport Meeting Point.</li>
                                                            <li>Benefit from samuiairportshuttle.com 
                                                                partner services. Discounts on private car around Samui Island 
                                                                Car rental, Hotel booking, Tour service, eating out and much more...</li>
                                                            

                                                        </ul>
                                                        </div>


                                                </div>

			
		
                        </div>			
                                        
                                <p></p>	
                                <div class="container" style="background: #40b4e5">

                                    <div class="col-sm-12" >

                                        <h1 class="h1-white">Contact Us</h1>

                                        <h3 class="h3-white" style="font-weight: lighter;">what would you  like to know more?<br>
                                        We will get back with offers.</h3>
                                        <p class="img-center"><a href="#"><img src="/assets/imgs/Yes-more-offer-Button.png" style="width: 180px; cursor: pointer" ></a></p>
                                    </div>			
                                </div>




        
        
        {% endblock %}