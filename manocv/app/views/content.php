<?php
    require __DIR__ . '/../src/app.php';
?>
<body>
<div class="container">
    <div class="left_Side">
        <div class="profileText">
            <div class="imgBx">
                <img src="../app/images/torsas.jpg">
            </div>
            <h2>Ernest Ekhardt <br><span>Web Developer Junior(full-stack)</span></h2>
        </div>
        <div class="contactInfo">
            <h3 class="title">Contact Info</h3>
            <ul>
                <li>
                        <span class="icon"><i class="fa-solid fa-phone"></i></span>
                        <span class="text"><a href="tel:+37065270952">+37065270952</a></span>
                </li>
                <li>
                        <span class="icon"><i class="fa-solid fa-envelope"></i> </span>
                        <span class="text"><a href="ernest.ekhadt@inbox.lt">ernest.ekhadt@inbox.lt</a></span>
                </li>
                <li>
                        <span class="icon"><i class="fa-solid fa-globe"></i></span>
                        <span class="text"><a href="https://www.ernestocv.lt">www.ernestocv.lt</a></span>
                </li>
                
                <li>
                        <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                        <span class="text"><a href="https://www.google.com/maps/place/Vilnius/@54.7003614,24.972858,10z/data=!3m1!4b1!4m5!3m4!1s0x46dd93fb5c6408f5:0x400d18c70e9dc40!8m2!3d54.6871555!4d25.2796514"> Vilnius,Lithuania</a></span>
                </li>
                <li>
                    <span class="icon"><i class="fa-brands fa-linkedin-in"></i></i></span>
                    <span class="text"> <a href="https://www.linkedin.com">www.linkedin.com/me</a></span>
            </li>
            </ul>
        </div>
        <div class="contactInfo education">
            <h3 class="title">Education</h3>
            <ul>
                <li>
                    <h5>2009 - 2012</h5>
                    <h4> Bakalauro laipsnis 'Dietistas'</h4>
                    <h4> Vilniaus Kolegija</h4>
                </li>
                <li>
                    <h5>2010 - 2011</h5>
                    <h4> Klasikinio masažo pagrindai 'Masažistas'</h4>
                    <h4> Masažo Namai Vilnius</h4>
                </li> 
                <li>
                    <h5>2021</h5>
                    <h4> WEB KŪRIMO (FULL-STACK) 'Programuotojas'</h4>
                    <h4>vilnius coding school </h4>
                </li>
            </ul>
        </div>
        <div class="contactInfo lang">
            <h3 class="title">Languages</h3>
            <ul>
                <li>
                   <span class="text">English</span>
                   <span class="percent">
                   <div style="width: 80%;"></div></span>
                </li>
          </ul> 
            <ul>
            <li>
               <span class="text">Lithuanian</span>
               <span class="percent">
               <div style="width: 100%;"></div></span>
            </li>
            </ul>
            <ul>
                <li>
                   <span class="text">Polish</span>
                   <span class="percent">
                   <div style="width: 60%;"></div></span>
                </li>
                </ul>
                <ul>
                    <li>
                       <span class="text">Russian</span>
                       <span class="percent">
                       <div style="width: 90%;"></div></span>
                    </li>
                    </ul>
        </div>    
        <div class="contact-box">
            <h2>Contact Me</h2>
            <form id="contact" action="<?php $_PHP_SELF;?>" method="post">
                <p><input type="text" name="vardas" placeholder="Jūsų vardas" required autofocus></p>
                <p><input type="email" name="email" placeholder="Jūsų el. pašto adresas" required></p>
                <p><textarea placeholder="Jūsų žinutė..." name="message" required></textarea></p>
                <p><button name="submit" type="submit" id="contact-submit">Siųsti</button></p>
            </form> 
        </div> 
    
    </div>

    <div class="right_Side">
        <div class="about">
            <h2 class="title2">Profile</h2>
            <h4>(Tekstas LT) <br>
                Esu draugiškas, kruopštus, laisvai bendraujantis, atsakingas, sąžiningas,
                greitai įprantantis prie naujos aplinkos, naujo darbo, greitos orientacijos, siekiu savo tikslų, stengiuosi tobulėti.
                Taip ir atsitiko šias 2021 metais, nusprendžiau persikvalifikuoti ir įgauti naujas žinias, bei naują profesiją IT srityje. 
                Kaip "paprastas" pavyzdys, šitas CV puslapis yra pilnai mano sukurtas. Šitą projektą realizuoti man padėjo 
                "Vilnius coding-school" bei socialinės medijos "https://animate.style/,https://animate.style/,https://getbootstrap.com/ ir t.t."
                <br> Pomėgiai:animuoti puslapio apačioje.
                </h4>
            <br>
            <h4>(Text EN) <br>
                I am friendly, careful, communicative, responsible, honest,
                getting used to a new environment and new job, a quick orientation, pursuing my goals, trying to improve.
                That's what happened in 2021, I decided to retrain and gain new knowledge, and a new profession in the field of IT.
                As a “simple” example, this page on the resume was completely created by me personally. This project helped me to realize 
                "Vilnius coding-school" and social media "https://animate.style/,https://animate.style/,https://getbootstrap.com/ and so on."
                <br> Hobbies: Animate at the bottom of the page.
            </h4>
            
        </div>
        <div class="about">
            <h2 class="title2">Experience</h2>
           
            <div class="box">
                <div class="year_company">
                    <h5>2012.03 - 2013.09</h5>
                    <h5>UAB"senukai"</h5>
                </div>
                <div class="text">
                    <h5>Vyr konsultantas</h5>
                    <h4>Profesional Goals: ability to communicate</h4>
                </div>
            </div>
            <div class="box">
                <div class="year_company">
                    <h5>2013.09 - 2016.11</h5>
                    <h5>"Sadolin centras"</h5>
                </div>
                <div class="text">
                    <h5> Vadybinikas-pardavėjas</h5>
                    <h4>Profesional Goals:management ability</h4>
                </div>
            </div>
            <div class="box">
                <div class="year_company">
                    <h5>2017 - 2019</h5>
                    <h5>UAB"omni grupe"</h5>
                </div>
                <div class="text">
                    <h5> Pardavimu vadovas</h5>
                    <h4>Profesional Goals: team leadership</h4>
                </div>   
                </div>
                <div class="box">
                    <div class="year_company">
                        <h5>2019 - Present</h5>
                        <h5>UAB"videta"</h5>
                    </div>
                    <div class="text">
                        <h5>Miltelinio dažymo operatorius</h5>
                        <h4>Profesional Goals: computer operation sistems</h4>
                    </div>
                </div>
            </div>
            <div class="skills">
            <h2 class="title2">Profesional Skills</h2>
                <li>
                    <h3>HTML5</h3>
                    <span class="bar">
                    <span class="html"></span></span>
                </li>
                <li>
                    <h3>CSS3</h3>
                    <span class="bar">
                    <span class="css"></span></span>
                </li>
                <li>
                    <h3>JQUERY</h3>
                    <span class="bar">
                    <span class="jquery"></span></span>
                </li>
                <li>
                    <h3>JAVASCRIPT</h3>
                    <span class="bar">
                    <span class="javascript"></span></span>
                </li>
                <li>
                    <h3>PHOTOSHOP</h3>
                    <span class="bar">
                    <span class="photoshop"></span></span>
                </li>
                <li>
                    <h3>PHP</h3>
                    <span class="bar">
                    <span class="php"></span></span>
                </li>
            
            </div>
            <div class="about interest">
                <h2 class="title2">Interest</h2>
                <ul>
                    <li><i class="fa-brands fa-bitcoin"></i>Cripto World</li>
                    <li><i class="fa-solid fa-gun"></i>Hunting</li>
                    <li><i class="fa-solid fa-fish"></i></i>Fishing</li>
                    <li><i class="fa-solid fa-gamepad"></i>Gaming</li>
                </ul>
            </div>
            <div class="iframe-contaner">
            <h2 class="title2">Come to vizit my YouTube Channel</h2><br><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_mX5ONP_Ibo" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
            </div>
    </div>
            <footer>
                <a href="#" class="btn-top">Go UP</a>
            </footer>
        </div>
    </div>
</div>
<script src="../app/css/js/jquery.min.js"></script>
    <script src="../app/css/js/manojq.js"></script>