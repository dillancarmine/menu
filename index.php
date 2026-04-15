<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu</title>

  <!-- LIBRERIAS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Stylish&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Potta+One&family=Stylish&display=swap" rel="stylesheet">

  <!-- ESTILOS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>

  <?php
  $ham = [
    'Sencilla' => [
      'text' => 'Carne de res, lechuga, cebolla, picante, jitomate, catsup, mostaza y mayonesa.',
      'price' => '$50.00'
    ],
    'Sencilla con queso' => [
      'text' => 'Mismos ingredientes que la sencilla, pero con queso oaxaca.',
      'price' => '$55.00'
    ],
    'Hawaiana' => [
      'text' => 'Además de los ingredientes de la sencilla, lleva piña a la parrilla, jamón y queso oaxaca.',
      'price' => '$60.00'
    ],
    'Suiza' => [
      'text' => 'Además de los ingredientes de la sencilla, lleva tocino y queso oaxaca.',
      'price' => '$68.00'
    ],
    'Especial' => [
      'text' => 'Lleva todos los ingredientes de la sencilla, más los de la hawaiana y tocino.',
      'price' => '$75.00'
    ],
    'Extras' => [
      'text' => 'Puedes agregar ingredientes adicionales a tu hamburguesa por un costo extra.',
      'price' => '$10.00 - $20.00'
    ]
  ];

  $hd = [
    'Sencillo' => [
      'text' => 'Salchicha, cebolla, picante, jitomate, catsup, mostaza y mayonesa.',
      'price' => '$18.00'
    ],
    'Especial' => [
      'text' => 'Además de los ingredientes del sencillo, lleva queso oaxaca y tocino.',
      'price' => '$25.00'
    ],
    'Orden Sencilla' => [
      'text' => '3 Hot Dogs sencillos.',
      'price' => '$50.00'
    ],
    'Orden Especial' => [
      'text' => '3 Hot Dogs especiales.',
      'price' => '$70.00'
    ]
  ];

  $pos = [
    'Flan de vaso' => '$20.00',
    'Vaso de gelatina con crema y lechera' => '$20.00',
    'Rebanada de gelatina flotatina' => '$28.00',
    'Rebanada de flan napolitano' => '$38.00',
    'Duraznos con crema' => '$38.00'
  ];

  $ex = [
    'Cigarro' => '$8.00',
    'Refresco' => '$18.00',
    'Café instantaneo' => '$28.00',
    'Maruchan preparada' => '$28.00'
  ];
  ?>

  <div class="background">

    <section class="content-header">
      <div class="container-fluid">
        <h1 class="titulo text-center animate__animated animate__fadeInDown">Hamburguesas "YOGI"</h1>
      </div>
    </section>

    <!-- HAMBURGUESAS -->
    <section class="section fade-in">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-4">
            <h2 class="subtitulo">Hamburguesas</h2>
            <img class="img-fluid" src="assets/img/hamburguesa.png" alt="Hamburguesa">
          </div>
          <div class="col-md-8">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <?php foreach ($ham as $h => $v): ?>
                <div class="col">
                  <div class="card crd-cstm">
                    <div class="card-body">
                      <h5 class="card-title"><?= $h ?></h5>
                      <p class="card-text"><?= $v['text'] ?></p>
                      <p class="card-price"><?= $v['price'] ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- HOT DOGS -->
    <section class="section fade-in">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <?php foreach ($hd as $e => $v): ?>
                <div class="col">
                  <div class="card crd-cstm">
                    <div class="card-body">
                      <h5 class="card-title"><?= $e ?></h5>
                      <p class="card-text"><?= $v['text'] ?></p>
                      <p class="card-price"><?= $v['price'] ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="col-md-4">
            <h2 class="subtitulo">Hot Dogs</h2>
            <img src="assets/img/hot_dog.png" alt="Hot Dog" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <!-- POSTRES -->
    <section class="section fade-in">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-4">
            <h2 class="subtitulo">Postres</h2>
            <img src="assets/img/postre.png" alt="Postres" class="img-fluid">
          </div>
          <div class="col-md-8">
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <?php foreach ($pos as $p => $v): ?>
                <div class="col">
                  <div class="card crd-cstm">
                    <div class="card-body">
                      <h5 class="card-title"><?= $p ?></h5>
                      <p class="card-price"><?= $v ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- EXTRAS -->
    <section class="section fade-in">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <?php foreach ($ex as $e => $v): ?>
                <div class="col">
                  <div class="card crd-cstm">
                    <div class="card-body">
                      <h5 class="card-title"><?= $e ?></h5>
                      <p class="card-price"><?= $v ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="col-md-4">
            <h2 class="subtitulo">Otros</h2>
            <img src="assets/img/lata.png" alt="" class="img-fluid">
          </div>
        </div>

      </div>
    </section>

    <section class="section fade-in">
      <div class="container-fluid">
        <a href="https://maps.app.goo.gl/6JB7k92HroHgZKpFA" target="_blank">
          <h3 class="msg">¡Recuerda venir a visitarnos! 📍</h3>
        </a>
      </div>
    </section>

  </div>

  <footer>
    <p>&copy; 2026. Hamburguesas "YOGI". Todos los derechos reservados.</p>
  </footer>

  <script src="assets/js/main.js"></script>

</body>

</html>