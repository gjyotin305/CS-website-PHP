<?php
include 'head.html';
?>

<head>
    <title>Gallery</title>
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
                            <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">UG Acitvities</a>
                        </li>
                    </ul>
                </div>

                <!--<div class="row flex-center mt-4">
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
                </div>-->

                <div class="row flex-center mt-4">
                    <h3>
                    World Suicide Prevention Day
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>On World Suicide Prevention Day, the dedicated counselors at IIT Jodhpur took a proactive stance in addressing the mental health challenges faced by undergraduate (UG) and postgraduate (PG) students on campus. They organized a unique and impactful activity aimed at raising awareness and promoting empathy among the student community. Through powerful enactments and role plays, the counselors vividly portrayed various mental health issues commonly encountered by students, shedding light on the struggles and emotions that often remain hidden. This activity allowed students to step into the shoes of those grappling with mental health challenges, fostering understanding and compassion. It not only highlighted the importance of seeking help when needed but also emphasized the significance of a supportive and stigma-free environment. The event was a significant step in breaking down the barriers surrounding mental health conversations and promoting a culture of well-being within the IIT Jodhpur community.</p>

                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/suicide_prevention_day/';
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
                    Harmony on Campus: Striking the College Life Balance, 11 August 2023
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Extending the informal orientation initiative, a seminar named " Harmony on Campus: Striking the College Life Balance" was organised. This seminar aimed to address the various difficulties encountered when transitioning through different phases of college life. Mr Akash Vishwakarma (Clinical Psychologist) shared six pivotal concepts for attendees to retain and apply. The Undergraduate (UG) team ensured the event's seamless coordination. Enthusiastic UG students actively engaged in the seminar and displayed their involvement throughout the session. The seminar spanned 60 minutes and culminated with an interactive Question and Answer segment, allowing participants to seek clarification and additional insights. Some stayed back to appreciate the points raised during the session.
</p>

                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/harmony_on_campus/';
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
                    Why/Which Relationships Matter? Personal and Professional, 10 August 2023
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Upon entering a residential campus, for some this being the first time away from home, there are certain challenges and questions regarding which relationships to form, healthy and unhealthy connections, and reaching mutual understanding. This Orientation attempted to address some of these common concerns regarding both personal and professional relationships.
Ms. Anannya opened the session by asking about significant relationships in the participants’ lives, and inviting them to share their experiences. Some case vignettes served as prompts for the audience’s responses. Further to this, Dr. Anjali led the students into a letter-writing exercise to reflect upon a significant relationship in the life of each. After debriefing about this exercise, the participants were encouraged to reflect upon some other important but non-human connections as well. 

</p>

                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/relationshipmatters/';
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
 Communication Etiquette, 07 August 2023

                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>With UG students transitioning from school to a residential campus, many are experiencing independent living away from home for the first time and facing challenges around the same. Facilitated by Ms.Anannya Sharma and Ms.Nabeelah Siddiqui, an engaging session on “Communication Etiquettes was conducted as a part of the UG orientation program.
The session began by inviting students to share their initial understanding of communication etiquettes. Real-life scenarios, presented through case vignettes, prompted students to think critically about appropriate behavior and communication in various settings. The session emphasized the differentiation between personal and campus life communication, with a significant focus on email etiquette.The aim was to equip them with ways to communicate effectively with peers, faculty, and staff while fostering professionalism and decorum within the campus community.

