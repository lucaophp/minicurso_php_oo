<form action="index.php?action=inicio/contato#" id="form" class="form-horizontal" method="post">
    <div class="container">
        <div class="form-group">
            <label for="nome">Nome:</label>
            
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome..." required>
            
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            
            <input type="email" class="form-control" name="email" placeholder="Digite seu E-Mail..." required>
            
        </div>
        <div class="form-group">
            <label for="nome">Assunto:</label>
            
            <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Digite seu Assunto..." required>
            
        </div>
        <div class="form-group">
            <label for="nome">Mensagem:</label>
            
            <textarea type="text" class="form-control" name="mensagem" id="mensagem" placeholder="Digite sua Mensagem..." required></textarea>
            
        </div>
        
        
        <input type="submit" onclick="return valida()" class="btn btn-primary" name="contato" value="Enviar">
    
    </div>
</form>
<script>
    $("#contato").addClass("active");
    $(":not(#contato)").removeClass("active");
</script>