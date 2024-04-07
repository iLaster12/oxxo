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
        <div id="control-header" class="main-header">
            <div id="title"><h2>Consultas</h2></div>
            <div id="logo"><img src="assets/images/Femsa_Logo.png" alt=""></div>
        </div>

        <!--Table-->
        <div id="control-table" class="query-table">
            <!--Filters-->
            <div id="controls">
                <form action="" method="post">

                    <h3>Codigo:</h3>

                    <input id="assets-code" type="number" placeholder="Codigo" name="assets-code">
                    
                    <button type="button" id="search"><img src="assets/images/search_icon.png" alt=""></button>
                    <button type="submit" id="clean"><img src="assets/images/clear_icon.jpg" alt=""></button>
                    <button type="button" id="add"><img src="assets/images/adicon.png" alt=""></button>
                </form>

            </div>
            
            <!--Content-->
            <div id="content-table">
                <table>
                    <thead>
                        <th>Codigo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </thead>

                    <tbody id="content">

                    </tbody>
                </table>


            </div>
        </div>
        
        <form action="" id="delete-form" class="delete-form-hide">
            <table id="delete-table">
                <th><span>Razon de baja:</span></th>
                <th><textarea name="delete-reazon" id="delete-reazon" cols="30" rows="10" required></textarea></th>
                <th>
                    <button type="button" id="delete-confirm">Confirmar</button>
                    <button type="button" id="cancel-confirm">Cancelar</button>
                </th>
            </table>
            
            
            
            
        </form>

    </body>
    <script src="assets/js/assetsLoad.js"></script>
    <script src="assets/js/assetsDelete.js"></script>
</html>