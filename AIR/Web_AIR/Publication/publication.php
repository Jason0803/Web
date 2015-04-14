<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Publications</title>

    <link href="../Home/home_style.css" rel="stylesheet" type="text/css">


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
                <li class="active"><a href="../Home/home.html"><img src="../Home/home_navi.png" width="90" height="170" alt=""/></a></li>
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
Developer: Soo_Young_Choi
StdNo: 3171700
CourseCode: INFT3970
ItemTitle: publication.php
*/

// --------------------------------- Define variables -----------------------------//

// bring publication lists from a text file
// and store into an array
$publication = file_get_contents('pubsList.txt');
$pubLines = explode(PHP_EOL,$publication);

// bring member lists from a text file
// and store into an array
$members = file_get_contents('memberList.txt');
$membList = explode(PHP_EOL,$members);



// get members' last names
// '#' on name = doesnt have full name
for( $i = 0; $i < sizeof($membList); $i++ )
{
    if (strpos($membList[$i],'#') !== false)
    {
        $memberFirstNames[$i] = substr($membList[$i],0, strpos($membList[$i], '#'));
    }
    else // doesnt have '#' in name
    {
        $memberFirstNames[$i] =
            substr( $membList[$i], strpos($membList[$i],' '));
    }
}

$numberOfPubs = count($pubLines);

//------------------------------------ 'Publication' ------------------------------------//

echo '<div align="center">';
echo '  <table>';
echo '    <col width="100">';
echo '    <col width="600">';
echo '    <col>';
echo '    <tr>';
echo '      <td>&nbsp;</td>';
echo '      <td><br /><h2>Publications</h2><br /></td>';
echo '      <td>&nbsp;</td>';
echo '    </tr>';

//----------------------------- 'year' drop down menu ------------------------------------//

echo '<form id="menus" name="menu" method="post">';
echo '  <tr>';
echo '    <td>&nbsp</td>';
echo '    <td>';
echo '        <select name="years">';
echo '          <option value=" ">Year</option>';
echo '          <option value="2014">2014</option>';
echo '          <option value="2013">2013</option>';
echo '          <option value="2012">2012</option>';
echo '          <option value="2011">2011</option>';
echo '        </select>';
echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';

//----------------------------- 'names' drop down menu -----------------------------------//

echo '      <select name="firstName" onchange="submit()">';
echo '      <option value=" ">Name</option>';
echo '      <option value="">---Choose---</option>';

//--------- to bring members' first names into the selections -------//

for ( $i=0; $i < sizeof($memberFirstNames); $i++)
{
    echo '<option value='.$memberFirstNames[$i].'>';
    echo $memberFirstNames[$i];
    echo '</option>';
}

echo '      </select>';
echo '</form>';
echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';

echo '  <br /><br /></td>';
echo '</tr>';
echo '</table>';
//------------------------------- list of chosen publications ----------------------------//

echo '  <div id = "pubs">';

echo '  <table>';
echo '    <col width="100">';
echo '    <col width="600">';
echo '    <col>';

// '$option_n' stores value from dropdown menu if chosen
$option_1 = isset($_POST['years']) ? $_POST['years'] : false;
$option_2 = isset($_POST['firstName']) ? $_POST['firstName'] : false;

if($option_1 && $option_2) // selections are chosen
{

    $countSearched = 0;
    // showing the combination of selection of year + name 
    echo '<tr><td>&nbsp</td><td><strong>'. $_POST['years'].'</strong>';
    echo '&nbsp&nbsp&nbsp';
    echo ' <strong>'. $_POST['firstName'].'</strong><br /><br /></td></tr>';

    // search from publication list matches selection of 'year' and 'name'
    for( $i = 0; $i < count($pubLines); $i++)
    {
        if( $_POST['years'] == substr( $pubLines[$i], 0, strpos( $pubLines[$i], ':') )
            && (strpos($pubLines[$i], $_POST['firstName']) !== false) )
        {
            echo '<tr>';
            echo '  <td>&nbsp</td>';
            echo '  <td>' . $pubLines[$i] .'<br /><br /></td>';
            echo '</tr>';

            $countSearched++;
        }
    }
    if( $countSearched <= 6 )
    {
        if( $countSearched == 0 ) // when there is no publication found
        {
            echo '<tr>';
            echo '  <td>&nbsp</td>';
            echo '  <td><strong>No Publication Found</strong><br /><br /></td>';
            echo '</tr>';
        }
        for($i=0; $i<11; $i++)
            echo '<tr><td>&nbsp</td></tr>';
    }

}
else // nothing is chosen, default
{
    $count = 0;
    while( $count < $numberOfPubs)
    {
        echo '<tr>';
        echo '  <td>&nbsp</td>';
        echo '  <td>' . $pubLines[$count] . '<br /><br /></td>';
        echo '</tr>';
        $count++;
    }
}

//----------------------------------------------------------------------------------------//

echo '      </div>'; // end of contents
echo '  </tr>';
echo '</table>';
echo '</div>'; // end of 'center'

?>

<div id="footer"><img src="../Home/footer.png" width="1000" height="45" alt="" style="padding-top:100px"> </div>
</div>
</body>
</html>