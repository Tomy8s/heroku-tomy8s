<!DOCTYPE html>

<!--<title>Getting Started</title>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/stylesheets/main.css" />-->

<html>
<head>
    <title>Tom's site</title>
    <link rel="stylesheet" type="text/css" href="../stylesheets/style.css">
    <?php if (strpos(basename($_SERVER['REQUEST_URI']),'calendar.php') == 0) echo '<link rel="stylesheet" type="text/css" href="../stylesheets/calendar.css">
    ';?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body id="body">
    <div id="top">
        <header id="titlebox">
            <h1 id="title"><a href="http://tomy8s.herokuapp.com">Tom's Site</a></h1>
        </header>
        <nav id="navtop">
            <ul>
                <li>
                    <a href="http://tomy8s.herokuapp.com/about">About me</a>
                </li>
                <li>
                    <a href="http://tomy8s.herokuapp.com/tefl/links/index">TEFL</a>
                </li>
                <li>
                    <a href="http://tomy8s.herokuapp.com/learning/academia">Learning</a>
                    <ul>
                        <li>
                            <a href="http://tomy8s.herokuapp.com/learning/academia">Academia</a>
                        </li>
                        <li>
                            <a href="http://tomy8s.herokuapp.com/learning/computing">Computing and IT</a>
                        </li>
                        <li>
                            <a href="http://tomy8s.herokuapp.com/learning/other">Other acheivements</a>
                        </li>
                    </ul><!--Learning-->
                </li>
                <li>
                    <a href="http://tomy8s.herokuapp.com/projects">Projects</a>
                    <ul>
                        <li>
                            <a href="http://tomy8s.herokuapp.com/projects/fourletters">Four letters</a>
                        </li>
                        <li>
                            <a href="maths_init.php">Maths</a>
                        </li>
                        <li>
                            <a href="calendar.php">Calendar</a>
                        </li>
                        <li>
                            <a href="game_of_life_init.php">Conway's Game of Life</a>
                        </li>
                    </ul>
                </li><!--Projects-->
            </ul><!--All items-->
        </nav><!--Top-->
    </div>
    <main>
