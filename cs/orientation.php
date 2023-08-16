<?php
include 'head.html';
?>

<head>
    <title>Orientation</title>
</head>

<body>
    <!--Navbar-->
    <?php
    include 'navbar.html';
    ?>
    <script>
        document.getElementById('nav-8').classList.add('active');
        document.getElementById('nav-8-1').classList.add('active');
        document.getElementById('nav-8').children[0].innerHTML += '<span class="sr-only">(current)</span>';
    </script>
    <div class="top-fixer-2"></div>
    <!--Section: Team v.1-->
    <section class="section team-section container">
        <div id="section-2">
            <div class="container text-center pt-1 mb-1">
<!-- 
                <div class="row flex-center nav-justified">
                    <ul id="gallery-nav" class="nav nav-tabs col tabs-4 blue darken-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">Informal Orientation</a>
                        </li>
                    </ul>
                </div> -->

                <div class="row flex-center mt-4">
                    <!-- <h2>
                    Informal Orientation
                    </h2> -->
                    <div style="height:50px"></div>
                    <div style="height:50px"></div>

                    <div style="text-align: left;">
                        <p>The informal freshers' orientation at IIT Jodhpur is a vibrant and exhilarating event that welcomes new students into the institute's dynamic fold. Brimming with energy and camaraderie, the orientation is a blend of fun and information, fostering connections and easing the transition to college life. Amid the majestic backdrop of Jodhpur's landscape, the event is marked by ice-breaking games, interactive sessions, and cultural showcases. Seniors and faculty share insights, advice, and campus know-how, nurturing a sense of belonging among the newcomers. With an informal approach, the orientation encourages open discussions, enabling students to clarify doubts and discover the array of opportunities awaiting them. The event also ignites a spirit of creativity, as students engage in talent exhibitions, performances, and collaborative projects. This memorable experience not only equips freshers with practical knowledge but also kickstarts their journey at IIT Jodhpur with excitement and zeal.</p>

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/orientation_2023_intro/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                    1.Treasure Hunt
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>During the exhilarating treasure hunt, IIT Jodhpur's freshers forged new connections. Collaborating in teams, they navigated challenges, unraveling clues and sharing laughter. These interactions fostered bonds, uniting diverse minds in a common quest. Friendships formed in the thrill of the hunt promise lasting camaraderie throughout their college journey.</p>

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/treasure_hunt_2023/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row flex-center mt-4">
                    <h3>
                    2.Open Mic
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>The open mic event at IIT Jodhpur's freshers' orientation was a tapestry of talents. From soul-stirring melodies to thought-provoking poetry and stand-up comedy that ignited laughter, the stage radiated creativity. Freshers fearlessly showcased their diverse skills, leaving the audience spellbound. This vibrant display not only celebrated individuality but also cemented a sense of unity among the newcomers, setting the stage for an enriching college experience.</p>

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/open_mic_2023/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                    3. Movie Trivia
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Movie trivia night stirred an electric atmosphere among IIT Jodhpur's freshers. As silver screen aficionados, they engaged in spirited debates, recalling iconic dialogues, characters, and plots. Laughter resonated amidst friendly rivalries, as teams tested their cinematic knowledge. The event not only celebrated their shared love for movies but also sparked connections as they bonded over favorite films. The night's excitement solidified friendships and set the tone for an unforgettable college journey.</p>

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/movie_trivia_2023/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                    4.Pictionary 
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Pictionary night at IIT Jodhpur was a riot of joy for freshers. Through quick sketches and hilarious guesses, they unleashed their imagination and camaraderie. Laughter echoed as doodles turned into clues and guesses transformed into wins. The game's spontaneity and collaborative spirit created an unforgettable bonding experience. In the strokes of a pencil, friendships deepened, and barriers melted away, painting an exciting start to their journey through college life.</p>

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <!-- <div class="row flex-center">
                                <?php
                                $dir = './images2/team_farewell_2023/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                    5.Comicstaan
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>The "Sawaal Pe Sawaal/Comicstaan" game, a hit among IIT Jodhpur's freshers, is a unique twist on communication. Players can only ask and answer with questions, fostering quick thinking and creativity. Laughter abounds as participants craft puzzling inquiries and navigate witty retorts. This playful challenge not only hones communication skills but also creates an engaging and lighthearted atmosphere, making it a favorite among freshers seeking to break the ice and form connections in a fun and interactive way.</p> 

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/comicstan_2023/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="height:50px"></div>
<!-- 
                <div class="row flex-center nav-justified">
                    <ul id="gallery-nav" class="nav nav-tabs col tabs-4 blue darken-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">Formal Orientation</a>
                        </li>
                    </ul>
                </div> -->

    </section>


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/compiled.min.js"></script>

    <script type="text/javascript" src="js/lazysizes.min.js"></script>
    <!--Footer-->
    <?php
    include 'footer.html';
    ?>