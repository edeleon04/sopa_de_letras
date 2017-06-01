<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->        
        <link href="/css/index.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                
        <!-- Scripts -->
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Bienvenid@
                </div> 
                <form action="{{ route('app.index') }}" method="post" id="submit_form">
                    <label class="control-label">Seleccione archivo de prueba</label>
                    <input id="input-1" type="file" class="file">      
                    <input class="btn btn-default" type="submit" id="submit" value="Buscar 'OIE'">  
                </form>
            </div>
        </div>

        <script>
            var formData = new FormData($("#submit_form")[0]);
            $("#submit").click(function (e){
                e.preventDefault();
                alert("hola");

                $.ajax({
                    type: "POST",
                    url: "findWord",
                    data: formData,
                    processData: false,
                    contentType: false,
                })
                .done(function(msg) {
                    alert("hola");
                })
                .fail(function(data) {
                    alert("error en carga");
                });

            });
        </script>
    </body>
</html>
