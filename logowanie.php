<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
        <title>SzybciutkoDoCelu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wypożyczalnia Samochodowa">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container">
    <div class="row MENU">
        <div class="start col-sm-12">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.html">Szybciutko Do Celu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="start.html">START</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="o_nas.html">O NAS</a>
      </li>
                <li class="nav-item">
        <a class="nav-link" href="cars.html">SAMOCHODY</a>
      </li> 
        <li class="nav-item">
        <a class="nav-link" href="index.html#kontakt">KONTAKT</a>
      </li> 
        <li class="nav-item">
        <a class="nav-link" href="rejestracja.php">REJESTRACJA</a>
      </li> 
        <li class="nav-item">
        <a class="nav-link" href="logowanie.php">LOGOWANIE</a>
      </li> 
    </ul>
  </div>
        </nav>
        </div>
        </div>
        
    <div class="rejestracja">
        <br><br>
        Wprowadź dane:
    <form action="zaloguj.php" method="POST">
        Login: <br><input type="text" name="login"><br>
        Hasło: <br><input type="password" name="haslo"><br><br>
        <input type="submit" name="loguj" value="Zaloguj sie">
    </form>
        </div>
        <br><br>
        
        
 <div class="row CONTACTS" id="kontakt">
        <div class="kontakt col-sm-5 col-md-6 col-xl-6 offset-md-0">
            <i class="demo-icon icon-user"></i> <span class="i-name">Michał Jasik</span><span class="i-code"></span>
            <br>
            <i class="demo-icon icon-mail"></i> <span class="i-name">michal.jasik@student.krakow.up.pl</span><span class="i-code"></span>
            <br>
            <i class="demo-icon icon-phone"></i> <span class="i-name">723 723 723</span><span class="i-code"></span>
            <br><br>

            
    <span class="nav-item navbar-nav">
        <a class="nav-link" href="https://www.facebook.com/" target="_blank">
        <i class="demo-icon icon-facebook-rect"></i> <span class="i-name">Facebook</span>
        </a>
        </span>   
            
    <span class="nav-item navbar-nav">
        <a class="nav-link" href="https://twitter.com" target="_blank">
        <i class="demo-icon icon-twitter"></i> <span class="i-name">Twitter</span>
        </a>
      </span>  
            
 <a href='http://www.counterliczniki.com'>licznik na strone</a> <script  src='https://www.counterliczniki.com/auth.php?id=941b808d7233918a312e79da3257755207b2ae32'></script>
<script src="https://www.counterliczniki.com/pl/home/counter/711565/t/5"></script>

        </div>
        
        <div class="maps col-sm-5 col-md-6 col-xl-6 offset-md-0">
            <iframe src="https://maps.google.com/maps?hl=en&amp;q=Olkusz+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" ></iframe></div><br />
        <footer> &copy;2020 Michał Jasik<br/>
            Strona jest projektem przeznaczonym na zaliczenie przedmiotu.
        </footer>
        </div>   
        
    </div>
    
    
    
            
</body>
</html>
<?php
$polaczenie=mysqli_connect('localhost', 'm.jasik', 'myjZhKEtAxRPsql', 'm.jasik');
$zapytanie="SELECT * from `uzytkownicy`;";

if(empty($_POST["login"]) || empty($_POST["email"]) || empty($_POST["haslo"]) ){
    echo "Nie uzupełniono danych.";
}
else{
    $login=$_POST["login"];
    $email=$_POST["email"];
    $haslo=$_POST["haslo"];
    $czyistnieje="SELECT login FROM uzytkownicy WHERE login ='$login';";
    $wynik=mysqli_query($polaczenie,$czyistnieje);
    if (mysqli_num_rows($wynik)== 0) {
        $dodanie="insert into uzytkownicy(login,email,haslo) values('$login','$email','$haslo');";
        $wynik=mysqli_query($polaczenie,$dodanie);
        echo '<span style="color:#556B2F; text-align:center;">Zarejestrowałeś się poprawnie! Teraz możesz się zalogować!!!</span>';
    }
    else{
        echo '<span style="color:#DC143C; text-align:center;">Istnieje już użytkownik o takim loginie !!!! </span>';
    }
}  


$login=null;
$email=null;
$haslo=null;
mysqli_close($polaczenie);
?>




