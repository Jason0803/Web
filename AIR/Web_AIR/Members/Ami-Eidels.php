<HTML>
<HEAD>
    <TITLE> Ami Eidels</TITLE>
    <script>
        window.resizeTo(300, 300);
    </script>
</HEAD>
<body onresize="parent.resizeTo(640,480)" onload="parent.resizeTo(640,480)">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="411" height="331" border="0" align="center">
    <tr>
        <th width="210" scope="col">Name</th>
        <td width="185" scope="col"><div align="center">
                <?php
                $str = file_get_contents('Member.txt');
                $arr = explode('/',$str);
                echo $arr[21];
                ?>
            </div></td>
    </tr>
    <tr>
        <th height="249"><div align="center">Description</div></th>
        <td><div align="center">
                <?php
                $str = file_get_contents('Member.txt');
                $arr = explode('/',$str);
                echo $arr[22];
                ?>
            </div></td>
    </tr>
    <tr>
        <th><div align="center">Email address</div></th>
        <td><div align="center">
                <?php
                $str = file_get_contents('Member.txt');
                $arr = explode('/',$str);
                echo $arr[23];
                ?>
            </div></td>
    </tr>
</table>
<p>&nbsp;</p>
<p align="center"><a href="http://www.newcastle.edu.au/profile/ami-eidels"> More details...</a></p>
</body>
</HTML>