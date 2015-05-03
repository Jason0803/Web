// What I've mainly focused on, for AIR Redevelopment Project -- Jason //
// These lines of comments are supposed to be ignored, not to be used  //

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>Publication</title>

    <link rel="stylesheet" href="navi_css/normalize_navi.css">

    <link rel="stylesheet" href="navi_css/style_navi.css" media="screen" type="text/css" />

</head>

<body>

<div class="off-canvas">

<nav class="nav">
    <ul class="nav__item-container">
        <li class="nav__item">
            <h1 class="logo">
                <a href="../M_home/index.html" class="logo__link">
                    AIR
                </a>
            </h1>
        </li>
        <li class="nav__item off-canvas__container"
            data-off-canvas-direction="left">
            <a href="/site_map"
               class="nav__item__title
                off-canvas__toggle-button
                icon
                icon--menu">
                Menu
            </a>
            <ul class="nav__item__content off-canvas__content">
                <li class="nav__item">
                    <a href=""
                       class="nav__item__title">
                        ABOUT
                    </a>
                    <ul class="nav__item__content">
                        <li class="nav__item">
                            <a href="../M_annual reports/index.html"
                               class="nav__item__title">
                                Annual Reports
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="../M_contact/index.html"
                               class="nav__item__title">
                                Contact
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="../M_for business/index.html"
                               class="nav__item__title">
                                For Business
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="../M_members/member.php"
                               class="nav__item__title">
                                Members
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="../M_affiliations/index.html"
                               class="nav__item__title">
                                Affiliations
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav__item">
                    <a href=""
                       class="nav__item__title">
                        Events
                    </a>
                    <ul class="nav__item__content">
                        <li class="nav__item">
                            <a href="../M_conferences/index.html"
                               class="nav__item__title">
                                Conferences
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="../M_seminars/index.html"
                               class="nav__item__title">
                                Seminars
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="nav__item">
                    <a href=""
                       class="nav__item__title">
                        Research
                    </a>
                    <ul class="nav__item__content">
                        <li class="nav__item">
                            <a href="../M_working papers/index.html"
                               class="nav__item__title">
                                Working Papers
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="../M_current projects/index.html"
                               class="nav__item__title">
                                Current Projects
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="../M_publication/publication.php"
                               class="nav__item__title">
                                Publication
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="../M_future projects/index.html"
                               class="nav__item__title">
                                Future Projects
                            </a>
                        </li>


                    </ul>
                </li>
            </ul>
        </li>

    </ul>
</nav>

<div class="main">
    <h1 style=" font-family:sans-serif; color: #47a3da; margin-left:20px;">Publications</h1>
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
//echo '      <td><br /><h2>Publications</h2><br /></td>';
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

    </div>
</div>
<p>
    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
</p>
<p>&nbsp;</p>
<p>
    <script src="js/index.js"></script>
</p>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="js2/jquery.accordion.js"></script>
<script type="text/javascript" src="js2/jquery.easing.1.3.js"></script>
<script type="text/javascript">
    $(function() {

        $('#st-accordion').accordion();

    });
</script>

</body>

</html>
