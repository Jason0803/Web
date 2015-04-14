<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Members</title>

    <link href="../Home/home_style.css" rel="stylesheet" type="text/css">
    <link href="../Members/Members_style.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="../Home/slider/orbit-1.2.3.css">
    <link rel="stylesheet" href="../Home/slider/demo-style.css">

    <!-- Attach necessary JS -->
    <script type="text/javascript" src="../Home/slider/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="../Home/slider/jquery.orbit-1.2.3.min.js"></script>

    <!--[if IE]>
    <style type="text/css">
        .timer { display: none !important; }
        div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
    </style>
    <![endif]-->

    <!-- Run the plugin -->
    <script type="text/javascript">
        $(window).load(function() {
            $('#featured').orbit();
        });
    </script>
</head>

<body>
<img src="../Home/background_image.png"  id="bg" alt=""/>
<div id="wrapper">
<div id="header"> <a href="../index.html"><img src="../Home/air_logo.png"style="margin-top: 25px; margin-left:15px; margin-right:10px;" width="200" height="100" /></a><img src="../Home/logo2.png" width="750" height="120" alt=""/>
</div>


<div id="navigation">
    <div id='navi'>
        <ul>
            <div class ='home'>
                <li class="active"><a href="../Home/home.html"><img src="../Home/home_navi.png" width="90" height="177" alt=""/></a></li>
            </div>
            <div class ='about'>
                <li><a href="#">
                        <img src="../Home/about_navi.png" width="90" height="120" alt=""/> </a>
                    <ul>
                        <li><a href="../Annual Reports/Annual Reports.html">Annual Reports</a></li>
                        <li><a href="../Contact/contact.html">Contact</a></li>
                        <li><a href="../For Business/For Business.html">For Business</a></li>
                        <li><a href="../Members/Members.php">Members</a></li>
                        <li><a href="../Affiliations/Affiliations.html">Affiliations</a></li>
                    </ul>
                </li>
            </div>
            <div class ='events'>
                <li><a href="#"><img src="../Home/events_navi.png" width="90" height="120" alt=""/>
                    </a>
                    <ul>
                        <li><a href="../Conferences/Conferences.html">Conferences</a></li>
                        <li><a href="../Seminars/Seminars.html">Seminars</a></li>
                    </ul>
                </li>
            </div>
            <div class ='research'>
                <li><a href="#"><img src="../Home/research_navi.png" width="90" height="170" alt="" /></a>
                    <ul>
                        <li><a href="../Working Papers/Working Papers.html">Working Papers</a></li>
                        <li><a href="../Current Projects/Current Projects.html">Current Projects</a></li>
                        <li><a href="../Publication/publication.php">Publications</a></li>
                        <li><a href="../Future Projects/Future Projects.html">Future Projects</a></li>
                    </ul>
                </li>
            </div>
        </ul>
    </div>