</p>

                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/communicationettiq/';
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
 Engaging With Elegance, 08 August 2023
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>An interactive session titled "Engaging with Elegance" was conducted on 8th August,2023 as a part of the PG orientation program for students at IIT jodhpur. The session was aimed at fostering a deeper understanding of communication dynamics, within the residential campus environment and beyond. 
Facilitated by Ms. Nabeelah Siddiqui and Ms. Anjana Sunil, the session seamlessly integrated interactive role plays and engaging activities to talk about communication etiquettes in the campus. Discussions were centered on vital aspects such as body language, feedback exchange, assertiveness, e-mail etiquettes, respecting the staff (teaching & non-teaching), and stimulating positive interactions within the campus community. Students were curious and took initiative as they shared their challenges and discussed effective strategies for the same. By creating an environment of active participation and learning through fun, the session not only equipped students with valuable skills but also promoted a supportive atmosphere, enabling them to express themselves confidently and navigate various social scenarios with finesse.
</p>

                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/engagewithelegance/';
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
 Campus Life Challenges & Healthy Boundaries, 29 July 2023
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Post the official orientation of the newly joined PG and PhD students on 26th July 2023, this was the first formal event organized by the SWC.  The session was conducted by Ms. Anannya Sharma & Ms. Anjana Sunil with insightful inputs from Dr. Anjali and the entire counselling team. The event was ably supported by the PG Students Team. Through this session, the wellbeing  team was able to hold a safe space for the students to open up about the challenges and concerns that they are facing in the campus, and also guide them with the possible ways to overcome those challenges. 
The session was quite interactive and lively. Students were able to connect and relate with each other’s experiences. Different case vignettes of the possible campus life challenges were presented to the students in the form of a game which were followed by some fun discussions.
</p>

                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/campuslife/';
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
                    Meditation with Music
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>The students who attended the meditation and sound therapy event organized by SWC had a deeply relaxing and rejuvenating experience. The SAVAMSM team's various healing techniques and meditation types helped the students to release their stress and anxiety, leaving them feeling refreshed and energized. Overall, the event was well-received by the students and served as a helpful tool for their mental well-being.

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/meditation_with_music2023/';
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
                    World Mental Health Day
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>The World Mental Health Day event organized by the SWC provided an excellent opportunity for IITJ students to break the stigma related to mental health. Students were asked to pass on the Green Ribbon to other members as a symbol of support and awareness. This initiative encouraged students to start a dialogue regarding mental health and illness, and share their warm and kind words. It was heartening to see the students filling up blank sheets with messages of hope, support, and encouragement. The event was successful in creating a safe and supportive environment for students to express their thoughts and feelings regarding mental health, and it was an important step toward promoting mental well-being on campus.

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/mental_health_2023/';
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
                    Burn your own Ravana
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>The event organized by the SWC proved to be a cathartic experience for the students, as it gave them a platform to share their stressors and negative experiences. The symbolic activity of burning the negative energies inside of us helped them collectively incinerate all the unpleasant experiences, leaving them feeling lighter and more positive. The venue, Ground Front of LHC, provided a conducive environment for the students to come together and support each other through their struggles. Overall, the event was a success in helping the students deal with their emotional baggage and promoting a sense of community and healing.

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/burn_your_ravan_2023/';
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

                <!--<div class="row flex-center mt-4">
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
                </div>-->

               <!-- <div class="row flex-center mt-4">
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
                </div>-->

                <!--<div class="row flex-center mt-4">
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

                <!--<div class="row flex-center mt-4">
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
                </div>-->


                <div class="row flex-center mt-4">
                    <h3>
                    Balancing Acts: Conquering College Challenges and Mastering Time
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>In a captivating session titled "Balancing Acts: Conquering College Challenges and Mastering Time," 
                            a group of undergraduate students came together to address the crucial topic of time management in 
                            their college lives. With enthusiasm and candor, the students shared their experiences, highlighting 
                            the struggles they faced in achieving academic excellence while pursuing their other life goals.This 
                            session aimed to shed light on these challenges and equip students with practical strategies to thrive 
                            in their academic journey, while staying true to their broader aspirations.</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/balancing_arts2023/';
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
                    CELEBRATION OF INTERNATIONAL DAY OF YOGA (2023) IN PHC, IIT-J
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>To commemorate the International Day of Yoga (21st June 2023), a spontaneous Yog activity was demonstrated by Mr Akash Vishwakarma. A short yoga protocol “Yoga Break @Workplace” module was taken, which is developed by Dr. Ishwar V Basavaraddi (Director, Morarji Desai National Institute of Yoga, New Delhi) and others. The activity which was used in this was 1- Tadasana & Urdhva-hasttotanasana, 2- Uttana-Mandukasana, Shoulder Rotation, 3- Kati Chakrasana.
                             The activity took place in PHC waiting Hall, and all the PHC staff actively participated.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/yoga_day_2023/';
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
                    RECLAIMING LIFE: CONFRONTING DRUG ABUSE
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>As directed by the Ministry of Education to organize various events during "Nasha Mukt Bharat Pakhwada", the Counseling Team, under the Student Wellbeing Committee of IIT Jodhpur conducted a Webinar to promote awareness about drugs and their related impact on the body, mind and overall social lifestyle. </p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/reclaiming_life/';
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


