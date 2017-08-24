<title>thisisj0rdn</title>
        <link rel='shortcut icon' href='favicon.ico' />
    </head>
    <body>
        <div id="main-stuff">
            <div id="text">
                <?php
                $questions = array(
                    "what do you like?", 
                    "what do you want?", 
                    "what do you have?", 
                    "where are you?", 
                    "what do you love?", 
                    "where is this?", 
                    "what is this?"
                );

                $a = rand(0, 6) ?>
                <p>
                    <a href= 
                    <?php switch ($a) { 
                        case 0: ?>
                        "http://www.j0rdnlikes.science"
                    <?php ; break; case 1: ?>
                        "http://www.j0rdnwantsto.party"
                    <?php ; break; case 2: ?>
                        "http://www.j0rdnhas.agency"
                    <?php ; break; case 3: ?>
                        "http://www.j0rdnis.online"
                    <?php ; break; case 4: ?>
                        "http://www.j0rdnlovesto.download"
                    <?php ; break; case 5: ?>
                        "http://www.welcometoj0rdns.site"
                    <?php ; break; case 6: ?>
                        "http://www.thisisj0rdns.space"
                    <?php ; break; } ?>
                    ><?php echo $questions[$a] ?></a>
                </p>
            </div>