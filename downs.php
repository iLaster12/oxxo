<!--
    Header load
-->

<?php 
    require('./assets/layout/head.php')
?>

    <!--additional links and meta zone -->
    
    <link rel="stylesheet" href="assets/css/downs.css">

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
        <div id="downs-content">
            <form action="" method="POST">
                <h3>Codigo:</h3>
                <input id="downs-code" type="text" placeholder="Codigo" name="downs-code">
                
                <button type="button" id="downs-search"><img src="assets/images/search_icon.png" alt=""></button>
                <button type="submit" id="downs-clean"><img src="assets/images/clear_icon.jpg" alt=""></button>
            </form>
                    
            <!--Content-->
            <div id="content-table">
                <table>
                    <thead>
                        <th>Codigo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                        <th>Eliminar</th>
                    </thead>
                    
                    <tbody id="downs-table">

                    </tbody>
                </table>
            </div>
        </div>

        <script>


            document.getElementById("downs-search").addEventListener("click", getData)

            function getData(){
                let input = document.getElementById("downs-code").value;
                let contet = document.getElementById("downs-table")

                let url = "assets/php/downsLoad.php"

                let formData = new FormData()
                formData.append('downs-code', input)

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