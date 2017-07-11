{% extends 'templates/app.twig.php' %}


{% block content %}


<div class="col-sm-12">

<!--<div class=" col-md-12 col-sm-12 col-xs-12 col-xs-hidden ">-->
<!--    <img src="/assets/imgs/Tour-Service-001.png" class="img-responsive">-->
<!--</div>-->
    <h2 style="font-weight: lighter; color: #40B4E5">Tour Package List</h2>
    <hr>

    <div class="card-deck">

        <div class="col-sm-12">
            {% for tour in tours %}

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <img class="card-img-top img-responsive" src="/assets/imgs/{{tour.tour_pic}}" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">{{tour.tour_name}}
                            <button type="button" class="btn btn-default btn-xs">more info</button>
                        </h4>
                        <p class="card-text">{{tour.tour_desc}}</p>
                    </div>
                    <div class="card-footer">

                        <div class="col-sm-12">
                            <div class="pull-left"><p class="lead">Price: {{tour.rate1}}B</p></p></div>
                            <div class="pull-right">
                                <p class="lead">
                                    <button class="btn btn-success" style="color: white"><a href="{{ path_for('tour.reservation', { id: tour.id })}}">Book Now</a></button>
                                </p>
                                </p></div>
                            <br>
                            <br>
                            <hr>
                        </div>

                    </div>


                </div>
            </div>




            {% endfor %}

        </div>
    </div>

    <div class="clearfix"></div>

</div>




<div class="col-sm-12" class="tour-h1-gray-pad-10" style="padding-top: 30px; padding-bottom: 30px">
    <p class="col-xs-12 col-sm-12">
    <hr>
    <h1 class="h1-gray"><p style="color: #40B4E5">Why Book With Us?</h1>
    </p>
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
            reps and drivers who will meet you at Samui Airport Meeting Point.
        </li>
        <li>Benefit from samuiairportshuttle.com
            partner services. Discounts on private car around Samui Island
            Car rental, Hotel booking, Tour service, eating out and much more...
        </li>


    </ul>
</div>

<img src="/assets/imgs/Tour-Service-001.png" class="img-responsive">

</div>


{% endblock %}