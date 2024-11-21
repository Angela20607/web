<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dent Arte</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="Extra.css">
    <script src="https://kit.fontawesome.com/60767f19bd.js" crossorigin="anonymous"></script>
</head>
  



    
<body>

    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="#" class="logo"></a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="Conocenos.php" class="nav-link ">Conocenos</a>
                    </li>
                    <li class="nav-item">
                        <a href="A1/Servicios.php" class="nav-link ">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a href="Login/index.php" class="nav-link ">Admin</a>
                    </li>
            
                </ul>
            </nav>
        </div>
    </header>




    <section class="hero" id="hero">
        <div class="container">
            <h1 class="head">Dent Arte</h1>
            <h3>Tu sonrisa es nuestra obra de arte</h3>
        </div>
    </section>







    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('service-worker.js')
            .then(function() {
                console.log('Service Worker registrado con éxito.');
            })
            .catch(function(error) {
                console.log('Error al registrar el Service Worker:', error);
            });
        }
    </script>
</body>
</html>
