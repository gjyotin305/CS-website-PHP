<?php
include 'head.html';
?>

<head>
    <title>Freshanza</title>
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

            <div class="navbar-margin"></div>
            <div class="divider-new" style="margin-bottom: 10px;">
                <h2 class="h2-responsive" style="text-align: center;">Freshanza<p style="font-size: 18px;"></p>
                </h2>
            </div>

            <div class="row flex-center mt-4">
                            <h3>
                            Freshanza 2023
                            </h3>
                            <div style="height:100px"></div>

                            <div style="text-align: left;">
                                <p>Freshenza 2023 at IIT Jodhpur promises to be a vibrant and exciting event, where new students are welcomed with open arms to the campus. This annual extravaganza is a fantastic opportunity for freshers to explore their interests, make new friends, and immerse themselves in a diverse range of activities. From engaging workshops and cultural performances to thrilling sports competitions and informative seminars, Freshenza 2023 is sure to set the stage for an unforgettable journey through their college life. It's a time for students to create lasting memories and embrace the vibrant spirit of IIT Jodhpur.
        </div>

                            <div style="height:50px"></div>
                        </div>
                        <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                            <div class="col-md-12">
                                <div class="mdb-lightbox">
                                    <div class="row flex-center">
                                    <?php
                                        $dir = './images2/freshenza2023/';
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
                     </div>
            <div class="row flex-center mt-4">
                            <h3>
                            Freshanza 2022
                            </h3>
                            <div style="height:100px"></div>

                            <div style="text-align: left;">
                                <p>The Fresher's event organized by the UG team provided a great opportunity for the new 
                                    batches to showcase their talent and get to know each other in a better way. The event 
                                    was marked by various competitions, including dance, music, and drama, where the students
                                    actively participated and displayed their creative abilities. The students had an enjoyable
                                    and enriching experience, as they got to interact with their peers and learn more about the
                                    college culture. The event was a grand success, and it helped in creating a positive and 
                                    inclusive environment for the new students.
        </div>

                            <div style="height:50px"></div>
                        </div>
                        <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                            <div class="col-md-12">
                                <div class="mdb-lightbox">
                                    <div class="row flex-center">
                                    <?php
                                        $dir = './images2/freshenza_2023/';
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
                     </div>

                     <div class="row flex-center mt-4">
                    <h3>
                        Freshanza 2021
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Fresher’s organized by the UG team for the new batches. Students did organize various
                            competitions where the talent of new batches can be showcased. A virtual evening filled with
                            poetry, dance, music, laughter and lots of fun.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/freshenza22/';
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

                </div>
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
