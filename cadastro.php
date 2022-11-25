<?php
include 'header.php';
?>
<div class="container">
    <form>
        <div class="mb-3">
            <label for="id_nome">Digite seu nome</label>
            <input type="text" name="nome" id="id_nome" />
        </div>
        <div>
            <label for="id_email">Digite seu e-mail</label>
            <input type="email" name="email" id="id_email" />
        </div>
        <div>
            <label for="id_senha">Digite sua senha</label>
            <input type="password" name="senha" id="id_senha" />
        </div>
        <div>
            <input type="submit" value="Cadastrar" />
        </div>
    </form>
</div>
<?php
include 'footer.php';
?>