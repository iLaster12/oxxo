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

                    <input id="assets-code" type="text" placeholder="Codigo" name="assets-code">
                    
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

        <script>

            document.getElementById("search").addEventListener("click", getData)

            function getData(){
                let input = document.getElementById("assets-code").value;
                let contet = document.getElementById("content")

                let url = "assets/php/assetsLoad.php"

                let formData = new FormData()
                formData.append('assets-code', input)

                fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {
                    contet.innerHTML = data
                }).catch(err => console.log(err))

            }

        </script>

    </body>
</html>