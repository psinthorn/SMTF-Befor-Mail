{% extends 'templates/app.twig.php' %}


        {% block content %}

              <h2 style="font-weight: lighter">Transfers Routes List</h2>
                
                    {% for transfer in transfers %}
                    <div class="panel panel-default">
                
                        
                        <div class="panel-heading"><a href="{{ path_for('transfer.route', { id: transfer.id }) }}"><h4>{{transfer.pickup_to}}</h4></a></div>

                            <div class="panel-body">
                                <div class="row">
                                    <form action="/deleteroute/{{transfer.id}}" method="post" enctype="application/x-www-form-urlencoded">
                                    
                                            <input type="hidden" name="_METHOD"  value="DELETE"/>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label for="from" style="font-weight: lighter">From</label>
                                                <input type="text" class="form-control" placeholder="{{transfer.pickup_from}}"></input>
                                            </div> 
                                            <div class="col-md-3 col-sm-3 col-xs-12">   
                                                <label for="from" style="font-weight: lighter">To</label>
                                                <input type="text" class="form-control" placeholder="{{transfer.pickup_to}}"></input>
                                            </div>

                                            <div class="col-md-2 col-sm-2 col-xs-12">   
                                                <label for="from" style="font-weight: lighter">Sedan Rate</label>
                                                <input type="text" class="form-control" placeholder="{{transfer.sedan_rate}}"></input>
                                            </div>

                                            <div class="col-md-2 col-sm-2 col-xs-12">   
                                                <label for="from" style="font-weight: lighter">SUV Rate</label>
                                                <input type="text" class="form-control" placeholder="{{transfer.suv_rate}}"></input>
                                            </div>

                                            <div class="col-md-2 col-sm-2 col-xs-12">   
                                                <label for="from" style="font-weight: lighter">Minibus Rate</label>
                                                <input type="text" class="form-control" placeholder="{{transfer.minibus_rate}}"></input>
                                            </div>

                                 </div>   

                                
                              </form>   
                            </div>
                
                    </div>
                    {% endfor %}
                    <br>
                        <hr>
                    <br>
                    

            

         <h3 style="font-weight: lighter">Add Transfer Route </h3>
    
         <div class="container" style="margin-top: 20px; margin-bottom: 200px;">
            
                 

                 <form action="{{ path_for('transfer.route') }}" method="post" autocomplete="off">

                     <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                           
                                    <div class="form-group col-md-3 col-sm-3 col-xs-12">

                                        <div class="form-group {{ errors.pickup_from ? ' has-error' : '' }}" > 
                                            <label for="pickup_from">Pickup From</label>                                           
                                            <input type="text" name="pickup_from" id="pickup_from" class="form-control" value="{{ old.pickup_from}}" placeholder="Pick up from. eg. Samui Airport "/>
                                          
                                          {% if errors.pickup_from %}  
                                            <span class="help-block">{{ errors.pickup_from | first }}</span>

                                          {% endif %}  

                                        </div>    

                                    </div>    

                                    <div class="form-group col-md-3 col-sm-3 col-xs-12">

                                            <div class="form-group {{ errors.pickup_to ? ' has-error' : '' }}" > 
                                                <label for="pickup_to">Pickup To</label>                                           
                                                <input type="text" name="pickup_to" id="pickup_to" class="form-control" value="{{ old.pickup_to}}" placeholder="To destination"/>
                                            
                                                {% if errors.pickup_from %}  
                                                <span class="help-block">{{ errors.pickup_from | first }}</span>

                                                {% endif %}  

                                            </div>        
                                    </div>

                                    <div class="form-group col-md-2 col-sm-12 col-xs-12">
                                        <div class="form-group {{ errors.sedan_rate ? ' has-error' : '' }}" > 
                                            <label for="sedan_rate">Sedan Rate</label>                                           
                                            <input type="text" name="sedan_rate" id="sedan_rate" class="form-control" value="{{ old.sedan_rate}}" placeholder="Sedan Rate eg. 400"/>
                                          
                                             {% if errors.sedan_rate %}  
                                            <span class="help-block">{{ errors.sedan_rate | first }}</span>

                                            {% endif %}  

                                        </div>   

                                    </div>

                                    <div class="form-group col-md-2 col-sm-12 col-xs-12">  
                                        <div class="form-group {{ errors.suv_rate ? ' has-error' : '' }}" > 
                                            <label for="suv_rate">SUV Rate</label>                                           
                                            <input type="text" name="suv_rate" id="suv_rate" class="form-control" value="{{ old.suv_rate}}" placeholder="SUV Rate eg. 500"/>
                                          
                                          {% if errors.suv_rate %}  
                                            <span class="help-block">{{ errors.suv_rate | first }}</span>

                                          {% endif %}  

                                        </div>   
                                     </div>   

                                     <div class="form-group col-md-2 col-sm-12 col-xs-12">
                                         <div class="form-group {{ errors.minibus_rate ? ' has-error' : '' }}" > 
                                            <label for="suv_rate">Minibus Rate</label>                                           
                                            <input type="text" name="minibus_rate" id="minibus_rate" class="form-control" value="{{ old.minibus_rate}}" placeholder="Minibus Rate eg. 600"/>
                                          
                                            {% if errors.minibus_rate %}  
                                            <span class="help-block">{{ errors.minibus_rate | first }}</span>

                                             {% endif %}  

                                        </div>           
                                     </div>   

                                            
                             </div>         
                        </div><!-- Close row -->   

                         
                                     

                    </form>
                           
                
            </div>
        
        
        {% endblock %}