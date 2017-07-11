{% extends 'templates/app.twig.php' %}


        {% block content %}


                <img src="/assets/imgs/Transfer-Service-002.png" class="img-responsive">
                <h2 style="font-weight: lighter; color: #40B4E5">Transfers Routes List</h2>
                
                    
                    <div class="panel panel-default">


                                       
                      <div class="panel-heading"><h4 style="color: #40B4E5">Pickup From Samui Airport </h4></div>

                            <div class="panel-body">
                                <div class="row">
                                   
                                    
                                            <table class="table table-condensed table-responsive">

                                                <th style="color: #40B4E5; cursor:pointer"></th>
                                                <th style="color: #40B4E5; cursor:pointer"><p class="lead">To </p><span class="glyphicon glyphicon glyphicon-map-marker"> </th>

                                                <th style="color: #40B4E5;text-align: center"><p class="lead">Sedan Rate</p><span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span></th>

                                                <th style="color: #40B4E5; text-align: center"><p class="lead">Suv Rate </p><span class="glyphicon glyphicon-hand-down" aria-hidden="true"></th>

                                                <th style="color: #40B4E5;text-align: center"><p class="lead">Minibus Rate </p><span class="glyphicon glyphicon-hand-down" aria-hidden="true"></th>


                                                     <tr>
                                                        <td width="10%"></td>
                                                        <td></td>
                                                        <td style="text-align: center"></td>
                                                        <td style="text-align: center"></td>
                                                        <td style="text-align: center"></td>
                                                    </tr>


                                                {% for transfer in transfers %}

                                                    <tr>
                                                        <td width="10%"></td>
                                                        <td><p class="lead"><a href="{{ path_for('transfer.reservation', { id: transfer.id }) }}">{{transfer.pickup_to}}</a></p></td>
                                                        <td style="text-align: center"><p class="lead"><a href="{{ path_for('transfer.reservation', { id: transfer.id }) }}">{{transfer.sedan_rate}}</a></p></td>
                                                        <td style="text-align: center"><p class="lead"><a href="{{ path_for('transfer.reservation', { id: transfer.id }) }}">{{transfer.suv_rate}}</a></p></td>
                                                        <td style="text-align: center"><p class="lead"><a href="{{ path_for('transfer.reservation', { id: transfer.id }) }}">{{transfer.minibus_rate}}</a></p></td>
                                                    </tr>
                                            
                                                {% endfor %}

                                            </table>     

                                </div>   
                                   
                            </div>
                
                    </div>    



                      <div class="col-sm-12" class="tour-h1-gray-pad-10" style="padding-top: 30px; padding-bottom: 30px">
                          <hr>
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

                          <img src="/assets/imgs/Transfer-Service-002.png" class="img-responsive">



                                                </div>  
        
        
        {% endblock %}