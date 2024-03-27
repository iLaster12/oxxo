<!--
    Header load
-->

<?php 
    require('./assets/layout/head.php')
?>


    <!--additional links and meta zone -->
    
    <link rel="stylesheet" href="assets/css/queryAssets.css">

    <!--additional links and meta zone-->


    <title>OXXO</title>
    </head>
    <body>

<!--
    Lateral menu load
-->

<?php 
    require('./assets/layout/sideMenu.php')
?>

        <!--Page title-->
        <div id="main-header">
            <div id="title"><h2>Consultas</h2></div>
            <div id="logo"><img src="assets/images/Femsa_Logo.png" alt=""></div>
        </div>

        <!--Table-->
        <div id="query-table">
            <!--Filters-->
            <div id="controls">

                <h3>Codigo:</h3>

                <input type="text" placeholder="Codigo" name="codigo" required>

                <button type="submit" id="search"><img src="assets/images/search_icon.png" alt=""></button>
                <button type="submit" id="clean"><img src="assets/images//clear_icon.jpg" alt=""></button>

            </div>
            
            <!--Content-->
            <div id="content-table">



            </div>
        </div>
    </body>
</html>