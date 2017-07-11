{% extends 'templates/app.twig.php' %}


{% block content %}

<h2 style="font-weight: lighter; color: #40B4E5"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Transfers Reservation List</h2>
<hr>


<div class="panel panel-default">

    <div class="panel-heading"><h4 style="color: #40B4E5"></h4>Click to view full report</div>

    <div class="panel-body">
        <div class="row">


            <table class="table table-condensed table-responsive">

                <th></th>

                <th style="color: #40B4E5; cursor:pointer; text-align: center"><p class="lead">Customer Name</p></th>

                <th style="color: #40B4E5; cursor:pointer; text-align: center"><p class="lead">Flight Date/Time</p></th>

                <th style="color: #40B4E5; cursor:pointer; text-align: center"><p class="lead">Email</p></th>

                <th style="color: #40B4E5; cursor:pointer; text-align: center"><p class="lead">Mobile</p></th>

                <th style="color: #40B4E5; cursor:pointer; text-align: center"><p class="lead">Hotel Name</p></th>
                <th style="color: #40B4E5; cursor:pointer; text-align: center"><p class="lead">View/Edit</p></th>


<!--                <tr>-->
<!--                    <td width="10%"></td>-->
<!--                    <td></td>-->
<!--                    <td style="text-align: center"></td>-->
<!--                    <td style="text-align: center"></td>-->
<!--                    <td style="text-align: center"></td>-->
<!--                </tr>-->


                {% for booking in bookings %}

                <tr>
                    <td width="5%"></td>

                    <td style="text-align: center">
                        {{ booking.fName }} {{ booking.lName }}
                    </td>

                    <td style="text-align: center">
                        {{booking.flight}}
                    </td>

                    <td style="text-align: center">
                       {{ booking.email }}
                    </td>

                    <td style="text-align: center">
                       {{booking.mobile}}
                    </td>

                    <td style="text-align: center">
                       {{booking.hotelName}}
                    </td>

                    <td style="text-align: center">

                            <span>[</span>
                        <a href="{{ path_for('transferbook.detail', { id: booking.id }) }}">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </a>
                             <span>]</span>
                            <span>[</span>
                        <a href="{{ path_for('transferbook.detail', { id: booking.id }) }}">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                            <span>]</span>
                    </td>
                </tr>

                {% endfor %}

            </table>

        </div>

    </div>

</div>









{% endblock %}