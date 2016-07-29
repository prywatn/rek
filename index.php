<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Szkolenia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Abril+Fatface&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <div class="panel-group" id="accordion">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#dodawanie">
                                <div class="text-center"> Dodawanie </div>
                            </a>
                        </h4>
                    </div>
                    <div id="dodawanie" class="panel-collapse collapse">
                        <div class="panel-body">
                            <form role="form" >
                                <div class="form-group">
                                    <input type="text" class="form-control" id="liczba1">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="liczba2">
                                </div>
                                <fieldset disabled>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="liczba">
                                    </div>
                                </fieldset>
                                <button id="obdodawanie" type="submit" class="btn btn-primary">Oblicz</button>
                            </form>                    
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#odejmowanie">
                            <div class="text-center">Odejmowanie</div>
                            </a>
                        </div>
                        <div id="odejmowanie" class="panel-collapse in collapse">
                            <div class="panel-body">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="liczba1">
                                    </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="liczba2">
                                </div>
                                <fieldset disabled>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="liczba">
                                    </div>
                                </fieldset>
                                    <button type="submit" id="odejmowanie" class="btn btn-primary">Oblicz</button>
                                </form>                    
                            </div>
                        </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#mnozenie">
                                <div class="text-center"> Mnożenie</div>
                            </a>
                        </div>
                        <div id="mnozenie" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="liczba">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="liczba">
                                    </div>
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="liczba">
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary">Oblicz</button>
                                </form>
                            </div>
                        </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#dzielenie">
                                <div class="text-center">Dzielenie</div>
                            </a>
                        </h4>
                    </div>
                    <div id="dzielenie" class="panel-collapse collapse">
                        <div class="panel-body">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="liczba">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="liczba">
                                    </div>
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="liczba">
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary">Oblicz</button>
                                </form>             
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#pierwiastek">
                                        <div class="text-center">Pierwiastek</div>
                                    </a>
                                </h4>
                            </div>
                        <div id="pierwiastek" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="liczba">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="liczba">
                                    </div>
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="liczba">
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary">Oblicz</button>
                                </form>             
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#logarytm">
                                        <div class="text-center">Logarytmowanie</div>
                                    </a>
                                </h4>
                            </div>
                            <div id="logarytm" class="panel-collapse collapse">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="liczba">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="liczba">
                                    </div>
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="liczba" >
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary">Oblicz</button>
                                </form>
                            </div>
                        </div>
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
     </body>
</html>
