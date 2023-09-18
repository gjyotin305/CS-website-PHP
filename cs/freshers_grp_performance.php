<?php
include 'head.html';
?>

<head>
    <title>Events</title>
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
                            <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">UG Events</a>
                        </li>
                    </ul>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                    Letter to Your Future Self
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>The letter-to-future-self event organized by the SWC proved to be an enriching and thought-provoking experience for the IIT Junta. The act of writing a letter to one's future is self-served as a powerful tool for self-reflection and goal setting. Students actively engaged in the process, utilizing the postcards distributed and dropboxes set up at three different locations. The event provided a unique opportunity for students to connect with their future selves, gaining insights into their aspirations and values. Participants reported feeling inspired and motivated to work towards their goals, having gained a newfound clarity on their personal and professional trajectories. Overall, the letter-to-future-self event was a resounding success, leaving a lasting impact on the IIT community.

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                            <?php
                                $dir = './images2/letter_to_future_self_2023/';
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
                    Gratitude day
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>The event organized by SWC proved to be an excellent opportunity 
                            for students to express gratitude towards their peers, mentors, and seniors. 
                            The postcard activity fostered a sense of appreciation and belonging amongst 
                            the attendees, and the evening was filled with fun and laughter. The poetry and
                             open mic session allowed students to showcase their talents and creativity, and
                              it was heartwarming to see everyone support and encourage each other. 

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                            <?php
                                $dir = './images2/gratitude_day_2023/';
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

               <!-- <div class="row flex-center mt-4">
                    <h3>
                    Freshanza
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
                </div>-->
                
                <div class="row flex-center mt-4">
                    <h3>
                    Farewell of UG team
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Farewell was given to the students who were a part of 
                            the Student Wellbeing Team. The team members were recognized for their contributions and 
                            hard work and were given certificates as a token of appreciation. During the farewell, they were 
                            thanked for their dedication and commitment to promoting a culture of well-being within the student
                             community. The students' efforts in organizing various events and initiatives that aimed to foster a 
                             supportive environment for their peers were applauded. The farewell was a heartfelt way of expressing
                              gratitude and acknowledging the significant impact that the team members had on the student body.

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                    Open-Air Theatre
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>The Student Welfare Committee (SWC) organized a movie screening of "3 Idiots" 
                            to celebrate Happiness Day, providing a platform for students to spend quality 
                            time with their peers. The event also served as a unique way for students to 
                            celebrate Holi, the festival of colors. The students enjoyed the evening with laughter 
                            and amusement, making the SWC feel like a "home away from home." Overall, the event was
                             a success, providing a fun-filled experience for all who attended.

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                            <?php
                                $dir = './images2/open_air_theatre2023/';
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
                    Cycling Event
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>The Student Welfare Committee at IIT Jodhpur recently organized a thrilling cycle event for the first-year students that left everyone pedaling with excitement. This event was a wonderful opportunity for the newcomers to not only explore the picturesque campus but also to foster a sense of community and camaraderie among themselves. The event featured a scenic route through the campus, allowing the participants to appreciate the natural beauty of the surroundings while also testing their cycling skills. It was heartwarming to witness the enthusiasm and energy of the first-year students as they embarked on this adventure, making new friends and creating lasting memories. The cycle event organized by the Student Welfare Committee at IIT Jodhpur was not just about physical activity but also about building connections and a sense of belonging for the incoming batch of students.

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                            <?php
                                $dir = './images2/cycling/';
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
                            <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">PG Events</a>
                        </li>
                    </ul>
                    <!--pginfo-->

                    <!--Panel 1-->
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        Underneath the Stars
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>This event was conducted to celebrate Happiness Day, for which a movie screening was done
                            and the movie screened was “Chhichhore”. The message of the movie was to focus on your
                            efforts and work each day to excel your skills or talent. It also focused on the journey
                            through
                            which you learn multiple things rather than just focusing on the success of the
                            destination.
                            It
                            was
                            the IITJ’s first ever Open-air Movie Screening.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/open_air/';
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
                        Gratitude Day
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Postcards were distributed to students to express their gratitude to each other and
                            cherish
                            the happy
                            moments they had at the campus. Evening was followed with fun and laughter by
                            reminiscing
                            the
                            memories and appreciating each other.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        Dusshera Celebration 'Good over Evil'
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>A bonfire to remember the victory of good over evil. Students gathered to share their
                            ideas
                            and stories to
                            initiate conversations. It was an evening full of laughter and storytelling about their
                            deeds to achieve or to
                            get their tasks done in life.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/dusshera/';
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


