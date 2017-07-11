{% extends 'templates/app.twig.php' %}


{% block content %}

<h2 style="font-weight: lighter; color: #40B4E5">Transfers Routes Reservation List</h2> {{ booking.fName }}


<!--<div class="panel panel-default">-->
<!---->
<!--    <div class="panel-heading"><h4 style="color: #40B4E5"></h4>Reservation List</div>-->
<!---->
<!--    <div class="panel-body">-->
<!--        <div class="row">-->
<!---->
<!---->
<!--            <table class="table table-condensed table-responsive">-->
<!---->
<!--                <th style="color: #40B4E5; cursor:pointer">Name</th>-->
<!--<!--                <th style="color: #40B4E5; cursor:pointer"></th>-->
<!--                <th style="color: #40B4E5; cursor:pointer"><p class="lead">To </p><span class="glyphicon glyphicon glyphicon-map-marker"> </th>-->
<!---->
<!--                <th style="color: #40B4E5;text-align: center"><p class="lead">Sedan Rate</p><span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span></th>-->
<!---->
<!--                <th style="color: #40B4E5; text-align: center"><p class="lead">Suv Rate </p><span class="glyphicon glyphicon-hand-down" aria-hidden="true"></th>-->
<!---->
<!--                <th style="color: #40B4E5;text-align: center"><p class="lead">Minibus Rate </p><span class="glyphicon glyphicon-hand-down" aria-hidden="true"></th>-->
<!---->
<!---->
<!--                <tr>-->
<!--                    <td width="10%"></td>-->
<!--                    <td></td>-->
<!--                    <td style="text-align: center"></td>-->
<!--                    <td style="text-align: center"></td>-->
<!--                    <td style="text-align: center"></td>-->
<!--                </tr>-->
<!---->
<!---->
<!--                {% for transfer in transfers %}-->
<!---->
<!--                <tr>-->
<!--                    <td width="10%">{{ bookreports.fName }}.' '. {{ bookreports.lName }}</td>-->
<!--                    <td><p class="lead"><a href="{{ path_for('transfer.reservation', { id: transfer.id }) }}">{{ bookreports.email }}</a></p></td>-->
<!--                    <td style="text-align: center"><p class="lead"><a href="{{ path_for('transfer.reservation', { id: transfer.id }) }}">{{bookreports.mobile}}</a></p></td>-->
<!--                    <td style="text-align: center"><p class="lead"><a href="{{ path_for('transfer.reservation', { id: transfer.id }) }}">{{bookreports.flight}}</a></p></td>-->
<!--                    <td style="text-align: center"><p class="lead"><a href="{{ path_for('transfer.reservation', { id: transfer.id }) }}">{{bookreports.hotel}}</a></p></td>-->
<!--                </tr>-->
<!---->
<!--                {% endfor %}-->
<!---->
<!--            </table>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->
<!---->
<!---->
<!---->
<!---->
<!---->




{% endblock %}