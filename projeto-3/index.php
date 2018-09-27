<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="ProjetoCSS.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
        <meta charset="utf-8">

        <title>Trabalho de Programação Web!</title>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css?family=Lato');        
        </style>
    </head>

    <body onload="start();"> 
        <div class="container">
            <a class="cadastrar" href="cadastrar.html">Cadastre Uma Notícia</a>
            <div id="capa">
                <div id="logo">
                    <img src="avatar.png" width="80px">
                </div>
                <div id="description">
                    <span class="branco">Colt at Sapien</span>, cep augue sociis vestibulum amet faucibus natoque commodo at Vestibulum
                </div>
                <div id="redes">
                    <a href="https://twitter.com">
                        <img class="icon" src="1icontwitter.png">
                    </a>
                    <a href="https://github.com">   
                        <img class="icon" src="2icongit.png">
                    </a>
                    <a href="https://fb.com">
                        <img class="icon" src="3iconfb.png">
                    </a>
                    <a href="http://gmail.com/">
                        <img class="icon" src="4iconmail.png">
                    </a>
                </div>
                <div id="copyright">
                    © Untitled
                </div>
            </div>

            <div class="portal_noticias" >            
                <h1>Portal de Notícias</h1>
                <hr>
            </div>

            <div class = "noticias">
            <table id="noticias">
                <thead>
                    <tr>
                        <th>Título</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                
            </table>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script>
        buscarNoticias();
        start();
        setInterval(function(){
            buscarNoticias();
        }, 5000);
        

        function buscarNoticias(){
            $.ajax({
                url: "api/noticias.php",
                dataType: "json",
                success: function(data){
                    $("#noticias tbody tr").remove();
                    $(data.arrNoticias).each(function(idx, obj){
                        
                        $('#noticias tbody').append(`
                            <tr>
                                <td><a href="ver_noticias.php?id=${obj.id}">${obj.titulo}</a></td>
                                
                            </tr>
                        `)
                    });
                },
                fail: function(err){
                    console.log('Erro');
                }
            });
        }
        </script>
    </body>
</html>