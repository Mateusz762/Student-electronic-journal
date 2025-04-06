<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dziennik elektroniczny</title>
</head>
<body>
<div class="container">
    <div class="wrapper">
       <div class="header">
            <header>
               <h2>Dziennik elektroniczny</h2>
         </header>
     </div>
     <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Zaloguj się</button>
            <button class="btn" id="registerBtn" onclick="register()">Zarejestrój się</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
    <div class="form-box">
    <form action="log in.php" method="POST">
            <div class="top">
                <span>Utwórz konto? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Zaloguj się do dziennika</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Podaj login lub email" required>
                <i class="fa-solid fa-user"></i> <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Hasło" equired>
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Zaloguj się">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="http://localhost/dziennik/forgotpass.php">Forgot password?</a></label>
                </div>
            </div>
        </div>
    </form>
        <!--Rejestracja ucznia-->
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <header>Rejestracja</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Nazwa urzytkownika" equired>
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Podaj Hasło" equired>
                <i class="fa-solid fa-lock"></i>
            </div> <div class="input-box">
                <input type="text" class="input-field" placeholder="Powtórz Hasło" equired>
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Podaj maila" equired>
                <i class="fa-solid envelop"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Utwórz konto ucznia">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Zapamiętaj mnie</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </div>
    </div>
</div>   
   <script src="script.js"></script>
</div>
</body>
</html>