<?php
	require('../../valida_sessao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery - Busca de Restaurantes</title>
    <link rel="stylesheet" href="restaurantsPage.css">
</head>

<body>
    <header>
        <iframe src="../Header/NavBar/navBar.php" width="100%" height="100"></iframe>
    </header>

    <div class="container">
        <h2>Restaurantes Disponíveis</h2>
        <input type="text" id="buscaInput" placeholder="Search for restaurantes..." onkeyup="searchrestaurantes()">
        <div id="restauranteList"></div>
    </div>

    <script src="Restaurants.js"></script>

    <footer>
        <iframe src="../Footer/footer.html" width="100%" height="100"></iframe>
    </footer>
</body>

</html>