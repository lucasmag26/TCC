<?php

		echo  "<ul class='nav navbar-right top-nav'>"
                ."<li class='dropdown'> "
                ."    <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i>";
        echo $nome;
        echo  "<b class='caret'></b></a>"
                ."    <ul class='dropdown-menu'>"
                           
                ."        <li>"
                ."           <a href='../PHP/logout2.php'><i class='fa fa-fw fa-power-off'></i> Log Out</a>"
                ."        </li>"
                ."    </ul>"
                ."</li>"
            ."</ul>";

?>