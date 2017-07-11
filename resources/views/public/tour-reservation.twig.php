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
                        <form action="/tour-reservation-now" method="post" autocomplete="off">
                            <div class="form-group {{ errors.fName ? ' has-error' : '' }}" >
                                <label for="fName">First Name</label>
                                <input type="text" name="fName" id="fName" class="form-control" value="{{ old.fName}}" placeholder="Your First Name"/>

                                {% if errors.fName %}
                                <span class="help-block">{{ errors.fName | first }}</span>

                                {% endif %}

                            </div>

                            <div class="form-group {{ errors.lName ? ' has-error' : '' }}" >
                                <label for="lName">Last Name</label>
                                <input type="text" name="lName" id="lName" class="form-control" value="{{ old.lName}}" placeholder="Your Last Name"/>

                                {% if errors.lName %}
                                <span class="help-block">{{ errors.lName | first }}</span>

                                {% endif %}

                            </div>

                            <div class="form-group {{ errors.email ? ' has-error' : '' }}">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old.email }}" placeholder="email@yourdomain.com"/>

                                {% if errors.email %}
                                <span class="help-block">{{ errors.email | first }}</span>

                                {% endif %}

                            </div>
                            <div class="form-group {{ errors.mobile ? ' has-error' : '' }}">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" id="mobile" class="form-control" value="{{ old.mobile }}" placeholder="Your mobile number that we can contact you back"/>

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

                            <div class="form-group {{ errors.noPerson ? ' has-error' : '' }}">
                                <label for="noPerson">How many person</label>
                                <input type="text" name="noPerson" id="noPerson" class="form-control" value="{{ old.noPerson }}" placeholder=" How many people?"/>

                                {% if errors.noPerson %}

                                <span class="help-block">{{ errors.noPerson | first }}</span>

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
                        <div class="form-group {{ errors.tourName ? ' has-error' : '' }}">
                                <label for="tourName">Tour Package</label>
                                <input type="text" name="tourName" id="tourName" class="form-control" value="{{ tour.tour_name }}" placeholder="Service Name"/>

                                <input type="hidden" name="tourId" id="tourId" class="form-control" value="{{ tour.id }}" placeholder="Service Name"/>

                                {% if errors.name %}
                                <span class="help-block">{{ errors.tourName | first }}</span>

                                {% endif %}

                            </div>

                            <div class="form-group {{ errors.tourRate ? ' has-error' : '' }}">
                                <label for="tourRate">Tour Rate</label>
                                <input type="text" name="tourRate" id="tourRate" class="form-control" value="{{ tour.rate1 }}.00" placeholder="0.00"/>

                                {% if errors.tourRate %}
                                <span class="help-block">{{ errors.tourRate | first }}</span>

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