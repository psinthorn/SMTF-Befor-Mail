{% extends 'templates/app.twig.php' %}


        {% block content %}

              <h2 style="font-weight: lighter; color: #40b4e5">Add Tour Package List</h2>
              <hr>
                
                   
                    <div class="panel panel-default">
                
                        
                        <div class="panel-heading"><a href="{{ path_for('tour.detail', { id: tour.id }) }}"><h4>{{ tour.tour_name }}</h4></a></div>

                            <div class="panel-body">
                                <div class="row">
                                    <form action="{{ path_for('tour.add') }}" method="post" enctype="application/x-www-form-urlencoded">
                                    
<!--                                            <input type="hidden" name="_METHOD"  value="PUT"/>-->
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label for="tour_name" style="font-weight: lighter">Tour Name:</label>
                                                <input type="text" name="tour_name" id="tour_name" class="form-control" ></input>
                                            </div> 
                                            <div class="col-md-12 col-sm-12 col-xs-12">   
                                                <label for="tour_desc" style="font-weight: lighter">Tour Header:</label>
                                                <input type="text" name="tour_desc" id="tour_desc" class="form-control" ></input>
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-xs-12">   
                                                <label for="ldesc" style="font-weight: lighter">Tour Description</label>
                                                <textarea rows="8" name="tour_ldesc" id="tour_ldesc" class="form-control" ></textarea>
                                            </div>
                                </div>

                                <div class="row">    
                                <hr>        

                                            <div class="col-md-4 col-sm-3 col-xs-12">   
                                                <label for="rate1" style="font-weight: lighter">Rate 1</label>
                                                <input type="text" name="rate1" id="rate1"  class="form-control" ></input>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">   
                                                <label for="rate2" style="font-weight: lighter">Rate 2</label>
                                                <input type="text" name="rate2" id="rate2" class="form-control" ></input>
                                            </div>

                                             <div class="col-md-4 col-sm-4 col-xs-12">   
                                                <label for="rate3" style="font-weight: lighter">Rate 3</label>
                                                <input type="text" name="rate3" id="rate3" class="form-control" ></input>
                                            </div>

                                 </div>   

                                 <div class="row">
                                            <br>
                                            <div class="pull-right" style="padding-right: 15px">

                                               
                                                <!--<input type="subit" value="Delete"/>-->
                                                
                                                <button class="btn btn-success" type="submit">Add</button>
                                                <!-- <button class="btn btn-danger"><a href="transfers/delete/{{transfer.id}}">Delete</a></button> -->
                                                 <button class="btn btn-danger" type="button"><a href="{{ path_for('tour.manage')}}" >Cancel</button>
                                                 <!--<button class="btn btn-danger" type="submit" onClick="if(confirm('Format the hard disk?'))alert('You are very brave!')else window.close(x)">Delete</button>-->

                                               
                                                    
                                            </div>
                                    
                                             {{ csrf.field | raw }}
                                 </div>
                              </form>   
                            </div>
                
                    </div>
                    

                    <br>

                    <br>
                    

            

        
        
        {% endblock %}