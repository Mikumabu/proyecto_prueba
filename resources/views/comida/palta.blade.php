
    <html>
        <head>
        </head>
        <body>
            Prueba
            <div class="asd">
                <p id="texto"></p>
                <p id="texto2"></p>
            </div>
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
        });
    </script>
