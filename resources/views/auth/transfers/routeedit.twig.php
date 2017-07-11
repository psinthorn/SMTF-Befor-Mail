{% extends 'templates/app.twig.php' %}


        {% block content %}


            

         <h2 style="font-weight: lighter">Edit Transfer Route </h2>
    
         <div class="container" style="margin-top: 20px; margin-bottom: 200px;">
            
                 

                 <form action="{{ path_for('route.update',{id: transfers.id}) }}" method="post" autocomplete="off">

                     <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                           
                                    <div class="form-group col-md-3 col-sm-3 col-xs-12">

                                        <div class="form-group {{ errors.pickup_from ? ' has-error' : '' }}" > 
                                            <label for="pickup_from">Pickup From</label>                                           
                                            <input type="text" name="pickup_from" id="pickup_from" class="form-control" value="{{transfers.pickup_from}}" placeholder="Pick up from. eg. Samui Airport "/>
                                          
                                          {% if errors.pickup_from %}  
                                            <span class="help-block">{{ errors.pickup_from | first }}</span>

                                          {% endif %}  

                                        </div>    

                                    </div>    

                                    <div class="form-group col-md-3 col-sm-3 col-xs-12">

                                            <div class="form-group {{ errors.pickup_to ? ' has-error' : '' }}" > 
                                                <label for="pickup_to">Pickup To</label>                                           
                                                <input type="text" name="pickup_to" id="pickup_to" class="form-control" value="{{ transfers.pickup_to }}" placeholder="To destination"/>
                                            
                                                {% if errors.pickup_from %}  
                                                <span class="help-block">{{ errors.pickup_from | first }}</span>

                                                {% endif %}  

                                            </div>        
                                    </div>

                                    <div class="form-group col-md-2 col-sm-12 col-xs-12">
                                        <div class="form-group {{ errors.sedan_rate ? ' has-error' : '' }}" > 
                                            <label for="sedan_rate">Sedan Rate</label>                                           
                                            <input type="text" name="sedan_rate" id="sedan_rate" class="form-control" value="{{transfers.sedan_rate}}" placeholder="Sedan Rate eg. 400"/>
                                          
                                             {% if errors.sedan_rate %}  
                                            <span class="help-block">{{ errors.sedan_rate | first }}</span>

                                            {% endif %}  

                                        </div>   

                                    </div>

                                    <div class="form-group col-md-2 col-sm-12 col-xs-12">  
                                        <div class="form-group {{ errors.suv_rate ? ' has-error' : '' }}" > 
                                            <label for="suv_rate">SUV Rate</label>                                           
                                            <input type="text" name="suv_rate" id="suv_rate" class="form-control" value="{{transfers.suv_rate}}" placeholder="SUV Rate eg. 500"/>
                                          
                                          {% if errors.suv_rate %}  
                                            <span class="help-block">{{ errors.suv_rate | first }}</span>

                                          {% endif %}  

                                        </div>   
                                     </div>   

                                     <div class="form-group col-md-2 col-sm-12 col-xs-12">
                                         <div class="form-group {{ errors.minibus_rate ? ' has-error' : '' }}" > 
                                            <label for="suv_rate">Minibus Rate</label>                                           
                                            <input type="text" name="minibus_rate" id="minibus_rate" class="form-control" value="{{transfers.minibus_rate}}" placeholder="Minibus Rate eg. 600"/>
                                          
                                            {% if errors.minibus_rate %}  
                                            <span class="help-block">{{ errors.minibus_rate | first }}</span>

                                             {% endif %}  

                                        </div>           
                                     </div>   

                                      <div class="form-group col-md-12 col-sm-12 col-xs-12">

                                          <div class="pull-right"> <button type="submit" class="btn btn-primary">Update</button></div>

                                    </div>                 
                             </div>         
                        </div><!-- Close row -->   

                         <div class="row"
                                    
                        </div>   
                                        {{ csrf.field | raw }}

                    </form>
                           
                
            </div>
        
        
        {% endblock %}