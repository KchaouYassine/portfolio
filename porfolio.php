<?php 
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        
        $user =  filter_var($_POST['besuchername'], FILTER_SANITIZE_STRING);
        $mail =  filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $msg  =  filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        //user 
        if(empty($user)){
            $userErr="Your Name musst not be Empty";
        }else{
            $userValid="Your Name is validate";
        }
        // email
        if(empty($mail)){
            $emailErr ="mail can't be Empty";
        }else if(!(filter_var($mail,FILTER_VALIDATE_EMAIL))){
            $emailErr ="mail is not Valid";
        }else{
            $emailValid="your Mail is Valid";
        }
        // message
        if (empty($msg)){
            $msgErr="Message kann not be Empty";
        }else{
            $msgValid="your Message is Valid";
        }

        
    }








?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
   
    <link rel="stylesheet" href="css/portfolio.css"/>
    <title>Document</title>
</head>
<body>

    <!--begin loading_overlay-->
    <div class="loadingOverlay">
        
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
          </div>
    </div>

    <!--end loading_overlay-->
    <!--beginn scroll-to-top -->
    <div class="scrollToTop">
        <i class="fa fa-angle-double-up"></i>
    </div>
    <!--end scroll-to-top -->

    <!--beginn navbar1-->
    <div class='navbar1'>
        <div class="container">
            <div class="row">
                <div class="reglage col-sm-6 text-sm-left text-center">
                    <p><i class="fa fa-mobile"></i> <span class="nav1Inner">+4917642738229</span></p>
                    
                    <p><i class="fa fa-envelope-open"></i><span>kchaou.yessin@gmail.com</span></p>
                </div>
                <div class="reglage col-sm-6 text-sm-right text-center">
                    <span> Willkommen auf meiner Webseite</span> 
                    <span class="get_quote">ENJOY!!</span>   
                </div>
            </div>
                    
            
            
        </div>
    </div>
    <!--end navbar1-->
    <!-- beginn navbar2-->
    <div class="navbar2">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#">
                    <span>MEIN</span> <span>PORTFOLIO</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" data-scroll=".slider" href="#">Starseite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll=".studium" aria-current="page" href="#">Studium</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll=".hobbies" href="#">Hobbies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll=".fähigkeiten" href="#">Fähigkeiten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll=".contact" href="#">Kontakt</a>
                    </li>
                </ul>
                    
                </div>
            </nav>
        </div>
    </div>
    

    <!-- End navbar2-->
    <!-- beginn slider-->
    <div class="slider">
        <div class="slider-inner">
            <div class="overlay"></div>
            <div class="schrift">
                <h1>// My Life Cycle</h1>
                <p class="erstelinie"><span>While</span>(me.alive( ))</p>
                <p class="zweitelinie">{</p>
                <p class="drittelinie">me.eat( )<br>me.study( )<br>me.work( )<br><span>me.code( )</span><br>me.sleep( )</p>
                <p class="viertelinie">}</p>
            </div>
        </div>
        
    </div>

    <!-- end slider-->
    <!-- begin uberMich-->
    <div class="uberMich text-center">
        <div class="container">
            <h1 class="unterschrift wow bounceIn" data-wow-offset="200"> ÜBER MICH </h1>
            <p class="wow bounceIn" data-wow-delay=".5s">Ich bin Mohamed Yassine Kchaou und komme aus Tunesien. Ich bin 21 Jahre alt  und ein Student im Fachbereich Informatik an der technischen Universität Kaiserslautern.Schon als Kind habe ich mich immer für Grafik- und Videoproduktion interessiert und seitdem beschäftige ich mich mit Animation und Design. Nachdem ich meine erste Programmiersprache (Pascal) gelernt hatte, habe ich mich von Software und Programmierung fasziniert und eine Karriere als Full-Stack-Softwareentwickler zukünftig anstreben wollen. Ich habe auch Zeit und Mühe in das Erlernen von Computersprachen investiert und mit meinen eigenen Kenntnissen in Grafikdesign und Programmierung habe ich diese Website entwickelt und habe die Hoffnung, dass es Ihnen gefallen wird.</p>

        </div>
    </div>
    <!-- end uberMich-->
    <!-- beginn Studium-->
    <div class="studium">
        <div class="container">
            <h1 class="text-center unterschrift wow bounceIn" data-wow-offset="200">Studium</h1>
            <div class="studium-inner">
                    <div class="gymnasuim right wow bounceInLeft" data-wow-offset="200 ">
                            <div class="row">
                                <div class="foto col-xs-12 col-md-4">
                                    <img class="img-fluid" src="css/image/sfax.jpg" alt="gymnasuim" >
                                </div>
                                <div class=" col-xs-12 col-md-8 text-left">
                                    <h3 class="righttext">Gymnasuim</h3>
                                    <span>09-2014/10-2018</span>
                                    <p class="rightparag">Ich habe eine Abiturprüfung in der Mathematik Abteilung im Gymnasuim "Lycée Mahmoud-Magdich Sfax" mit guten Noten abgeschlossen und als nächster Schritt bin ich nach Deutschland geflogen, um zu studieren.</p>
                                </div>
                            </div>
                    </div>
                    <div class="Sprachkurs left right wow bounceInRight" data-wow-offset="200 ">
                        <div class="row">
                            
                            <div class="text col-xs-12 col-md-8 text-left">
                                <h3 class="lefttext">Sprachkurs</h3>
                                <span>02-2019/06-2019</span>
                                <p class="leftparag">Mein erster Deutsch-Kurs war am Carl –Duisberg-Centrum in Radolfzell , danach bin ich nach Kaiserslautern umgezogen und dort habe DSH-Vorbereitungskurs an der TUK besucht und schließlich mit dem DSH-2 als Ergebnis bestanden.</p>
                            </div>
                            <div class="foto col-xs-12 col-md-4">
                                <img  class="img-fluid" src="css/image/cdc.jpg" alt="sprachkurs" >
                            </div>
                        </div>
                    </div>
                    <div class="Universität right right wow bounceInLeft" data-wow-offset="200  ">
                            <div class="row">
                                <div class="foto col-xs-12 col-md-4">
                                    <img  class="img-fluid" src="css/image/tuk.jpg" alt="Universität" >
                                </div>
                                <div class="text col-xs-12 col-md-8 text-left">
                                    <h3 class="righttext">Universität</h3>
                                    <span>Momentan</span>
                                    <p class="rightparag">Ich mache derzeit meinen Bachelor in Informatik an der technischen Universität Kaiserslautern und bin im zweiten Semester.</p>
                                </div>
                            </div>
                    </div>

            </div>
            
        </div>
    </div>
    <!-- end Studium-->

    <!-- begin Hobbies-->
    <div class="hobbies text-center">
        <div class="container">
            <h1 class="unterschrift wow bounceIn" data-wow-offset="200">Hobbies</h1>
            <div class="row">
                <div class="hobbie-inner col-sm-6 wow bounceIn" data-wow-delay=".5s">
                <i class=" rounded-circle fa fa-bicycle fa-3x"></i>
                    <h3 >Cycling</h3>
                    <p>Als ich ein Kind war, war Radfahren meine Leidenschaft, deshalb habe ich mich in einen Rennrad-Verein engagiert und mit meinem Trainingsteam hart trainiert. Ich habe es geschafft sowohl in 2016 als auch 2017 der dritte Meister Tunesiens zu werden. Außerdem hilft das Cycling mir, meinen Stress abzubauen und meine Melancholie zu verbessern.</p>
                </div>
                <div class="hobbie-inner col-sm-6 wow bounceIn " data-wow-delay=".5s">
                <i class=" rounded-circle fa fa-camera fa-3x"></i>
                <h3 >Photography</h3>
                <p>Fotografie ist ein weiteres Hobby, das mir am Herzen liegt. Ich habe mich immer interessiere Bilder zu machen, um sie durch die Linse meiner Kamera in meinem Gedächtnis festzuhalten. Außerdem hat es mir geholfen, meine Kenntnisse in Design und Photoshop zu erlangen.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end  Hobbies-->

    <!-- Begin fähigkeiten -->
    <div class="fähigkeiten">
        <div class="container">
            <h1 class="text-center unterschrift wow bounceIn" data-wow-offset="180">Fähigkeiten</h1>
            <div class="fähigkeiten-inner">
                <div class="PSAI right wow bounceInLeft" data-wow-offset="200  ">
                                <div class="row">
                                    <div class="foto col-sm-4">
                                        <img  class="img-fluid" src="css/image/logo/AIPS.jpg" alt="PSAI" width="300" height="300">
                                    </div>
                                    <div class="text col-sm-8 text-left">
                                        <h3 class="righttext">Photoshop && Adobe Illustrator</h3>
                                        
                                        <p class="rightparag">Als ich Kind war, hatte ich Interesse  an Graphic Design, aufgrund dessen habe ich Adobe Photoshop und Adobe Illustrator allein gelernt sowie das Erstellen von Brochüre, Business  Card, ID Card Design ,Poste rund Business Flyer.</p>
                                    </div>
                                </div>
                </div>
                
                <div class="PRAE left wow bounceInRight" data-wow-offset="200  ">
                        <div class="row">
                            
                            <div class="text col-sm-8 text-left">
                                <h3 class="lefttext">Adobe Premier && Adobe After-effect</h3>
                                
                                <p class="leftparag">Außer meine grafische Fähigkeiten, habe ich auch einen guten Einblick über Animation und Videoproduktion und kann mit Adobe Primere und After-Effect ziemlich gut umgehen, was das Bearbeiten von Videos angeht.</p>
                            </div>
                            <div class="foto col-sm-4">
                                <img  class="img-fluid" src="css/image/logo/AEPR.jpg" alt="PRAE" width="300" height="300">
                            </div>
                        </div>
                </div>

                <div class="SQL right wow bounceInLeft" data-wow-offset="200  ">
                                <div class="row">
                                    <div class="foto col-sm-4">
                                        <img  class="img-fluid" src="css/image/logo/mysql.jpg" alt="SQL" width="300" height="300">
                                    </div>
                                    <div class="text col-sm-8 text-left">
                                        <h3 class="righttext">MySQL</h3>
                                        
                                        <p class="rightparag">MySQL ist eine der bekanntesten Web Datenbanken, die SQL-Standard- und relationale Datenbankverwaltungssysteme unterstützt. Ich kann sie durch die CMD-Befehle oder durch PHPmyadmin steuern.</p>
                                    </div>
                                </div>
                </div>
                <div class="PHP left wow bounceInRight" data-wow-offset="200  ">
                        <div class="row">
                            
                            <div class="text col-sm-8 text-left">
                                <h3 class="lefttext">PHP</h3>
                                
                                <p class="leftparag">PHP ist server-scripting-Sprache, mit der ich eine gute Erfahrung habe. Ich habe auch Erfahrung mit objektorientierter Programmierung in PHP, die für meinen Code mehr Sicherheit und Flexibilität gewährt.</p>
                            </div>
                            <div class="foto col-sm-4">
                                <img  class="img-fluid" src="css/image/logo/php.jpg" alt="PRAE" width="300" height="300">
                            </div>
                        </div>
                </div>
                <div class="Ajax right wow bounceInLeft" data-wow-offset="200  ">
                    <div class="row">
                        <div class="foto col-sm-4">
                            <img  class="img-fluid" src="css/image/logo/Ajax.jpg" alt="Ajax" width="300" height="300">
                        </div>
                        
                        <div class="text col-sm-8 text-left">
                            <h3 class="righttext">Ajax</h3>
                            
                            <p class="rightparag">AJAX ist eine Technologie die mehrere Technologien enthält. Es wird verwendet, um eine asynchrone Anfrage an die Serverseite zu senden und von dort einen Antwortvorschlag von der Webseite zu erhalten, ohne die Website aktualisiert werden zu müssen. </p>
                        </div>
                        
                    </div>
                </div>
                <div class="json left wow bounceInRight" data-wow-offset="200  ">
                    <div class="row">
                        
                        <div class="text col-sm-8 text-left">
                            <h3 class="lefttext">Json</h3>
                            
                            <p class="leftparag">Json ist ein Format für den Datenaustausch zwischen dem Server und dem Client, das tatsächlich aus JavaScript generiert wird. Ich habe es gelernt, weil es leicht zu bedienen und zu lesen ist und von den meisten Programmiersprachen und ITs Frameworks unterstützt werden. </p>
                        </div>
                        <div class="foto col-sm-4">
                            <img  class="img-fluid" src="css/image/logo/JSON.jpg" alt="js" width="300" height="300">
                        </div>
                    </div>
                </div>
                <div class="js right wow bounceInLeft" data-wow-offset="200  ">
                                <div class="row">
                                    <div class="foto col-sm-4">
                                        <img  class="img-fluid" src="css/image/logo/js.jpg" alt="js" width="300" height="300">
                                    </div>
                                    <div class="text col-sm-8 text-left">
                                        <h3 class="righttext">Javascript</h3>
                                        
                                        <p class="rightparag">Ich bin der Meinung, dass Javascript die Programmiersprache der Zukunft ist. Es wird heutzutage von Clients und Servern verwendet und bietet großartige Möglichkeiten für die objektorientierte Programmierung. </p>
                                    </div>
                                </div>
                </div>
                <div class="jquey left wow bounceInRight" data-wow-offset="200  ">
                    <div class="row">
                        
                        <div class="text col-sm-8 text-left">
                            <h3 class="lefttext">Jquery</h3>
                            
                            <p class="leftparag">Jquery ist mein bestes JavaScript-Framework, das umfangreiche und leistungsstarke Funktionen für die Navigation und Bearbeitung der DOM-Syntax bietet.</p>
                        </div>
                        <div class="foto col-sm-4">
                            <img  class="img-fluid" src="css/image/logo/JQUEY.jpg" alt="js" width="300" height="300">
                        </div>
                    </div>
                </div>
                
                <div class="html right wow bounceInLeft" data-wow-offset="200  ">
                                <div class="row">
                                    <div class="foto col-sm-4">
                                        <img  class="img-fluid" src="css/image/logo/htmlcss.jpg" alt="html" width="300" height="300">
                                    </div>
                                    <div class="text col-sm-8 text-left">
                                        <h3 class="righttext">HTML && CSS</h3>
                                        
                                        <p class="rightparag">HTML und CSS sind die ersten Web-Sprachen, die ich gelernt habe. Beide gaben mir die Begeisterung, mehr über Software und Word Wide Web zu lernen und mich in Zukunft auf Software-Engineering zu spezialisieren. </p>
                                    </div>
                                </div>
                </div>
                <div class="f# left wow bounceInRight" data-wow-offset="200  ">
                        <div class="row">
                            
                            <div class="text col-sm-8 text-left">
                                <h3 class="lefttext">Fsharp</h3>
                                
                                <p class="leftparag">Meine Erfahrung zeigt mir ,dass F# für .NET  eine von der besten praxisorientierte Programmiersprache. Sie ist voll Kompatibel und eine Open Source, was mehr Sicherheit und durchschaubarkeit zur Verfügung stellt. </p>
                            </div>
                            <div class="foto col-sm-4">
                                <img  class="img-fluid" src="css/image/logo/fsharp.jpg" alt="f#" width="300" height="300">
                            </div>
                        </div>
                </div>
                <div class="Python right wow bounceInLeft" data-wow-offset="200  ">
                                <div class="row">
                                    <div class="foto col-sm-4">
                                        <img  class="img-fluid" src="css/image/logo/Python.jpg" alt="html" width="300" height="300">
                                    </div>
                                    <div class="text col-sm-8 text-left">
                                        <h3 class="righttext">Python</h3>
                                        
                                        <p class="rightparag">Python ist eine meiner besten Programmiersprachen. Es ist eine leichte Sprache zu erlernen und wird zum Erstellen von Webanwendungen verwendet.</p>
                                    </div>
                                </div>
                </div>
                <div class="Pascal left wow bounceInRight" data-wow-offset="200  ">
                        <div class="row">
                            
                            <div class="text col-sm-8 text-left">
                                <h3 class="lefttext">Pascal</h3>
                                
                                <p class="leftparag">Pascal ist meine erste Programmiersprache, die ich gelernt habe. Ich habe es im Gymnasium gelernt und dank dieser Sprache habe ich die Logik und das Konzept der Programmierung verstanden. </p>
                            </div>
                            <div class="foto col-sm-4">
                                <img  class="img-fluid" src="css/image/logo/Pascal.jpg" alt="f#" width="300" height="300">
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end fähigkeiten -->

    <!-- begin Engagement style="width: 18rem;"-->
    <div class="engagement text-center">
        <div class="container">
            <h1 class="unterschrift wow bounceIn" data-wow-offset="180">Engagement</h1>
            <p class="text wow bounceIn" data-wow-delay=".5s">Meine Erfahrung hat mir gezeigt, dass das Engagement in Vereinen eine der wichtigsten Ergänzungen meiner Fähigkeiten und Kompetenzen ist. Deshalb war ich schon immer in sozialen und sportlichen Vereinen engagiert und möchte Ihnen von meinen Erfahrungen erzählen.</p>
            <div class="row">
                <div class="aiesec col-lg-3 col-sm-6">
                    <div class="first card wow bounceInDown"data-wow-delay=".5s" >
                        <div class=" card-body">
                            <h2 class="card-title">Soziales Engagement</h2>
                            <h6 class="card-subtitle mb-2 text-muted">01/2012-03/2020</h6>
                            <h5>AEISEC</h5>
                            <p class="card-text">Während des DSH-Kurses an der TUK habe ich mich mit AEISEC KL im Marketing-Team beschäftigt. Es war eine meiner besten Herausforderungen. Ich habe so viele Leute kennengelernt und meine Grafik Fähigkeiten verbessert. </p>
                            
                            <a href="https://www.aiesec.de/lcs/kaiserslautern" target="_blank" class="btn btn-primary">Mehr</a>
                        </div>
                    </div>
                </div>
                <div class="accpass col-lg-3 col-sm-6">
                    <div class="second card wow bounceInUp"data-wow-delay="1s" >
                        <div class="card-body">
                            <h2 class="card-title">Sportliches Engagement</h2>
                            <h6 class="card-subtitle mb-2 text-muted">03/2015-11/2019</h6>
                            <h5>ACCPASS</h5>
                            <p class="card-text">Ich kann Ihnen sagen, dass meine beste Herausforderung bei ACCPASS, eine Vereinigung von Rennradfahrern war. Ich hatte eine unvergessliche Zeit mit meinem Team, viel Spaß und wunderbare Erinnerungen.</p>
                            
                            <a href="https://www.facebook.com/FTC.VTT/" target="_blank" class="btn btn-primary">Mehr</a>
                        </div>
                    </div>
                </div>
                <div class="ihv col-lg-3 col-sm-6">
                    <div class=" first card wow bounceInDown"data-wow-delay="1.5s"  >
                        <div class="card-body">
                            <h2 class="card-title">Soziales Engagement</h2>
                            <h6 class="card-subtitle mb-2 text-muted">Momentan</h6>
                            <h5>IHV</h5>
                            <p class="card-text">Momentan bin ich im IHV KL (Islamische Hochschulvereinigung Kaiserslautern) aktiv. Dieser Verein umfasst viele Mitglieder verschiedener Nationalitäten. Deshalb habe ich so viele Menschen kennengelernt und andere Kulturen entdeckt.
                                </p>
                            
                            <a href="https://www.facebook.com/ihvkl/" target="_blank" class="btn btn-primary">Mehr</a>
                        </div>
                    </div>
                </div>
                <div class="triathlon col-lg-3 col-sm-6">
                    <div class=" second card wow bounceInUp"data-wow-delay="1.7s" >
                        <div class="card-body">
                            <h2 class="card-title">Sportliches Engagement</h2>
                            <h6 class="card-subtitle mb-2 text-muted">02/2019-11/2019</h6>
                            <h5>Triathlon Sfax</h5>
                            <p class="card-text">Triathlon ist eine der Schwierigste Sportarten, die ich probiert habe. Das ist eine Ausdauersportart, bestehend aus einem Mehrkampf der Disziplinen Schwimmen, Radfahren und Laufen, die nacheinander und in genau dieser Reihenfolge zu absolvieren sind.</p>
                            
                            <a href="https://www.facebook.com/Triathlonsfax/" target="_blank" class="btn btn-primary">Mehr</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Engagement-->

    <!--begin Contact-->
    
    <div class="contact">
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="text row">
                    <div class=" col-md-8 text-center text-md-left" >
                        <p >Do you like my website ?? Let's talk</p>
                    </div>
                    <div class="col-md-4 text-center text-md-right" >
                        
                    <input
                    class="send btn btn-danger wow tada" data-wow-iteration="10"
                    type="submit"
                    value="Contact me"/> 
                   <!-- <i class="fa fa-send fa fw send-i"></i>-->
                        
                         
                        
                        
                    </div>
                </div>
                <div class="theform">
                    
                        <div class="form-group">
                            
                            <input 
                                class="form-control user"
                                type="text"
                                name="besuchername" 
                                placeholder="Your Name"
                                value="<?php if (isset($user)){echo $user ;} ?>">
                            <small  class="error form-text text-muted"><?php if (isset($userErr)){echo $userErr;}?></small>
                            <small  class="valid form-text text-muted"><?php if (isset($userValid)){echo $userValid;}?></small>
                        </div>
                        <div class="form-group">
                            
                            <input 
                                class="form-control mail" 
                                type="email"
                                id="Email1"
                                value="<?php if (isset($mail)){echo $mail ;} ?>"
                                name="email"
                                placeholder="Your Email">
                                <small  class="error form-text text-muted"><?php if (isset($emailErr)){echo $emailErr;}?></small>
                                <small  class="valid form-text text-muted"><?php if (isset($emailValid)){echo $emailValid;}?></small>
                        </div>
                    

                        <div class="form-group">
                            
                            <textarea 
                            class="form-control msg"
                            type="text" 
                            rows="3" 
                            name="message" 
                            
                            placeholder="Your Messaget"></textarea>
                            <small class="error form-text text-muted"><?php if (isset($msgErr)){echo $msgErr;}?></small>
                            <small class="valid form-text text-muted"><?php if (isset($msgValid)){echo $msgErr;}?></small>
                        </div>
                        
                    
                </div>
            </form>
        </div>
        
    </div>

    <!--end Contact-->
    <!--begin cotpright-->
    <div class="copy text-center">
        <div class="container">
            <div class="copytext text-uppercase"> Copyright 2021 Yassine Portfoli &copy; All Right Reserved</div>
        </div>
    </div>
    <!-- end cotpright-->





    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
  
              
    
    
</body>
</html>
