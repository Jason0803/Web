<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>Members</title>

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
<h1 style=" font-family:sans-serif; color: #47a3da; margin-left:20px;">Members</h1>

<div class="main">

    <?php
    $memberList = file_get_contents('memberList');
    $lines = explode(PHP_EOL, $memberList);

    echo '<div align="center">';
    echo '<table width="800" cellspacing="10" align="center">';
    echo '<col width="40">';
    echo '<col width="300">';
    echo '<col>';
    echo '<tbody>';

    echo '<tr>';
    echo '<td>&nbsp;</td>';
    echo '<td><div class="main">
<h1 style=" font-family:sans-serif; color: #47a3da;">Members</h1><br/></div></td>';
    echo '<td>&nbsp;</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>&nbsp;</td>';

    echo '<td><strong>&nbsp;Name</strong></td>';
    echo '<td><strong>&nbsp;Details</strong></td>';
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
                $url = 'http://localhost:63342/untitled/AIR/Members/'. str_replace(" ", "-", $member);
            }
            $member = trim($member);
            $url = trim($url);

            echo '<tr><td>&nbsp;&nbsp;</td>';
            echo '<td>' . $member . '</td>';

            if (strlen($url) > 4)
            {

                $lhs = '<a href=';
                $rhs = '.php target="_NEW">&nbsp;details</a>';
                echo '<td>' . $lhs . $url . $rhs . '</td></tr>';

            }
            else   // member does not have a web page
            {
                echo '<td>&nbsp;</td>';
            }

        }

    }



    echo '</tbody>';
    echo '</table>';
    echo '</div>';
	echo '</div>';
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