<!-- new website above this comment -->

               <!-- <div class="row flex-center mt-4">
                    <h3>
                        Freshanza
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

                <div class="row flex-center mt-4">
                    <h3>
                        Gratitude day and Happiness day
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>An evening full of fun and laughter. Students wrote messages of gratitude for their
                            classmates,
                            friends, seniors, mentors, and others. Postcards were given to students, where they
                            expressed
                            their gratitude. The evening was followed up by a poetry and open mic to showcase their
                            talent.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/gratitude22/';
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
                        Connecto Patronum
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>An event which utilized the unique architecture of AirMeet. In an Airmeet, there are many
                            tables
                            (breakout rooms) and anyone can join any table to have a conversation with the people
                            already
                            sitting at the table. This is to promote conversations and encourage students to talk about
                            their
                            problems, interests and their lives with their peers. An initiative to encourage students to
                            make
                            interactions with others by helping them to share more and work on their growth.</p>
                    </div>

                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        Interactive sessions with UG team and new students
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Interactive sessions were organized to discuss the experiences or challenges faced by the
                            students. A discussion to help each other and come up with the solutions to overcome
                            challenges.</p>
                    </div>

                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        Building Meaningful Relationships During College Life
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Workshop and orientation was organized by YourDost to introduce students with the platform
                            and how
                            accessible it can be in their daily lives. Speaking to a counselor and seeking out
                            professional help by
                            sitting in the comfort of their room. YourDost platform is providing professional help to
                            students via text
                            messages, video calling or voice calling. Students can sign-up at the portal at any time of
                            their
                            requirement and access the facility.</p>
                        <p>During the second day of their orientation, Ms. Jyotsna Sodhi, Counseling Psychologist,
                            YourDost was
                            present throughout the day. She took a workshop on maintaining meaningful relationships, she
                            spoke
                            about setting the tone and staying aware about the red flags while being part of the
                            relationship. Later,
                            she was available for the individual counseling sessions. Students did sign up for the
                            individual sessions
                            with her.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/session/';
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
                        CommuniFun: Cracking the Code of Engaging Communication
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>In the interactive meeting with the students titled "CommuniFun," students enthusiastically
                            participated and shared their challenges when it comes to initiating conversations with
                            colleagues or effectively expressing their emotions on specific topics. The session aimed to
                            provide practical solutions and enhance their communication skills. To make the learning
                            experience enjoyable, various fun games were incorporated, enabling students to grasp the
                            fundamental concepts of effective communication. By fostering a supportive and engaging
                            environment, participants gained valuable insights into overcoming communication barriers
                            and
                            expressing themselves confidently</p>

                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/CommuniFun/';
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
                            <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">PG Acitvities</a>
                        </li>
                    </ul>
                    <!--pginfo-->

                    <!--Panel 1-->
                </div>

                
                <div class="row flex-center mt-4">
                    <h3>
                    PG Orientation 2023
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>The PG Orientation program organized by the SWC PG team at IIT Jodhpur was a great opportunity for the newly admitted students to understand the culture and growth prospects offered by the institution. The program included briefings on various opportunities, rules, responsibilities, and the system's hierarchy, providing students with valuable insights into how the institution operates. The event featured introductory talks by Deans of various verticals, which helped students to understand the various avenues available to them for growth and development. Held in the Seminar Hall of the CSE Department, the program was a great success in ensuring that the newly admitted students were well-informed and prepared to take on the challenges and opportunities that awaited them at IIT Jodhpur.

