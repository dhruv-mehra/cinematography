<?php
//constants

//variables

//ARRAYS

//Nav Menu Items
$navItems = array(
              array(
                "slug"  => "index.php",
                "title" => "Selected Works"
              ),
              array(
                "slug"  => "reel.php",
                "title" => "Reel"
              ),
              array(
                "slug"  => "about.php",
                "title" => "About"
              )
            );

//Works
$works = array(
    "dawa"         => array(
                        "name"        => "Dawa",
                        "mediaType"   => "Short Film",
                        "thumbnails"  => array(
                                          "films/dawa/3A.jpg",
                                          "films/dawa/10A.jpg",
                                          "films/dawa/11B.jpg"
                                          ),
                        "atl"         => array(
                                          "writer/director" => "Ariella Khan",
                                          "producers" => "Patryk Kot, Owen Pickette"
                                          ),
                        "btl"         => array(
                                          "cinematographer" => "Dhruv Mehra",
                                          "production designer" => "Ariella Khan",
                                          "1st AC" => "Sadiq Ali",
                                          "gaffer" => "Imran Salim",
                                          "editor" => "Tej Chethik",
                                          "sound designer" => "Sharlene Burgos",
                                          "colorist" => "Matt Filipek"
                                          ),
                        "genre"       => "Drama",
                        "language"    => "English/Urdu",
                        "duration"    => "17 Min",
                        "aspectRatio" => "2:1",
                        "color"       => "Color",
                        "year"       => "2021",
                        "embed"       => "",
                        "logline"     => "Much to his father’s dismay, Ahmed forgoes medical school to follow in his ailing grandfather’s footsteps to become a hakim.",
                        "imagePath"   => "films/dawa",
                        "poster"      => "",
                        "posterDesign"=> "Geena Vetula",
                        "festivals"   => array(
                                          "Chicago South Asian Film Festival 2022" => array("")
                                        )
                      ),
    "ponytail"         => array(
                        "name"        => "Ponytail",
                        "mediaType"   => "Short Film",
                        "thumbnails"  => array(
                                          "films/ponytail/10.jpg",
                                          "films/ponytail/11.jpg",
                                          "films/ponytail/13.jpg"
                                          ),
                        "atl"         => array(
                                          "writer/director" => "Aisha Hamid",
                                          "producers" => "Matt Browne, Kat Williams",
                                          "starring" => "Zinnia Ranji, Jasraj Singh"

                                          ),
                        "btl"         => array(
                                          "cinematographer" => "Dhruv Mehra",
                                          "1st AC" => "Shane Chung",
                                          "gaffer" => "Max Vanderwerf",
                                          "key grip" => "Drew Faflick",
                                          "1st AD" => "Dakyum Breanna Lee",
                                          "production designer" => "Aisha Hamid, Shazeb Shah",
                                          "hair & makeup" => "Suzan Georges",
                                          "production sound mixer" => "Samuel Ruesink",
                                          "editor" => "Usama Lali",
                                          "sound designer" => "Bailey Oliver",
                                          "composer" => "Analia Lentini",
                                          "colorist" => "Dhruv Mehra"
                                          ),
                        "genre"       => "Drama",
                        "language"    => "Urdu",
                        "duration"    => "13 Min",
                        "aspectRatio" => "1.66:1",
                        "color"       => "Color",
                        "year"       => "2024",
                        "embed"       => "https://player.vimeo.com/video/977155402?h=85b3af2642&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479",
                        "logline"     => "When a grieving daughter reconnects with her widowed father over a ponytail, she discovers a life altering truth about him.",
                        "imagePath"   => "films/pontytail",
                        "poster"      => "",
                        "posterDesign"=> "",
                        "festivals"   => array(
                                          "Cannes Indie Shorts Awards 2024" => array(""),
                                          "Venezia Shorts 2024" => array("")
                                        )
                      ),
    "converting"         => array(
                        "name"        => "Converting",
                        "mediaType"   => "Webseries",
                        "thumbnails"  => array(
                                          "films/converting/1.4C_1.33.1.jpg",
                                          "films/converting/3.2A_1.16.1.jpg",
                                          "films/converting/5.7G_1.59.1.jpg"
                                          ),
                        "atl"         => array(
                                          "writer/director" => "Ariella Khan",
                                          "producers" => "Dhruv Mehra, Ariella Khan, Devon Gulati",
                                          "starring" => "Mirrat, Rishi Mahesh"

                                          ),
                        "btl"         => array(
                                          "cinematographer" => "Dhruv Mehra",
                                          "1st AC" => "Sam Garcia-Bryce",
                                          "gaffers" => "Max Vanderwerf, Gerrit Fahr, Ethan Schoenborn, Cole Matsuda, Gavin Pringle",
                                          "1st AD" => "Hank Stuff",
                                          "production designer" => "Erin Zhang",
                                          "production sound mixer" => "Sharlene Burgos, Jeanette Rodriguez",
                                          "editor" => "Ariella Khan",
                                          "sound designer" => "Sharlene Burgos, Nihar Gagneja",
                                          "composer" => "Drew McComas",
                                          "colorist" => "Dhruv Mehra"
                                          ),
                        "genre"       => "Dramedy",
                        "language"    => "English/Urdu",
                        "duration"    => "5x 10 Min Episodes",
                        "aspectRatio" => "2:1",
                        "color"       => "Color",
                        "year"       => "2023",
                        "embed"       => "https://www.youtube.com/embed/yrMJB4zVIDY?si=dU3C2G_yj2bhXxEi",
                        "logline"     => "An intercultural South Asian couple navigate the complexities of their identities both together and apart.",
                        "imagePath"   => "films/converting",
                        "poster"      => "films/converting/Converting_Poster.jpeg",
                        "posterDesign"=> "Geena Vetula",
                        "festivals"   => array()
                      ),
    "all_day_long"  => array(
                        "name"        => "All Day Long",
                        "mediaType"   => "music video",
                        "thumbnails"  => array(
                                          "Looking Up"  => "films/alldaylong/1.31.1_1.31.1.jpg",
                                          "Rocking Out" => "films/alldaylong/1.59.1_1.59.1.jpg",
                                          "Laying Down" => "films/alldaylong/1.76.1_1.76.1.jpg"
                                          ),
                        "atl"         => array(
                                          "director" => "Dhruv Mehra",
                                          "artist" => "Bea Porges"
                                          ),
                        "btl"         => array(
                                          "cinematographer" => "Dhruv Mehra",
                                          "production assistant" => "Slater Edlein",
                                          ),
                        "genre"       => "",
                        "language"    => "English",
                        "duration"    => "4 Min",
                        "aspectRatio" => "1.66:1",
                        "color"       => "Color",
                        "year"       => "2023",
                        "embed"       => "https://www.youtube.com/embed/tpneSZv8P6c",
                        "logline"     => "Debut music video for Bea Porges from her album 'space & time'.",
                        "imagePath"   => "films/alldaylong",
                        "gallery"     => array(),
                        "poster"      => "",
                        "posterDesign"=> "",
                        "festivals"   => array()
                      ),
    "ozona"         => array(
                        "name"        => "Ozona",
                        "mediaType"   => "Short Film",
                        "thumbnails"  => array(
                                          "3 Shot" => "films/ozona/O02.PNG",
                                          "Extreme Wide" => "films/ozona/O04.PNG",
                                          "Liam Contemplating" => "films/ozona/O07.jpg"
                                          ),
                        "atl"         => array(
                                          "director" => "Dhruv Mehra",
                                          "writers" => "Dhruv Mehra & Ariella Khan",
                                          "producers" => "Lucia Agajanian, Ahlaam Moledina"
                                          ),
                        "btl"         => array(
                                          "cinematographer" => "Gerrit Fahr",
                                          "production designer" => "Ariella Khan",
                                          "camera/steadicam Operator" => "Miles Royal",
                                          "1st AC" => "Charlie Balsar",
                                          "2nd AC" => "Allan Rodriguez",
                                          "gaffer" => "Amaya Benbow",
                                          "key grip" => "Sam Garcia-Bryce",
                                          "editor" => "Tej Chethik",
                                          "composer" => "Drew McComas",
                                          "sound designer" => "Sharlene Burgos",
                                          "colorist" => "Dhruv Mehra & Gerrit Fahr"
                                          ),
                        "genre"       => "Drama",
                        "language"    => "English",
                        "duration"    => "13 Min",
                        "aspectRatio" => "2.35:1",
                        "color"       => "Color",
                        "year"       => "2022",
                        "embed"       => "https://player.vimeo.com/video/648889721?h=4f81c55acb&badge=0&autopause=0&player_id=0&app_id=58479",
                        "logline"     => "On a road trip gone wrong, a multicultural couple is forced to question the direction of their relationship when a passing hunter stops to help the stranded pair.",
                        "imagePath"   => "films/ozona",
                        "poster"      => "films/ozona/ozonaPoster.png",
                        "posterDesign"=> "Geena Vetula",
                        "festivals"   => array(
                                          "Chicago South Asian Film Festival 2022" => array(""),
                                          "Midwest Film Festival 2022" => array("Emerging Filmmaker Award - Nomination")
                                        )
                      ),
);

?>
