<?php
    include_once('viacep.php');
    $address = getAddress();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
        <title>Via CEP</title>
    </head>
    <body>
        
        <div class="row">
            <div class="cell-4"></div>
            <div class="cell-4">
                
                <form class="card p-2" action="." method="POST">
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" data-role="input" data-history="true" placeholder="Digite um cep..." name="cep" value="<?php echo $address->cep?>" />
                    </div>
                    
                    <div class="form-group">
                        <input class="waves-effect waves-light btn" type="submit" />
                    </div>
                </form>
                
                <form class="card p-2">
                    <div class="form-group">
                        <label>Rua</label>
                        <input type="text" data-role="input" placeholder="Rua" name="rua" value="<?php echo $address->logradouro?>" />
                    </div>

                    <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" data-role="input" placeholder="Bairro" name="bairro" value="<?php echo $address->bairro?>" />
                    </div>

                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" data-role="input" placeholder="Cidade" name="cidade" value="<?php echo $address->localidade?>" />
                    </div>

                    <div class="form-group">
                        <label>Estado</label>
                        <input type="text" data-role="input" placeholder="Estado" name="estado" value="<?php echo $address->uf?>" />
                    </div>
                </form>
            </div>
            <div class="cell-4"></div>
        </div>
        
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
    </body>
</html>