</div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/PG_orientation_2023/';
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
                    INTERACTIVE EVENT FOR Ph.D. STUDENTS
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Balancing research, coursework and personal commitments in the lives of graduate students is no easy task. Since the Ph.D. journey can, at times, feel lonely, they need to be reassured about the available support. Recognizing this need, the Counselling Team from IIT Jodhpur conducted an interactive session with Ph.D students, titled, “Lose your mind and come to your senses.” It was conducted by the Institute Counsellors (Dr. Anjali Bhatia and Mr. Akash Vishwakarma) and Wellbeing Moderator (Ms. Anannya Sharma).</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/interactive_session_phd/';
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

                <!--<div class="row flex-center mt-4">
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
                </div>-->

                <div class="row flex-center mt-4">
                    <h3>
                        Importance of Mental Wellbeing during the Pandemic
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>The session was organized virtually to help students to deal with the ongoing stress for
                            dealing with
                            uncertain life situations. Agenda of the webinar was to focus on the mental, physical
                            and
                            emotional
                            well-being of the students. Tools were provided which they can use in their daily
                            routine
                            for a healthier
                            and happier lifestyle.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/mental_well/';
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

                <!--<div class="row flex-center mt-4">
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
                </div>-->

                <!--<div class="row flex-center mt-4">
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
                </div>-->
                <div class="row flex-center mt-4">
                    <h3>
                        PG Orientation
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>A week full of various activities for the fresh batches. Getting back on campus after
                            almost
                            2yrs,
                            and missing campus life, students seemed excited about the in-person orientation. Team
                            organised various activities like plantation drives, mini marathons, informal sessions,
                            interactive
                            sessions, to introduce the batches to their seniors, campus infrastructure, and campus
                            life.
                            Orientation week helped the students to make themselves comfortable with the campus life
                            and
                            clear out their doubts about their courses, academic life, co-curricular activities.
                            Also,
                            there were
                            various activities for students to showcase their talent. Students were also rewarded
                            with
                            the
                            prizes later on.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/pg_orientation/';
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
                            <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">Progressive Muscular
                                Relaxation (PMR)</a>
                        </li>
                    </ul>
                    <div class="tab-content text-justify">
                        <!--pginfo-->
                        <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                            <div class="col-md-12">
                                <div class="mdb-lightbox">
                                    <div class="row flex-center">
                                        <?php
                                        $dir = './images2/pmr_img/';
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
                        <!--Panel 1-->
                    </div>
                    <div class="row flex-center mt-4">
                        <h3>
                            One step towards Calmness
                        </h3>
                        <div style="text-align: left;">
                            <h5><b>The Technique:</b></h5>
                            <p>Progressive Muscular Relaxation (PMR) is a medically proven technique to sooth and calm
                                your nerves. Well-known for it’s ease , this user friendly exercise can take care of
                                anxiety and it’s resultant fall-outs.</p>
                            <h5 class="mt-2"><b>How does PMR work:</b></h5>
                            <p>
                                PMR prompts you to enhance the awareness of your own bodily reactions and changes in
                                tense/ worrying situations. This follows the learning to, first releases muscular
                                tension and finally calming down / soothing of mind.
                                You achieve this by following a series of simple verbal instructions about small
                                muscles, with eyes closed and concentrating on own body. PMR can be done seating or
                                lying down position and ends with deep relaxation of body. It does not take more than 30
                                minutes of PMR for you to experience calming effect and mental peace.
                                A good PMR session underlines the principal of Mind-Body Relatedness; which shows that
                                we can unlearn the reflexive habits of tension/ anxiety responses to stressful
                                situations by re-instructing our mind and body.
                                The relaxed state of mind and body, achieved through PMR learning, leaves it’s positive
                                effect on our health, with better self-control and preparedness to face tensions in
                                life.
                                The ease of instructions can help you to master it on your own with regular practice. As
                                there are no copyrights for this, you can help your friends and family members too,
                                after mastering yourself.
                            </p>
                            <h5 class="mt-2"><b>Where can it help you:</b></h5>
                            <p>
                                Most of those situations when you become very tense, worry too much, anticipate bad
                                outcomes such as exam tensions, anxiety/ headaches before viva/ interview, stage fright,
                                speaking in front of class, strangers/ opposite gender and so forth.
                                PMR is also beneficial in improving disturbed sleep, poor appetite/ digestion, fatigue,
                                hypertensions , ulcers and other problems having origins with mental anxiety and
                                emotional disturbances.
                            </p>
                        </div>
                        <div class=" mt-3 md-5"
                            style="font-style: italic;font-weight: 700;font-family: 'Roboto';color: cornflowerblue;">
                            Learning Progressive Muscular Relaxation (PMR) is a positive step towards healthy life
                            style. Take the first step…..
                        </div>
                        <div style="height:150px"></div>
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