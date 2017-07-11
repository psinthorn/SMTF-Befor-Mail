<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Samui Transfer Service | From Samui Airport To Your Destinations {% block title %}{% endblock %}</title>

            <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

            <!-- Optional theme -->
                <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->

           <!-- Custom CSS -->

             <!-- Start Scripts  -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

             <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
                crossorigin="anonymous"></script>

                <link rel="stylesheet" href="{{ base_url }}/css/app.css">
                <link rel="stylesheet" href="http://slimauth.dev/css/app.css">

    <!-- End Scripts  -->

              
      
      
      </head>
      <body>


                
  

                {% include 'templates/partials/navigation.twig.php' %}


                <div class="container">

                        {% include 'templates/partials/flash.twig.php' %}
    
                        {% block content %}
                        
                            

                        {% endblock %}
                
          
                </div>

                {% include 'templates/partials/footer.twig.php' %}
        </body>
       </html> 