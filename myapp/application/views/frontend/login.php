<?php

    $usuario = ($user) ?? null;
    $err = ($erro) ?? null;

?>


<div id="login">

    <form action="/login/autenticar" method="post">

        <h1>Login</h1>

        <?php 

            if ($err){
                $html = "<div class='alert alert-warning'>";
                $html.= $err;
                $html.= "</div>";
                echo $html;
            }


        ?>

        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input required class="form-control" type="text" name="usuario" value="<?=$usuario?>" />
        </div>
        
        <div class="form-group">
            <label for="senha">Senha</label>
            <input required class="form-control" type="password" name="senha">
        </div>
        
        <button class="btn btn-primary">Logar</button>

           

    </form>


</div>