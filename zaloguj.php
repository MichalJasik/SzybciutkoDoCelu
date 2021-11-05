<?php

$polaczenie=mysqli_connect('localhost', 'm.jasik', 'myjZhKEtAxRPsql', 'm.jasik');
if (isset($_POST["loguj"])){
    $login=$_POST['login'];
    $haslo=$_POST['haslo'];

    $zapytanie ="SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='$haslo'";
    
    
    $wynik=mysqli_query($polaczenie,$zapytanie);
    
    
    if(mysqli_num_rows($wynik)==0){
        echo "Bledne logowanie lub haslo<br>";
    }
    
    else {
        session_start();
        $_SESSION["login"]=$login;
        $_SESSION["zalogowany"]= true;
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>

</head>
    <title>SzybciutkoDoCelu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wypożyczalnia Samochodowa">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
<body>
    
<div class="container">
    <div class="row MENU">
        <div class="start col-sm-12">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#">Szybciutko Do Celu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#start">START</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#nas">O NAS</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#cars">SAMOCHODY</a>
      </li> 
        <li class="nav-item">
        <a class="nav-link" href="#kontakt">KONTAKT</a>
      </li> 
        <li class="nav-item">
        <a class="nav-link" href="logout.php">WYLOGUJ</a>
      </li> 
    <li class="nav-item">
        <a class="nav-link"><?php
echo "Witaj ".$_SESSION['login'];?></a>
      </li>
    </ul>
  </div>
        </nav>
        </div>
    </div>
    <div class="row WITAMY" id="witamy">
        <br><br><div class="start col-sm-12">
            <figure><img src="audi_title.jpg" alt="audi" class="img-fluid mx-auto d-block"></figure>
        </div>
    </div>
    
    <div class="row START" id="start">
        <div class="o mnie col-sm-6">
            <article>
                <h1> SZYBCIUTKO DO CELU</h1>
<p>Pilnie poszukujesz wozu i poszukujesz doświadczonej jak i taniej wypożyczalni? A być może Twój pojazd się zepsuł w najmniej dogodnym momencie i musisz możliwie najszybciej znaleźć samochód na zastępstwo? W tego rodzaju chwili opłaca się naturalnie skorzystać z oferty naszej wypożyczalni samochodów, jaka nie jedynie jest tania, ale gwarantuje dogodne warunki współpracy, a do tego posiada szeroką bazę aut. Nasza wypożyczalnia samochodów w Olkuszu. Można wybrać spośród wielu marek samochodów, ich gabarytów, pojemności jednostek napędowych, a także decydować czy wolimy auto zasilane benzyną albo może dieslem. Do tego naprawdę dbamy o komfort a także poziom bezpieczeństwa wszystkich Klientów. Zawsze samochód jest bardzo regularnie poddawany przegląd technicznym i w razie konieczności przechodzi pełny serwis, który zapewnia jego sprawność. Samochody tym samym są nie jedynie w dobrym stanie, ale oczywiście także bardzo bezpieczne. Jednocześnie dbamy także o odpowiedni stan wizualny aut. U nas dostaje się zatankowane do pełna i skrupulatnie wyczyszczone auto, którego wnętrze pozostaje w naprawdę dobrym stanie, umożliwiając na komfortowe podróżowanie. Wynajem samochodów w Olkuszu pomimo tego realizowany pozostaje w konkurencyjnej cenie, przy jednoczesnym zmniejszeniu formalności do minimum. Elastyczne warunki wynajmu, zrozumiałe umowy, atrakcyjne warunki cenowe i auta w doskonałym stanie technicznym to najwyraźniejsze cechy, jakimi może pochwalić się ta wypożyczalnia aut w Olkuszu. Zapraszamy do kontaktu i do poznania pełnych naszych możliwości.  </p>
 </article>

</div>
        <div class="zdj-car col-sm-6 ">
        
        <figure><img src="mercedes.jpg" alt="mercedes" class="img-fluid mx-auto d-block"></figure>
        </div>
    </div>
    
    <div class="row O NAS" id="nas">
        <div class="zdj-car col-sm-6">
            <figure><img src="wartosci.jpg" alt="mercedes" class="img-fluid mx-auto d-block"></figure>
        </div>
        <div class="serwices col-sm-6">
            <article>
        <h1> NASZE WARTOŚCI</h1>
            <p>Dlaczego warto? Korzystanie z wypożyczalni samochodów nie będzie musiało być ani naprawdę kosztowne, ani też skomplikowane będąc związane z licznymi formalnościami, które uprzykrzają życie. Wynajem aut w Olkuszu może być zostać zrealizowany w niezwykle niewielkim czasie oraz bez niepotrzebnych spraw formalnych. Dbamy o wygodę własnych Klientów nie jedynie poprzez zmniejszanie wszystkich spraw formalnych, ale i poprzez przygotowywanie przejrzystych i prostych umów, by sam wynajem nie stwarzał jakichkolwiek nieoczekiwanych wątpliwości. Jako wypożyczalnia doświadczona oraz nowoczesna dbamy też o to, by nasi Klienci mieli do dyspozycji dużą bazę aut. Wypożyczalnia samochodów w Olkuszu tanio jest w stanie zaoferować auta z różnorodnych segmentów, w tym auta pojemniejsze do przewożenia cięższych rzeczy. Są to pojazdy komfortowo wyposażone, zadbane w środku, a do tego w pełni sprawne technicznie, poprzez co w trakcie podróży nimi będą mogli Państwo czuć się bezpiecznie. W przypadku naszej firmy oczywiście najistotniejsza jest jakość a także, w przeciwieństwie do własnej konkurencji, nie chcemy realizować wypożyczania za wszelką cenę. Nasze pojazdy regularnie przechodzą badania mechaniczne oraz w razie konieczności naprawiane są w wyspecjalizowanych serwisach. Dla zwiększenia poziomu bezpieczeństwa dbamy też o to, by pojazdy posiadały dobre polisy ubezpieczeniowe, chroniąc nie jedynie naszą firmę przed uszkodzeniami samochodów, lecz również wszystkich Klientów na wypadek groźnych zdarzeń na drodze. Jesteśmy też bardzo elastyczni w sprawie okresu wynajmu, oferując do tego opcję łatwego oddania pojazdu w miejscu dogodnym dla naszych Klientów. </p>
                </article>
        </div>
    </div>

    <section id="cars"> 
        <h1>Nasze samochody</h1>
    <div class="row CARS">
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
        <figure class="galeria">
            <img src="Skoda_Fabia_II.jpg" alt= "Skoda Fabia" >
            <figcaption> Skoda Fabia </figcaption>
            </figure> 
            <table class="table table-hover">
    <thead>
      <tr>
        <th>Okres wypozyczenia:</th>
          <th>CENA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1-7dni</td>
        <td>79złoty</td>
      </tr>
      <tr>
        <td>8-15dni</td>
        <td>149złoty</td>
      </tr>
      <tr>
        <td>16-30dni</td>
        <td>199złoty</td>
      </tr>
    </tbody>
  </table>
        </div>
        
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
        <figure class="galeria">
            <img src="Fiat%20linea.jpg" alt= "Fiat Linea" >
            <figcaption> Fiat Linea </figcaption>
            </figure> 
            <table class="table table-hover">
    <thead>
      <tr>
        <th>Okres wypozyczenia:</th>
          <th>CENA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1-7dni</td>
        <td>79złoty</td>
      </tr>
      <tr>
        <td>8-15dni</td>
        <td>149złoty</td>
      </tr>
      <tr>
        <td>16-30dni</td>
        <td>199złoty</td>
      </tr>
    </tbody>
  </table>
          
        </div>
        
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
            <figure class="galeria">
            <img src="ford_fiesta.webp" alt= "Fiat Linea" >
            <figcaption> Ford Fiesta </figcaption>
                </figure> 
            <table class="table table-hover">
    <thead>
      <tr>
        <th>Okres wypozyczenia:</th>
          <th>CENA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1-7dni</td>
        <td>79złoty</td>
      </tr>
      <tr>
        <td>8-15dni</td>
        <td>149złoty</td>
      </tr>
      <tr>
        <td>16-30dni</td>
        <td>199złoty</td>
      </tr>
    </tbody>
  </table>
        </div>
        
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
            <figure class="galeria">
            <img src="Renault%20Clio.jpg" alt= "Renault Clio" >
            <figcaption> Renault Clio </figcaption>
                </figure> 
            <table class="table table-hover">
    <thead>
      <tr>
        <th>Okres wypozyczenia:</th>
          <th>CENA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1-7dni</td>
        <td>79złoty</td>
      </tr>
      <tr>
        <td>8-15dni</td>
        <td>149złoty</td>
      </tr>
      <tr>
        <td>16-30dni</td>
        <td>199złoty</td>
      </tr>
    </tbody>
  </table>

        </div>
        
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
            <figure class="galeria">
            <img src="Skoda%20Rapid.jpg" alt= "Skoda Rapid" >
            <figcaption> Skoda Rapid</figcaption>
                </figure> 
            <table class="table table-hover">
    <thead>
      <tr>
        <th>Okres wypozyczenia:</th>
          <th>CENA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1-7dni</td>
        <td>79złoty</td>
      </tr>
      <tr>
        <td>8-15dni</td>
        <td>149złoty</td>
      </tr>
      <tr>
        <td>16-30dni</td>
        <td>199złoty</td>
      </tr>
    </tbody>
  </table>
        </div>
        
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
        <figure class="galeria">
            <img src="Fiat%20Corolla.jpg" alt= "Fiat Corolla" >
            <figcaption> Fiat Corolla</figcaption>
            </figure> 
            <table class="table table-hover">
    <thead>
      <tr>
        <th>Okres wypozyczenia:</th>
          <th>CENA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1-7dni</td>
        <td>79złoty</td>
      </tr>
      <tr>
        <td>8-15dni</td>
        <td>149złoty</td>
      </tr>
      <tr>
        <td>16-30dni</td>
        <td>199złoty</td>
      </tr>
    </tbody>
  </table>
        </div>
        </div>
        
    </section>
    <div class="row CONTACTS" id="kontakt">
        <div class="kontakt col-sm-5 col-md-6 col-xl-6 offset-md-0">
            <i class="demo-icon icon-user"></i> <span class="i-name">Michał Jasik</span><span class="i-code"></span>
            <br>
            <i class="demo-icon icon-mail"></i> <span class="i-name">michal.jasik@student.krakow.up.pl</span>
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
            
 <a href='http://www.counterliczniki.com'>licznik na strone</a> <script src='https://www.counterliczniki.com/auth.php?id=941b808d7233918a312e79da3257755207b2ae32'></script>
<script src="https://www.counterliczniki.com/pl/home/counter/711565/t/5"></script>

        </div>
        
        <div class="maps col-sm-5 col-md-6 col-xl-6 offset-md-0">
            <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Olkusz+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" ></iframe></div><br />
        <footer> &copy;2020 Michał Jasik<br/>
            Strona jest projektem przeznaczonym na zaliczenie przedmiotu.
        </footer>
        </div>
</div>
   
</body>
</html>
