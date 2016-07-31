<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Szkolenia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Abril+Fatface&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="//code.jquery.com/jquery-latest.js"></script>
        <script src="js/mainajax.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </head>
<body>
<div class="container">
    <button class="cl">Włącz/wyłącz</button>
    <div class="row">
        <div class="col-lg-2 well">
            <div class="panel-group accordion">
                <div class="panel panel-info addition">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#addition">
                                <div class="text-center">Addition</div>
                            </a>
                        </h4>
                    </div>
                    <div id="addition" class="panel-collapse nt collapse">
                        <div class="panel-body">
                            <form role="form" method="get" action="#" >
                                <div class="form-group">
                                    <input type="text" class="form-control" id="number1">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="number2">
                                </div>
                                <fieldset disabled>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="number">
                                    </div>
                                </fieldset>
                                <button id="calculate" type="submit" class="btn btn-primary">Calculate</button>
                            </form>                    
                        </div>
                    </div>
                </div>
                    <div class="panel panel-info subtraction">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#subtraction">
                                <div class="text-center">Subtraction</div>
                                </a>
                            </h4>   
                        </div>
                        <div id="subtraction" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form role="form" method="get" action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subnumber1">
                                    </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subnumber2">
                                </div>
                                <fieldset disabled>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subnumber">
                                    </div>
                                </fieldset>
                                    <button type="submit" id="subtraction" class="btn btn-primary">Calculate</button>
                                </form>                    
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info multiplication">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#multiplication">
                                <div class="text-center">Multiplication</div>
                                </a>
                            </h4>
                        </div>
                        <div id="multiplication" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="mulnumber1">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="mulnumber2">
                                    </div>
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="mulnumber">
                                        </div>
                                    </fieldset>
                                    <button type="submit" id="multiplication" class="btn btn-primary">Calculate</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <div class="panel panel-info division">
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
                                    <input type="text" class="form-control" id="divnumber1">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="divnumber2">
                                </div>
                                <fieldset disabled>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="divnumber">
                                    </div>
                                </fieldset>
                                <button type="submit" id="division" class="btn btn-primary">Calculate</button>
                            </form>             
                        </div>
                    </div>
                </div>
                        <div class="panel panel-info element">
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
                                            <input type="text" class="form-control" id="elnumber1">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="elnumber2">
                                        </div>
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="elnumber">
                                            </div>
                                        </fieldset>
                                        <button type="submit" id="element" class="btn btn-primary">Calculate</button>
                                    </form>             
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info logarithm">
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
                                        <input type="text" class="form-control" id="lognumber1">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="lognumber2">
                                    </div>
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="lognumber" >
                                        </div>
                                    </fieldset>
                                    <button type="submit" id="logarithm" class="btn btn-primary">Calculate</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
     </body>
</html>