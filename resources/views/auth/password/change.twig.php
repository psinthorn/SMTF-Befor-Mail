{% extends 'templates/app.twig.php' %}


        {% block content %}
        

            <div class="container" style="margin-top: 80px; margin-bottom: 300px;">
            
                <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Change Password
                            </div>
                            <div class="panel-body">

                                <!-- Show errors in json code for checking -->
                                <!--{{ errors | json_encode }}-->

                                <form action="{{ path_for('change.password') }}" method="post" autocomplete="off">


                                        <div class="form-group {{ errors.password ? ' has-error' : '' }}"> 
                                            <label for="password">Current Passowrd</label>                                           
                                            <input type="password" name="password_old" id="password_old" class="form-control" value="{{ old.password_old }}" placeholder="Current Password"/>
                                        
                                            {% if errors.password_old %}  

                                            <span class="help-block">{{ errors.password_old | first }}</span>

                                            {% endif %}  
                                      
                                        <div class="form-group {{ errors.password ? ' has-error' : '' }}"> 
                                            <label for="password">Passowrd</label>                                           
                                            <input type="password" name="password" id="password" class="form-control" value="{{ old.password }}" placeholder="New Password"/>
                                        
                                            {% if errors.password %}  

                                            <span class="help-block">{{ errors.password | first }}</span>

                                            {% endif %}  
                                        
                                        </div>      
                                        <button type="submit" class="btn btn-primary">Change</button>

                                        {{ csrf.field | raw }}
                                        
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        
        
        {% endblock %}