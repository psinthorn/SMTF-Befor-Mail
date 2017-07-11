{% extends 'templates/app.twig.php' %}


        {% block content %}
        

            <div class="container" style="margin-top: 80px; margin-bottom: 300px;">
            
                <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Sign In 
                            </div>
                            <div class="panel-body">

                                <!-- Show errors in json code for checking -->
                                <!--{{ errors | json_encode }}-->

                                <form action="{{ path_for('auth.signin') }}" method="post" autocomplete="off">
                                        <!--<div class="form-group {{ errors.name ? ' has-error' : '' }}" > -->
                                            <!--<label for="name">Name</label>                                           
                                            <input type="text" name="name" id="name" class="form-control" value="{{ old.name}}" placeholder="Your Name"/>
                                          
                                          {% if errors.email %}  
                                            <span class="help-block">{{ errors.name | first }}</span>

                                          {% endif %}  

                                        </div>    -->

                                        <div class="form-group {{ errors.email ? ' has-error' : '' }}"> 
                                            <label for="email">Email</label>                                           
                                            <input type="email" name="email" id="email" class="form-control" value="{{ old.email }}" placeholder="email@yourdomain.com"/>
                                            
                                            {% if errors.email %}  
                                            <span class="help-block">{{ errors.email | first }}</span>

                                            {% endif %}  
                                        
                                        </div>  
                                        <div class="form-group {{ errors.password ? ' has-error' : '' }}"> 
                                            <label for="password">Passowrd</label>                                           
                                            <input type="password" name="password" id="password" class="form-control" value="{{ old.password }}" placeholder="Put Your Password"/>
                                        
                                            {% if errors.password %}  

                                            <span class="help-block">{{ errors.password | first }}</span>

                                            {% endif %}  
                                        
                                        </div>      
                                        <button type="submit" class="btn btn-primary">Sign In</button>

                                        {{ csrf.field | raw }}
                                        
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        
        
        {% endblock %}