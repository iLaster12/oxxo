<!--
    Header load
-->

<?php 
    require('./assets/layout/head.php')
?>


    <!--additional links and meta zone -->


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
    <div id="control-header" class="main-header">
        <div id="title"><h2>Bajas</h2></div>
        <div id="logo"><img src="assets/images/Femsa_Logo.png" alt=""></div>
    </div>

    <!--downs form-->
    <div id="downs-form">
            <form action="" method="post">
                <h3>Codigo:</h3>
                <input id="downs_code" type="text" placeholder="Codigo" name="downs_code">
                
                <button type="submit" id="downs_search"><img src="assets/images/search_icon.png" alt=""></button>
                <button type="submit" id="downs_clean"><img src="assets/images/clear_icon.jpg" alt=""></button>
            </form>
    </div>

    </body>
</html>