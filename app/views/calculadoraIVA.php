<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IVA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../public/css/estilos.css">
    <link rel="icon" href="../../public/img/calculadora.png" type="image/x-icon">
</head>
<body>
    <div class="cont_menu">
        <div class="logo">
            <a href="../views/home.php">
                <i class="fa-solid fa-calculator"></i>
                <h2>Calculadora fiscal</h2>
            </a>
        </div>    
        <div class="enlaces">            
            <a href="../views/calculadoraISR.php">CALCULADORA ISR</a>
            <a class="activo" href="../views/calculadoraIVA.php">CALCULADORA IVA</a>
            <a href="../views/contribuyentes.php">CONTRIBUYENTES</a>
        </div>
        <div class="cont_btns">

            <a href="#" class="btn">
                <button>
                    <i class="fa-regular fa-user"></i>
                </button>
            </a>
            <a href="#" class="btn">
                <button>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </a>
        </div>
    </div>
    <main>
        <div class="cont_title">
            <h2>CALCULO DEL IMPUESTO AL VALOR AGREGADO</h2>
        </div>
        <div class="combo_from">
            <div class="combo_head">
                <i class="fa-solid fa-sort-down"></i>
                <h2>DATOS PERSONALES</h2>
            </div>
            <div class="combo_body">
                <form action="">
                    <div class="colum-center">
                        <label>Nombre completo</label>
                        <input type="text">
                    </div>
                    <div class="colum-right">
                        <label for="">RFC</label>
                        <input type="text">
                    </div>
                    <div class="colum-left">
                        <label for="">CURP</label>
                        <input type="text">                    
                    </div>
                </form>
            </div>
        </div>

        <div class="combo_from">
            <div class="combo_head">
                <i class="fa-solid fa-sort-down"></i>
                <h2>DATOS A CALCULAR</h2>
            </div>
            <div class="combo_body">
                <form action="">
                    <div class="colum-right">
                        <div class="box_input">
                            <label for="">Nombre del producto</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">Precio</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">%</label>
                            <input type="text">
                        </div>
                        <button class="btn btn-fourth">Agregar</button>
                        <button class="btn btn-primary">Calcular</button>
                    </div>
                    <div class="colum-left">
                        <table id="miTabla" class="tabla-iva">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>%</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aquí se generará la información con JavaScript -->
                            </tbody>
                        </table>
                        
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="../../public/img/calculadora.png" alt="error">
                </div>
                <div class="terms">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit cum cumque velit libero officiis quam doloremque reprehenderit.</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Soluciones</h2>
                <a href="https://www.google.com">App Desarrollo</a>
                <a href="#">App Marketing</a>
                <a href="#">IOS Desarrollo</a>
                <a href="#">Android Desarrollo</a>
            </div>

            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Acerca de</a>
                <a href="#">Trabajos</a>
                <a href="#">Procesos</a>
                <a href="#">Servicios</a>              
            </div>

            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>

        </div>

        <div class="box__copyright">
            <hr>
            <p>INGERIA EN DESARROLLO DE SOFTWARE © 2023 - 2024 <b> 10° A</b></p>
        </div>
    </footer>
    <script>
         var datosFicticios = [
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
        ];

        function generarFilasTabla(datos) {
            var tbody = document.getElementById('miTabla').getElementsByTagName('tbody')[0];

            datos.forEach(function (dato) {
                var fila = tbody.insertRow();
                var celdas = Object.values(dato);

                celdas.forEach(function (valor, index) {
                    var celda = fila.insertCell();

                    // Verificar si la celda actual es la última (acciones)
                    if (index === celdas.length -1 ) {
                        var botonEditar = document.createElement('button');
                        botonEditar.classList.add('btn-second');
                        botonEditar.textContent = 'Editar';
                        botonEditar.addEventListener('click', function() {
                            // Lógica para editar la fila
                            alert('Editar fila con Nombre ' + fila.cells[0].textContent);
                        });

                        var botonEliminar = document.createElement('button');
                        botonEliminar.classList.add('btn-third');
                        botonEliminar.textContent = 'Eliminar';
                        botonEliminar.addEventListener('click', function() {
                            // Lógica para eliminar la fila
                            alert('Eliminar fila con Nombre ' + fila.cells[0].textContent);
                        });

                        celda.appendChild(botonEditar);
                        celda.appendChild(botonEliminar);
                    } else {
                        // Si no es la última celda, simplemente establecer el contenido
                        celda.textContent = valor;
                    }
                });
            });
        }

        // Llamar a la función después de que la página se haya cargado
        window.addEventListener('load', function() {
            generarFilasTabla(datosFicticios);
        });
    </script>
</body>
</html>