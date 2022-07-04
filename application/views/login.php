<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login user</title>
        <meta name="description" content="Love Authority." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="<?= base_url();?>assets/css/back.css" />
    </head>
    <body>
        <center>
        <!--hero section-->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 mx-auto">
                        <div class="card border-none">
                            <div class="card-body">
                                
                       <p class="mt-4 text-black lead text-center">
                       Welcome
                                </p>
                                <div class="mt-4">
                                <form action="<?= base_url();?>Home" method="post">
                                
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" value="" placeholder="Masukan username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" value="" placeholder="Enter password" required>
                                        </div>
                                    
                                        <button type="submit" class="btn btn-primary float-right">Login</button>
                                    </form>
                                    <div class="clearfix"></div>
                                  
                                </div>
                               
                              
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 mt-5 footer">
                        <p class="text-white small text-center">
                           
                            
                        </p>
                    </div>
                </div>
            </div>
        </section>
</center>
    </body>
</html>
