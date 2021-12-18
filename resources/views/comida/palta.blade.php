
    <html>
        <head>
            <meta name="csrf-token" content="{{ csrf_token() }}" />
        </head>
        <body>
            Prueba
            <div class="asd">
                <p id="texto"></p>
                <p id="texto2"></p>
            </div>
            <form id="formula1">
                <label for="tipo">arana</label>
                <input type="text" id="tipo">
                <label for="cantidad">lagarto</label>
                <input type="text" id="cantidad">
            </form>
            <button id="botonazo">
                Borgar
            </button>
        </body>
    </html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            fetch('/listar_paltas',{
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                credentials: 'same-origin',
            }).then(function(response){
                response.json().then(function(data){
                    console.log(data);
                    $('.asd #texto').text(data.hambre);
                    $('.asd #texto2').text(data.comida);
                });
            });

            $('#botonazo').click(function(){
                let formulario = new FormData();
                formulario.append('tipo', document.getElementById('tipo').value);
                formulario.append('cantidad', document.getElementById('cantidad').value);
                fetch('/agregar_algo',{
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    body: formulario
                });
            });
        });
    </script>
