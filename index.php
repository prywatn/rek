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
                            <a data-toggle="collapse" data-parent="#accordion" href="#addition">
                                <div class="text-center">Addition</div>
                            </a>
                        </h4>
                    </div>
                    <div id="addition" class="panel-collapse collapse">
                        <div class="panel-body">
                            <form role="form" method="get" action="controller/calculator.php" >
                                <div class="form-group">
                                    <input type="text" class="form-control" name="number1" id="number1">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mumber2" id="number2">
                                </div>
                                <fieldset disabled>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="number">
                                    </div>
                                </fieldset>
                                <button id="obdodawanie" type="submit" class="btn btn-primary">Calculate</button>
                            </form>                    
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#subtraction">
                            <div class="text-center">Subtraction</div>
                            </a>
                        </div>
                        <div id="subtraction" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="number1" id="number1">
                                    </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="number2" id="number2">
                                </div>
                                <fieldset disabled>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="number">
                                    </div>
                                </fieldset>
                                    <button type="submit" id="subtraction" class="btn btn-primary">Calculate</button>
                                </form>                    
                            </div>
                        </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#multiplication">
                                <div class="text-center">Multiplication</div>
                            </a>
                        </div>
                        <div id="multiplication" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="number1" id="number1">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="number2" id="number2">
                                    </div>
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="number">
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary">Calculate</button>
                                </form>
                            </div>
                        </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#division">
                                <div class="text-center">Division</div>
                            </a>
                        </h4>
                    </div>
                    <div id="division" class="panel-collapse collapse">
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="number1" id="number1">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="number2" id="number2">
                                </div>
                                <fieldset disabled>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="number">
                                    </div>
                                </fieldset>
                                <button type="submit" class="btn btn-primary">Calculate</button>
                            </form>             
                        </div>
                    </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#element">
                                        <div class="text-center">Element</div>
                                    </a>
                                </h4>
                            </div>
                            <div id="element" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="number1" id="number1">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="number2" id="number2">
                                        </div>
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="number">
                                            </div>
                                        </fieldset>
                                        <button type="submit" class="btn btn-primary">Calculate</button>
                                    </form>             
                                </div>
                            </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#logarithm">
                                        <div class="text-center">Logarithm</div>
                                    </a>
                                </h4>
                            </div>
                        <div id="logarithm" class="panel-collapse collapse">
                            <div class="panel-body">                               
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="number1" id="number1">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="number2" id="number2">
                                    </div>
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="number" >
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary">Calculate</button>
                                </form>
                            </div>
                        </div>
                    </div>
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
     </body>
</html>
