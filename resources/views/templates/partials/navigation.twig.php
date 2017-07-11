<nav class="navbar navbar-inverse navbar-fixed-top" style="background: #333; color: #fff">
    <div class="container" >
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
            <a class="navbar-brand" href="/" style="color: #ffffff">Samui Transfer</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>

                 {% if auth.check %}    
                    
                 <li><a href="{{ path_for('transfer.route') }}">Transfers Service</a></li>

                 {%  else %}

                 <li><a href="{{ path_for('transfers.routes') }}">Transfers Service</a></li>

                 {% endif %} 


                {% if auth.check %}    
                    
                 <li><a href="{{ path_for('tour.manage') }}">Tours Service</a></li>

                 {%  else %}

                 <li><a href="{{ path_for('tours.packages') }}">Tours Service</a></li>

                 {% endif %} 


                {% if auth.check %}    

                
                
                <li><a href="{{ path_for('transfer.report') }}">Report</a></li>
                <li><a href="#">User</a></li>
                
                
                {%  else %}
<!--                <li><a href="{{ path_for('transfer.report') }}">Report</a></li>-->
<!--                <li><a href="#">About Us</a></li>-->
<!--                <li><a href="#">Contact Us</a></li>-->
                
              {% endif %} 
                
            </ul>
            <ul class="nav navbar-nav navbar-right">


            {% if auth.check %}    

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ auth.user.fname }} <span class="caret"></span></a>
                       
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="{{ path_for('change.password') }}">Change Password</a></li>
                            <li><a href="{{ path_for('auth.signout') }}">Sign out</a></li>
                        </ul>
                    </li>
               
             {% else %}  

                    <!--<li><a href="{{ path_for('auth.signup') }}">Sign up</a></li>
                    <li><a href="{{ path_for('auth.signin') }}">Sign in</a></li>-->

             {% endif %}       
               
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid" >
					
				<div class="col-sm-12" class="h3">
				<!-- <img src="/assets/imgs/Header-Menu.png" class="img-responsive"> -->

					<div class="hidden-xs col-sm-5"><h3 style="color: #40b4e5; text-align: left; font-weight: lighter; margin-bottom: 10px;"><span class="glyphicon glyphicon glyphicon-globe"> </span> Welcome to Our Official Website</h3></div>
					<div class="col-sm-7"><h3 style="color: #40b4e5; text-align: right; font-weight: lighter; -bottom: 10px;"><!--  <span class="glyphicon glyphicon glyphicon-phone"> </span> --> Call Now +668 1958 0766       <!-- <span class="glyphicon glyphicon glyphicon-envelope"></span> --> Email: noreep2@hotmail.com</h3></div>

				</div>	
				<div style="padding-bottom: 10px"></div>
				
	</div>
	<hr>
