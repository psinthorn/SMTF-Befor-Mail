{% extends 'templates/app.twig.php' %}


        {% block content %}


        <div class="row">
            <div class="pull-left"> <h2 style="font-weight: lighter; color: #40b4e5">Current Tour Package List</h2></div>

            <div class="pull-right" style="padding-right: 20px; padding-top: 30px"><button class="btn btn-success"><a href="{{ path_for('tour.add') }}">Add New Package</a></button></div>

        </div>

<hr>
                    {% for tour in tours %}
                    <div class="panel panel-default">
                
                        
                        <div class="panel-heading"><a href="{{ path_for('tour.detail', { id: tour.id }) }}"><h4>{{ tour.tour_name }}</h4></a></div>

                            <div class="panel-body">
                                <div class="row">
                                    <form action="{{ path_for('tour.delete', { id: tour.id }) }}" method="post" enctype="application/x-www-form-urlencoded">
                                    
                                            <input type="hidden" name="_METHOD"  value="DELETE"/>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label for="from" style="font-weight: lighter">Tour Name:</label>
                                                <input type="text" class="form-control" placeholder="{{ tour.tour_name}}"></input>
                                            </div> 
                                            <div class="col-md-12 col-sm-12 col-xs-12">   
                                                <label for="from" style="font-weight: lighter">Tour Header:</label>
                                                <input type="text" class="form-control" placeholder="{{ tour.tour_desc }}"></input>
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-xs-12">   
                                                <label for="from" style="font-weight: lighter">Tour Description</label>
                                                <textarea rows="8" class="form-control" placeholder="{{ tour.tour_ldesc }}"></textarea>
                                            </div>
                                </div>

                                <div class="row">    
                                <hr>        

                                            <div class="col-md-4 col-sm-3 col-xs-12">   
                                                <label for="from" style="font-weight: lighter">Rate 1</label>
                                                <input type="text" class="form-control" placeholder="{{ tour.rate1 }}"></input>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">   
                                                <label for="from" style="font-weight: lighter">Rate 2</label>
                                                <input type="text" class="form-control" placeholder="{{ tour.rate2 }}"></input>
                                            </div>

                                             <div class="col-md-4 col-sm-4 col-xs-12">   
                                                <label for="from" style="font-weight: lighter">Rate 3</label>
                                                <input type="text" class="form-control" placeholder="{{ tour.rate3 }}"></input>
                                            </div>

                                 </div>   

                                 <div class="row">
                                            <br>
                                            <div class="pull-right" style="padding-right: 15px">

                                               
                                                <!--<input type="subit" value="Delete"/>-->
                                                
                                                <button class="btn btn-warning" type="button"><a href="{{ path_for('tour.detail', { id: tour.id }) }}">Edit</a></button>
                                                <!-- <button class="btn btn-danger"><a href="transfers/delete/{{transfer.id}}">Delete</a></button> -->
                                                 <button class="btn btn-danger" type="submit" onclick="clickToConfirm()">Delete</button>
                                                 <!--<button class="btn btn-danger" type="submit" onClick="if(confirm('Format the hard disk?'))alert('You are very brave!')else window.close(x)">Delete</button>-->
                                            

                                                



                                                 <script>
                                                        function clickToConfirm() {
                                                            if(true){
                                                            alert("Click [OK] to confirm delete");
                                                            }else{
                                                                  button.window.close();  
                                                            }

                                                        }
                                                        
                                                </script>

   
                                               
                                                    
                                            </div>
                                    
                                             {{ csrf.field | raw }}
                                 </div>
                              </form>   
                            </div>
                
                    </div>
                    {% endfor %}



            



        
        
        {% endblock %}