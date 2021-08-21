<?php
    ob_start();
    
    function verifica_seculo($rs){
        
        $divisao = intdiv($rs, 100);
        if ($rs % 100 == 0){
            $resposta = $divisao;
        }else{
            $resposta = $divisao + 1;
        }
        
                        
        return $resposta;
            
    }
    
    
    if(isset($_REQUEST["envio"]) && $_REQUEST["envio"] == "true"){
        $rs = $_POST['dado'];
               
        if (is_numeric($rs)){
            $verifica = verifica_seculo($rs);
            
            $resultado = "<p class='p'>O século é: ".$verifica."</p>";            
        }else{
            $resultado = "<p class='p'>Digite apenas números</p>";
        }
        
        
    }else{
        $resultado = "";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Qual é o século?</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
        <style>
            *{
                font-family: 'Allison', cursive;
            }
            body{
                margin: 0;
                background-color: black;
            }
            #container{
                width: 500px;
                height: 700px;
                position: relative;
                background-image: url("bgi-ava1.jpg");
                background-repeat: no-repeat;
                margin: 0 auto 0 auto;
                background-size: 100% 100%;
                
            }
            #cb{
                position: relative;
                height: 120px;                
            }
            #cb h1{
                position: relative;
                text-align: center;
                top: 70px;
                font-size: 42px;
                margin: 0;             
                
            }
            #cp{
                position: relative;
                height: 350px;                
                
            }
            .p{
                margin: 0;
                font-size: 36px;
                width: 400px;
                position: relative;
                margin: 0 auto 0 auto;
            }
            #form1{
                position: relative;
                width: 100px;
                margin: 0 auto 0 auto;
                top: 50px;
            }
            #campo1{
                background-color: rgba(0,0,0,0);
                position: relative;
                width: 100px;
                margin: 0 auto 0 auto;
                height: 50px;
                text-indent: 10px;
                font-size: 50px;
                border-left: none;
                border-top: none;
                border-right: none;
            }
            #campo1:focus{                
                outline: 0;
            }
            #consultar{
                position: relative;
                background: none;
                border: none;
                cursor: pointer;
                top: 20px;
            }
            #consultar img{
                position: relative;
                width: 100px;
                margin: 0 auto 0 auto;
            }
        </style>
    </head>
    <body>
        <div id='container'>
            <div id='cb'>
                <h1>Pergaminho do conhecimento</h1>
            </div>
            <div id='cp'>
                <p class="p">Na linha abaixo, digite um ano qualquer para saber qual século ele pertence.</p>
                <form id='form1' method="post" action='ava1.php?envio=true'>
                    <input id='campo1' type=text name='dado' maxlength="4" size="4">
                    <button id="consultar"><img src="bt1.png"/></button>
                </form>
            </div>
            <div id='rp'>
                <?php echo $resultado;?>
            </div>
        </div>
    </body>
</html>
<?php
    ob_flush();
?>