<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - DEALBOOK admin</title>
        <link href="../assets/admin/css/styles.css" rel="stylesheet" />
        <link href="../assets/admin/css/main.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
        <div class="center">
            <h1>LOGIN</h1>
            <form method="post" action="index.php?controller=login&action=login">
                <div class="txt_field">
                    <input type="email" name="email" id="" required>
                    <span></span>
                    <label style="display: flex;" for="">
                    <i style="margin: 14px 15px 0px 0px;" class="fas fa-user"></i>
                        <p class="p1">Username</p>
                    </label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" id="" required>
                    <span></span>
                    <label style="display: flex;" for="">
                        <i style="margin: 14px 15px 0px 0px;" class="fas fa-lock"></i>
                        <p class="p1">Password</p>
                    </label>
                </div>
                <div style="display: flex;" class="rember">
                    <input style="margin: 17px 10px 0px 0px;cursor: pointer;" autocomplete="off" type="checkbox" id="checkbox"> 
                    <label for="checkbox">
                        <p style="color: white;cursor: pointer; ">Remember me</p>
                    </label>
                </div>
                <div class="submit">
                    <input type="submit" value="Login">
                </div>
                <div class="pass">Forgot Password? </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
