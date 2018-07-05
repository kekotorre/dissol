<html>
<head>
    <link href="{{ asset('css/googlefonts.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/2.3.1/fabric.js"></script>
    <script type="text/javascript" src="https://rawgit.com/bramstein/fontfaceobserver/master/fontfaceobserver.js"></script>
    <style>
    body{
        font-family: sans-serif;
    }
    @page {
        margin: 160px 50px;
    }
    header { position: fixed;
        left: 0px;
        top: -160px;
        right: 0px;
        height: 100px;
        background-color: #ddd;
        text-align: center;
    }
    header h1{
        margin: 10px 0;
    }
    header h2{
        margin: 0 0 10px 0;
    }
    footer {
        position: fixed;
        left: 0px;
        bottom: -50px;
        right: 0px;
        height: 40px;
        border-bottom: 2px solid #ddd;
    }
    footer .page:after {
        content: counter(page);
    }
    footer table {
        width: 100%;
    }
    footer p {
        text-align: right;
    }
    footer .izq {
        text-align: left;
    }
    </style>
    <body>
        <header>
            <h1>Composicion</h1>
            <h2>Dissol</h2>
        </header>

                    <canvas id="pizarra" height="560" width="1105" style="border: 2px solid red;"></canvas>
    
        <footer>
            <table>
                <tr>
                    <td>
                        <p class="izq">
                            www.dissol.es
                        </p>
                    </td>
                    <td>
                        <p class="page">
                            Página
                        </p>
                    </td>
                </tr>
            </table>
        </footer>
    </body>
    </html>
<script type="text/javascript">

    var canvas = new fabric.Canvas('pizarra');

    var composicion = <?php
    foreach ($composicion as $item) {
        echo $item->composicion ;
    }
    ?>;

    canvas.loadFromJSON(composicion, function(obj) {
        canvas.renderAll();
        console.log(' this is a callback. invoked when canvas is loaded!xxx ');

        canvas.forEachObject(function(obj){
            console.log(obj.name);
            canvas.add(obj);
        });
    });

</script>
