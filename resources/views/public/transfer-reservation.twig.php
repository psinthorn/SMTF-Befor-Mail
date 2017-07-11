{% extends 'templates/app.twig.php' %}


{% block content %}


<div class="container" style="margin-top: 80px; margin-bottom: 300px;">


        <div col-md-12>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Reservation Form Step:1
                    </div>
                    <div class="panel-body">

                        <!-- Show errors in json code for checking -->
                        <!--{{ errors | json_encode }}-->

                        <p><h2>Your Personal Infomation</h2></p>
                        <hr>
                        <form action="/reservation-now" method="post" autocomplete="off">
                            <div class="form-group {{ errors.fName ? ' has-error' : '' }}" >
                                <label for="fName">First Name</label>
                                <input type="text" name="fName" id="fName" class="form-control" value="{{ old.fName}}" placeholder="Your First Name"/>

                                {% if errors.name %}
                                <span class="help-block">{{ errors.name | first }}</span>

                                {% endif %}

                            </div>

                            <div class="form-group {{ errors.name ? ' has-error' : '' }}" >
                                <label for="lName">Last Name</label>
                                <input type="text" name="lName" id="lName" class="form-control" value="{{ old.lName}}" placeholder="Your Last Name"/>

                                {% if errors.name %}
                                <span class="help-block">{{ errors.name | first }}</span>

                                {% endif %}

                            </div>

                            <div class="form-group {{ errors.email ? ' has-error' : '' }}">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old.email }}" placeholder="email@yourdomain.com"/>

                                {% if errors.email %}
                                <span class="help-block">{{ errors.email | first }}</span>

                                {% endif %}

                            </div>
                            <div class="form-group {{ errors.password ? ' has-error' : '' }}">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" id="mobile" class="form-control" value="{{ old.mobile }}" placeholder="Your mobile number that we can contact you back"/>

                                {% if errors.mobile %}

                                <span class="help-block">{{ errors.mobile | first }}</span>

                                {% endif %}

                            </div>

                            <div class="form-group {{ errors.flight ? ' has-error' : '' }}">
                                <label for="flight">Flight Arrival Dat - Time</label>
                                <input type="text" name="flight" id="flight" class="form-control" value="{{ old.flight }}" placeholder=" eg. USM191  8/8/2017-10:30 am "/>

                                {% if errors.mobile %}

                                <span class="help-block">{{ errors.mobile | first }}</span>

                                {% endif %}

                            </div>

                            <div class="form-group {{ errors.hotelName ? ' has-error' : '' }}">
                                <label for="hotelName">Hotel Name</label>
                                <input type="text" name="hotelName" id="hotelName" class="form-control" value="{{ old.hotelName }}" placeholder="Hotel Name"/>

                                {% if errors.hotelName%}

                                <span class="help-block">{{ errors.hotelName | first }}</span>

                                {% endif %}

                            </div>

                            <div class="form-group {{ errors.noPassanger ? ' has-error' : '' }}">
                                <label for="noPassanger">Number of Passanger</label>
                                <input type="text" name="noPassanger" id="noPassanger" class="form-control" value="{{ old.noPassanger }}" placeholder=" How many people?"/>

                                {% if errors.noPassanger %}

                                <span class="help-block">{{ errors.noPassanger | first }}</span>

                                {% endif %}

                            </div>





                    </div>
                </div>
            </div>



            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Reservation Form Step:2
                    </div>
                    <div class="panel-body">

                        <!-- Show errors in json code for checking -->
                        <!--{{ errors | json_encode }}-->

                        <p><h2>Your Reservation Infomation</h2></p>
                        <hr>
                        <div class="form-group {{ errors.transferTo? ' has-error' : '' }}">
                                <label for="transferTo">Your Destination</label>
                                <input type="text" name="transferTo" id="transferTo" class="form-control" value="{{ route.pickup_to }}" placeholder="Service Name"/>
                                <input type="hidden" name="transferId" id="transferId" value="{{ route.id }}" />

                                {% if errors.transferTo %}
                                <span class="help-block">{{ errors.transferTo | first }}</span>

                                {% endif %}

                            </div>

                            <div class="form-group {{ errors.transferRate ? ' has-error' : '' }}">
                                <label for="transferRate">Service Rate</label>
<!--                                <input type="text" name="transferRate" id="transferRate" class="form-control" value="{{ old.transferRate }}" placeholder="0.00"/>-->

                                <select name="transferRate" id="transferRate" class="form-control">

<!--                                    <option>Vehicle Type: Sedan Rate: {{ route.sedan_rate}}.00 Baht</option>-->
<!--                                    <option>Vehicle Type: SUV Rate: {{ route.suv_rate}}.00 Baht</option>-->
<!--                                    <option>Vehicle Type: SUV Rate: {{ route.minibus_rate}}.00 Baht</option>-->

                                    <option>{{ route.sedan_rate}}.00</option>
                                    <option>{{ route.suv_rate}}.00</option>
                                    <option selected>{{ route.minibus_rate}}.00</option>



                                </select>

                                {% if errors.transferRate %}
                                <span class="help-block">{{ errors.transferRate | first }}</span>

                                {% endif %}

                            </div>
                            <div class="form-group {{ errors.additionalRequest ? ' has-error' : '' }}">
                                <label for="additionalRequest" > Additional Request </label>
                                <textarea rows="8" name="additionalRequest" id="additionalRequest" class="form-control" ></textarea>

                                {% if errors.additionalRequest %}

                                <span class="help-block">{{ errors.additionalRequest | first }}</span>

                                {% endif %}

                            </div>


                                 <p class="pull-right">
                                     <button type="submit" class="btn btn-success">Reserve Now</button>

                                 </p>

                            {{ csrf.field | raw }}

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>


{% endblock %}