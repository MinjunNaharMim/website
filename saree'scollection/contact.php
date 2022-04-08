<!DOCTYPE html>
<html>
        <head>
                <title> saree's collections </title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href= "css/style.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        </head>
        <body>

                <! –– nevigation bar ––>

                <?php include 'menu.php' ;?>

                <! –– Contact section ––>

                <div class="jumbotron">
                        <h1>Contact Number</h1>
                        <p>01734987694</p>
                </div>

                <section class="my-5">
                        <div class = "py-5">
                                 <h2 class = "text-center"> Contact Us </h2>
                        </div>

                        <! –– Form  ––>

                        <div class = "w-50 m-auto">

                                <form action = "userinfo.php" method = "post">

                                        <div class = "form-group">
                                                <label>Username</label>
                                                <input type="text" name= "user" autocomplete="off" class = "form-control">
                                        </div>

                                        <div class = "form-group">
                                                <label>Email</label>
                                                <input type="text" name= "email" autocomplete="off" class = "form-control">
                                        </div>

                                        <div class = "form-group">
                                                <label>Mobile</label>
                                                <input type="text" name= "mobile" autocomplete="off" class = "form-control">
                                        </div>

                                        <div class = "form-group">
                                                <label>Comments</label>

                                                <textarea class = "form-control" name ="comments">

                                                </textarea>
                                        </div>

                                        <button type="submit" class="btn btn-success">Submit</button>

                                </form>
                        </div>

                </section>

                <! –– footer section ––>

                <footer>
                <p class= "p-3 bg-dark text-white text-center"> @saree'scollection </p>
                </footer>

        </body>
</html>
