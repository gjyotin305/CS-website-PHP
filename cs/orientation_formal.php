<?php
include 'head.html';
?>

<head>
    <title>Formal Orientation</title>
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

                <div class="row flex-center nav-justified">
                    <ul id="gallery-nav" class="nav nav-tabs col tabs-4 blue darken-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">UG Orientation</a>
                        </li>
                    </ul>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                    <!-- Letter to Your Future Self -->
                    </h3>
                    <!-- <div style="height:100px"></div> -->

                    <div style="text-align: left;">
                        <p>The formal orientation program conducted by the Student Welfare Committee and dedicated counselors at IIT Jodhpur for the incoming batch of first-year undergraduate students was an invaluable experience. It was a meticulously planned event that aimed to provide students with essential information about academic procedures, campus resources, and various support services available to them. Through interactive sessions and presentations, the students were guided on how to navigate the academic challenges of their chosen disciplines while also being encouraged to explore extracurricular opportunities. Furthermore, the counseling sessions helped students to adapt to the rigors of college life and provided them with a platform to address any concerns or questions they may have had. This orientation not only equipped the newcomers with the tools necessary for a successful academic journey but also fostered a sense of belonging and confidence among them, setting a strong foundation for their years ahead at IIT Jodhpur.</p>
</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                            <?php
                                $dir = './images2/formal_UG/';
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



                <div style="height:100px"></div>

                <div class="row flex-center nav-justified">
                    <ul id="gallery-nav" class="nav nav-tabs col tabs-4 blue darken-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">PG Orientation</a>
                        </li>
                    </ul>
                    <!--pginfo-->

                    <!--Panel 1-->
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        <!-- Underneath the Stars -->
                    </h3>
                    <!-- <div style="height:100px"></div> -->

                    <div style="text-align: left;">
                        <p>The Student Welfare Committee at IIT Jodhpur, in collaboration with experienced counselors, recently conducted a comprehensive formal orientation program tailored specifically for first-year postgraduate and research students. This event served as a crucial introduction to the academic and social aspects of life at the institution. The orientation covered a wide array of topics, including academic resources, research opportunities, campus facilities, and student support services. Moreover, the counselors provided valuable insights into managing the challenges of higher education, emphasizing the importance of work-life balance and mental well-being. This orientation not only equipped the incoming students with essential information but also fostered a sense of belonging, assuring them that they have a dedicated support system at IIT Jodhpur to guide them through their academic journey.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/fomal_PG/';
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


