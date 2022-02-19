<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cryptocurrency Prices by Market Cap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/main.css" rel="StyleSheet" type="text/css"/>

</head>
<body>
   <section class="contenedor-crito">
        <div class="container">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Cryptocurrency Prices by Market Cap</h5>
                    <p class="card-text">En desarrollo</p>
                    <a href="https://www.coingecko.com/es/api" target="blank_" class="btn btn-primary">Documentación</a>
                </div>
            </div>   
            <br> 
            <div id="cargando" class="text-center">
                <img class="preloader" src="./img/preloader.gif" alt="">
            </div>
            <div id="render" class="row"></div>
        </div>
   </section>
   <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
   <script src="./js/main.js"></script>
</body>
</html>