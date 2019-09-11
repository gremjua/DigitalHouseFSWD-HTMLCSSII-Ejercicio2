<?php
    $productos = [
        ['img' => ['src' => 'img/img-phone-01.jpg', 'alt' => 'Imagen Celular 01'],
        'nombre' => 'Nombre del producto',
        'descripcion' => 'Eiusmod Lorem dolor labore eiusmod tempor amet ea nulla aliqua aliquip exercitation do reprehenderit cupidatat. Ut ad culpa et nisi est ullamco Lorem elit reprehenderit pariatur Lorem do incididunt et.',
        'link' => 'null',
        'precio' => 125.99,
        'estaEnOferta' => true],
        ['img' => ['src' => 'img/img-phone-02.jpg', 'alt' => 'Imagen Celular 02'],
        'nombre' => 'Nombre del producto',
        'descripcion' => 'Eiusmod Lorem dolor labore eiusmod tempor amet ea nulla aliqua aliquip exercitation do reprehenderit cupidatat. Ut ad culpa et nisi est ullamco Lorem elit reprehenderit pariatur Lorem do incididunt et.',
        'link' => 'null',
        'precio' => 12.50,
        'estaEnOferta' => false],
        ['img' => ['src' => 'img/img-phone-03.jpg', 'alt' => 'Imagen Celular 03'],
        'nombre' => 'Nombre del producto',
        'descripcion' => 'Eiusmod Lorem dolor labore eiusmod tempor amet ea nulla aliqua aliquip exercitation do reprehenderit cupidatat. Ut ad culpa et nisi est ullamco Lorem elit reprehenderit pariatur Lorem do incididunt et.',
        'link' => 'null',
        'precio' => 0.99,
        'estaEnOferta' => true],
        ['img' => ['src' => 'img/img-phone-01.jpg', 'alt' => 'Imagen Celular 01'],
        'nombre' => 'Nombre del producto',
        'descripcion' => 'Eiusmod Lorem dolor labore eiusmod tempor amet ea nulla aliqua aliquip exercitation do reprehenderit cupidatat. Ut ad culpa et nisi est ullamco Lorem elit reprehenderit pariatur Lorem do incididunt et.',
        'link' => 'null',
        'precio' => 125.99,
        'estaEnOferta' => true],
        ['img' => ['src' => 'img/img-phone-02.jpg', 'alt' => 'Imagen Celular 02'],
        'nombre' => 'Nombre del producto',
        'descripcion' => 'Eiusmod Lorem dolor labore eiusmod tempor amet ea nulla aliqua aliquip exercitation do reprehenderit cupidatat. Ut ad culpa et nisi est ullamco Lorem elit reprehenderit pariatur Lorem do incididunt et.',
        'link' => 'null',
        'precio' => 1250.99,
        'estaEnOferta' => false],
        ['img' => ['src' => 'img/img-phone-03.jpg', 'alt' => 'Imagen Celular 03'],
        'nombre' => 'Nombre del producto',
        'descripcion' => 'Eiusmod Lorem dolor labore eiusmod tempor amet ea nulla aliqua aliquip exercitation do reprehenderit cupidatat. Ut ad culpa et nisi est ullamco Lorem elit reprehenderit pariatur Lorem do incididunt et.',
        'link' => 'null',
        'precio' => 125.00,
        'estaEnOferta' => true],
    ];

    function descripcionLarga(array $producto){
        $textoPrecio = '$' . sprintf('%.2f', $producto['precio']);
        if($producto['estaEnOferta']){
            $textoPrecioActual = '$' . sprintf('%.2f', 0.8*$producto['precio']);
            $textoPrecio = strikeText($textoPrecio) . ' ' . $textoPrecioActual;
        }
        return $textoPrecio. '<br>' . $producto['descripcion'];
    }

    function strikeText(string $s) {
        return '<strike>' . $s . '</strike>';
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>Home</title>
    </head>
    <body>
        <?php
            include_once('header.php');
        ?>
        <main>
            <section id="productos">
                <?php foreach($productos as $producto) : ?>
                    <div class="productCard">
                        <div>
                            <img src="<?=$producto['img']['src']?>" alt="<?=$producto['img']['alt']?>">
                        </div>
                        <h2>
                            <?=$producto['nombre']?>
                        </h2>
                        <!-- <h3>
                            <?='$'.$producto['precio']?>
                        </h3> -->
                        <p>
                            <!-- <?=$producto['descripcion']?> -->
                            <?=descripcionLarga($producto)?>
                        </p>
                        <a href="<?=$producto['link']?>">VER MÁS</a>
                    </div>
                <?php endforeach;?>
                
            </section>
            <section id="tutoriales" class="sideBar">
                <h2>Tutoriales</h2>
                <div>
                    <div>
                        <img src="img/aside-01.jpg" alt="Imagen tutoriales">
                        <p>
                            Título del turorial de reparación.
                        </p>
                    </div>
                    <div>
                        <img src="img/aside-02.jpg" alt="Imagen tutoriales">
                        <p>
                            Título del turorial de reparación.
                        </p>
                    </div>
                    <div>
                        <img src="img/aside-03.jpg" alt="Imagen tutoriales">
                        <p>
                            Título del turorial de reparación.
                        </p>
                    </div>
                    <div>
                        <img src="img/aside-04.jpg" alt="Imagen tutoriales">
                        <p>
                            Título del turorial de reparación.
                        </p>
                    </div>
                </div>
            </section>
            <section id="publicidad" class="sideBar">
                <h2>Publicidad</h2>
                <div>
                    <div>
                        <img src="img/ad-01.jpg" alt="Ad 01">
                    </div>
                    <div>
                        <img src="img/ad-02.jpg" alt="Ad 02">
                    </div>
                </div>
            </section>
        </main>
        <?php
            include_once('footer.php');
        ?>
    </body>
</html>