</div>



    <?php
    /*
    Developer: WOOJIN_CHO
    StdNo: 3171698
    CourseCode: INFT3930
    ItemTitle: Members.php
*/

    $memberList = file_get_contents('memberList');
    $lines = explode(PHP_EOL, $memberList);

    echo '<div align=center>';
    echo '<table width="800" cellspacing="10" align="center">';
    echo '<col width="200">';
    echo '<col width="300">';
    echo '<col>';
    echo '<tbody>';

    echo '<tr>';
    echo '<td>&nbsp;</td>';
    echo '<td><h1>Members</h1><br /></td>';
    echo '<td>&nbsp;</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>&nbsp;</td>';
    echo '<td><strong>Name</strong></td>';
    echo '<td><strong>Details</strong></td>';
    echo '</tr>';

    foreach( $lines as $member )
    {
        if( strlen($member) > 4 )
        {
            $url = '';
            $pos = stripos($member,'#');

            if( $pos !== false )
            {
                $url = substr($member, $pos+2);
                $member = substr($member,0,$pos);
            }
            else
            {
                $url = '../Members/'. str_replace(" ", "-", $member);
            }
            $member = trim($member);
            $url = trim($url);

            echo '<tr><td>&nbsp;</td>';
            echo '<td>' . $member . '</td>';

            if (strlen($url) > 4)
            {
             if($member == 'Marc adam')
             {
              $lhs = '<a href="#openModal1"';
              $rhs = '>details</a>';
              echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Rukshan Athauda')
             {
                 $lhs = '<a href="#openModal2"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Karen Blackmore')
             {
                 $lhs = '<a href="#openModal3"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Stephan Chalup')
             {
                 $lhs = '<a href="#openModal4"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Bruce Cheek')
             {
                 $lhs = '<a href="#openModal5"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Raymond Chiong')
             {
                 $lhs = '<a href="#openModal6"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'David Cornforth')
             {
                 $lhs = '<a href="#openModal7"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Ami Eidels')
             {
                 $lhs = '<a href="#openModal8"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Sittimont Kanjanabootra')
             {
                 $lhs = '<a href="#openModal9"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Suhuai Luo')
             {
                 $lhs = '<a href="#openModal10"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Herbert Jelinek')
             {
                 $lhs = '<a href="#openModal11"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Alexandre Mendes')
             {
                 $lhs = '<a href="#openModal12"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Cathie Payne')
             {
                 $lhs = '<a href="#openModal13"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Ilung Pranata')
             {
                 $lhs = '<a href="#openModal14"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Rohan Rasiah')
             {
                 $lhs = '<a href="#openModal15"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Brian Regan')
             {
                 $lhs = '<a href="#openModal16"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Simon')
             {
                 $lhs = '<a href="#openModal17"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Geoff Skinner')
             {
                 $lhs = '<a href="#openModal18"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Shamus Smith')
             {
                 $lhs = '<a href="#openModal19"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Peter Summons')
             {
                 $lhs = '<a href="#openModal20"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Reem Altamimi')
             {
                 $lhs = '<a href="#openModal21"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'William Chivers')
             {
                 $lhs = '<a href="#openModal22"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Heba Fasihuddin')
             {
                 $lhs = '<a href="#openModal23"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
             elseif($member == 'Thomas Kalinowski')
             {
                 $lhs = '<a href="#openModal24"';
                 $rhs = '>details</a>';
                 echo '<td>'.$lhs .$url. $rhs.'</td></tr>';
             }
            }

        }
    }

    echo '<tr>';
    echo '<td>&nbsp;</td>';
    echo '<td>&nbsp;</td>';
    echo '<td>&nbsp;</td>';
    echo '</tr>';

    echo '</tbody>';
    echo '</table>';
    echo '</div>'; // end of contents

    ?>

<div id="openModal1"class="modalDialog">
        <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                Marc Adam</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Marc T. P. Adam is a Lecturer in IT at the School of Design, Communication and IT.
                        He received a diploma in Computer Science from the University of Applied Sciences Wurzburg, Germany,
                        and a Ph.D. in Economics of Information Systems from the Karlsruhe Institute of Technology, Germany.
                    </div></td>
            </tr>
            <tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Marc.Adam@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
   <p align="center"><a href="http://www.newcastle.edu.au/profile/marc-adam"> More details...</a></p>
        </div>
    </div>
<div id="openModal2"class="modalDialog">
        <div>	<a href="#close" title="Close" class="close">X</a>
            <table>
                <tr>
                    <th width="210" scope="col">Name</th>
                    <td width="185" scope="col"><div align="center">
                    Rukshan Athauda</div></td>
                </tr>
                <tr>
                    <th height="249"><div align="center">Description</div></th>
                    <td><div align="center">
                            Dr Rukshan I. Athauda is a Lecturer at the School of Design,
                            Communication and Information Technology (DCIT) at The Univeristy of Newcastle, Australia.
                            His research interests span Database Systems, Cloud Computing, ICT Education and ICT Security.
                        </div></td>
                </tr>
                <tr>
                    <th><div align="center">Email address</div></th>
                    <td><div align="center">
                            Rukshan.Athauda@newcastle.edu.au
                        </div></td>
                </tr>
            </table>
            <p align="center"><a href="http://www.newcastle.edu.au/profile/rukshan-athauda"> More details...</a></p>
        </div>
    </div>
<div id="openModal3"class="modalDialog">
        <div>	<a href="#close" title="Close" class="close">X</a>
            <table>
                <tr>
                    <th width="210" scope="col">Name</th>
                    <td width="185" scope="col"><div align="center">
                            Karen Blackmore</div></td>
                </tr>
                <tr>
                    <th height="249"><div align="center">Description</div></th>
                    <td><div align="center">
                            Karen Blackmore received her Binfotech(Spatialinfo) With Distinction in 2001 and her Phd
                            in 2008 from Charles Sturt University, Australia.
                        </div></td>
                </tr>
                <tr>
                    <th><div align="center">Email address</div></th>
                    <td><div align="center">
                            Karen.Blackmore@newcastle.edu.au
                        </div></td>
                </tr>
            </table>
            <p align="center"><a href="http://www.newcastle.edu.au/profile/karen-blackmore"> More details...</a></p>
        </div>
    </div>
<div id="openModal4"class="modalDialog">
        <div>	<a href="#close" title="Close" class="close">X</a>
            <table>
                <tr>
                    <th width="210" scope="col">Name</th>
                    <td width="185" scope="col"><div align="center">
                            Stephan Chalup</div></td>
                </tr>
                <tr>
                    <th height="249"><div align="center">Description</div></th>
                    <td><div align="center">
                            Stephan K. Chalup is an Associate Professor in Computer Science and Software Engineering at the University of Newcastle, Australia.
                            He received his Ph.D. in Computer Science (Machine Learning) from Queensland University of Technology in Brisbane.
                        </div></td>
                </tr>
                <tr>
                    <th><div align="center">Email address</div></th>
                    <td><div align="center">
                            Stephan.Chalup@newcastle.edu.au
                        </div></td>
                </tr>
            </table>
            <p align="center"><a href="http://www.newcastle.edu.au/profile/stephan-chalup"> More details...</a></p>
        </div>
    </div>
<div id="openModal5"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Bruce Cheek</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Bruce Cheek is a senior lecturer in school of Design Communication and IT at the University of Newcastle, Australia.
                        He received his master degree of Mathematics, University of Newcastle.
                    </div></td>
            </tr>
            <tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Bruce.Cheek@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/bruce-cheek"> More details...</a></p>
    </div>
</div>
<div id="openModal6"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Raymond Chiong</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Raymond Chiong is a lecturer in School of Design Communication and IT. He is a member of faculty of Science and Information Technology.
                    </div></td>
            </tr>
            <tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Raymond.Chiong@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/raymond-chiong"> More details...</a></p>
    </div>
</div>
<div id="openModal7"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        David Cornforth</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Dr David Cornforth is a Senior Lecturer in Information Technology at the University of Newcastle.
                        He currently teaches into the courses related to video games design, application programming and mobile apps development.
                    </div></td>
            </tr>
            <tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        David.Cornforth@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/david-cornforth"> More details...</a></p>
    </div>
</div>
<div id="openModal8"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Ami Eidels</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Ami Eidels is a senior lecturer in School of Psychology at the University of Newcastle.
                        He is a member of faculty of Science and Information Technology.
                    </div></td>
            </tr>
            <tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Ami.Eidels@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/ami-eidels"> More details...</a></p>
    </div>
</div>
<div id="openModal9"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Sittimont Kanjanabootra</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Dr Sittimont Kanjanabootra is a practicing Design Mechanical and Construction Engineer.
                        His PhD at RMIT University was a study of design and implementation of engineering knowledge management systems in Australia.
                    </div></td>
            </tr>
            <tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Sittimont.Kanjanabootra@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p>&nbsp;</p><p align="center"><a href="http://www.newcastle.edu.au/profile/sittimont-kanjanabootra"> More details...</a></p>
    </div>
</div>
<div id="openModal10"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Suhuai Luo</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Dr Suhuai Luo is a senior lecturer in Information Technology at the University of Newcastle.
                        He currently teaches into the courses related to database management, digital media, system design and web design,
                        and has supervised many honours, masters, and PhD projects.
                    </div></td>
            </tr>
            <tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Suhuai.Luo@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/suhuai-luo"> More details...</a></p>
    </div>
</div>
<div id="openModal11"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Herbert Jelinek</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Herbert Jelinek graduated in Human Genetics (Honours) from UNSW, Sydney and received a GradDip(Neurosci)
                        from ANU (Canberra) followed by a PhD (University of Sydney).
                    </div></td>
            </tr>
            <tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        hjelinek@csu.edu.au
                    </div></td>
            </tr>
        </table>
        <p>&nbsp;</p><p align="center"><a href="http://www.csu.edu.au/faculty/science/cmhealth/staff/profiles/biomedical-science/herbert-jelinek"> More details...</a></p>
    </div>
</div>
<div id="openModal12"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Alexandre Mendes</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Alexandre Mendes is a senior lecturer in School of Electrical Engineering
                        and Computer Science at the University of Newcastle.
                    </div></td>
            </tr
            ><tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Alexandre.Mendes@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
         <p align="center"><a href="http://www.newcastle.edu.au/profile/alexandre-mendes"> More details...</a></p>
    </div>
</div>
<div id="openModal13"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Cathie Payne</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        A Master's by research graduate from the University of Technology Sydney,
                        Cathie is a multi-award new media producer with over fifteen years experience producing video,
                        sound, interactive media, games, documentary, web, broadband and animation work.
                    </div></td>
            </tr
            ><tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Cathie.Payne@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/cathie-payne"> More details...</a></p>
    </div>
</div>
<div id="openModal14"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Ilung Pranata</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Dr. Ilung Pranata is a lecturer in Information Technology at the University of Newcastle, Australia.
                        Prior to working in academia, Dr. Pranata has worked for and provided consultancies
                        mainly in banking and manufacturing sectors.
                    </div></td>
            </tr
            ><tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        ILUNG.PRANATA@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/ilung-pranata"> More details...</a></p>
    </div>
</div>
<div id="openModal15"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Rohan Rasiah</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Rohan Rasiah is an associate professor in School of Biomedical Sciences
                        and Pharmacy at the University of Newcastle. He received his PhD, University of Tasmania.
                    </div></td>
            </tr
            ><tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Rohan.Rasiah@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/rohan-rasiah"> More details...</a></p>
    </div>
</div>
<div id="openModal16"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Brian Regan</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Brian Regan is a senior lecturer in School of Design Communication and IT at the University of newcastle,
                        and a member of faculty of Science and Information Technology.
                        He has been involved with examing the use of computers in health for all my academic career.
                    </div></td>
            </tr
            ><tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Brian.Regan@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/brian-regan"> More details...</a></p>
    </div>
</div>
<div id="openModal17"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Simon</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Based at the University's Ourimbah campus, Simon lectures in information technology
                        within the School of Design, Communiction, and Information Technology.
                    </div></td>
            </tr
            ><tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        simon@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/simon"> More details...</a></p>
    </div>
</div>
<div id="openModal18"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Geoff Skinner</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Geoff Skinner is a senior lecturer in School of Design Communication and IT at the University of newcastle,
                        and a member of faculty of Science and Information Technology.
                    </div></td>
            </tr
            ><tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Geoff.Skinner@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/geoff-skinner"> More details...</a></p>
    </div>
</div>
<div id="openModal19"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Shamus Smith</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Shamus P. Smith is a senior lecturer in School of Elect Engineering and Computer Science at the University of Newcastle, Australia.
                        He completed his BSc, BSc Hons (1st class) and PhD in Computer Science, at Massey University, New Zealand.
                    </div></td>
            </tr
            ><tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Shamus.Smith@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/shamus-smith"> More details...</a></p>
    </div>
</div>
<div id="openModal20"class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
        <table>
            <tr>
                <th width="210" scope="col">Name</th>
                <td width="185" scope="col"><div align="center">
                        Peter Summons</div></td>
            </tr>
            <tr>
                <th height="249"><div align="center">Description</div></th>
                <td><div align="center">
                        Peter Summons is a senior lecturer in School of Design Communication and IT at the University of newcastle.
                        His professional career includes practical experience as a Systems Engineer in the Hardware Development Group at the BHP, Newcastle.
                    </div></td>
            </tr
            ><tr>
                <th><div align="center">Email address</div></th>
                <td><div align="center">
                        Peter.Summons@newcastle.edu.au
                    </div></td>
            </tr>
        </table>
        <p align="center"><a href="http://www.newcastle.edu.au/profile/peter-summons"> More details...</a></p>
    </div>
</div>
<div id="openModal21"class="modalDialog">
<table>
    <tr>
        <th width="210" scope="col"></th>
        <td width="185" scope="col"><div align="center"></div></td>
    </tr>
    <tr>
        <th height="249"><div align="center"></div></th>
        <td><div align="center"></div></td>
    </tr>
    <tr>
        <th><div align="center"></div></th>
        <td><div align="center"></div></td>
    </tr>
</table>
<p align="center"><a href="http://www.newcastle.edu.au/profile/reem-altamimi"> More details...</a></p>
</div>
<div id="openModal22"class="modalDialog">
    <table>
        <tr>
            <th width="210" scope="col"></th>
            <td width="185" scope="col"><div align="center"></div></td>
        </tr>
        <tr>
            <th height="249"><div align="center"></div></th>
            <td><div align="center"></div></td>
        </tr>
        <tr>
            <th><div align="center"></div></th>
            <td><div align="center"></div></td>
        </tr>
    </table>
    <p align="center"><a href="http://www.newcastle.edu.au/profile/william-chivers"> More details...</a></p>
</div>
<div id="openModal23"class="modalDialog">
    <table>
        <tr>
            <th width="210" scope="col"></th>
            <td width="185" scope="col"><div align="center"></div></td>
        </tr>
        <tr>
            <th height="249"><div align="center"></div></th>
            <td><div align="center"></div></td>
        </tr>
        <tr>
            <th><div align="center"></div></th>
            <td><div align="center"></div></td>
        </tr>
    </table>
    <p align="center"><a href="http://www.newcastle.edu.au/profile/heba-fasihuddin"> More details...</a></p>
</div>
<div id="openModal24"class="modalDialog">
    <table>
        <tr>
            <th width="210" scope="col"></th>
            <td width="185" scope="col"><div align="center"></div></td>
        </tr>
        <tr>
            <th height="249"><div align="center"></div></th>
            <td><div align="center"></div></td>
        </tr>
        <tr>
            <th><div align="center"></div></th>
            <td><div align="center"></div></td>
        </tr>
    </table>
    <p align="center"><a href="http://www.newcastle.edu.au/profile/thomas-kalinowski"> More details...</a></p>
</div>
    <div id="footer"><img src="../Home/footer.png" width="1000" height="45" alt="" style="padding-top:100px"> </div>
</div>
</body>
</html>
