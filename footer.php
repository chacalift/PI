<footer>
    <article>
        <?php
            if(isset($_GET["x"])){
                $recconfirma=$_GET["x"];
                if($recconfirma == 1){ ?>
                    <h3 style="color: #095C08; text-align: center; margin-top: 20%;">E-mail enviado com sucesso!</h3>
                <?php }}else{ ?>
        <form class="formulario" method="post" action="envia.php">
            <input type="text" name="fnome" required placeholder="Seu nome" class="campo">
            <input type="email" name="femail" required placeholder="Seu melhor e-mail" class="campo">
            <input type="text" name="fassunto" required placeholder="Assunto" class="campo">
            <textarea name="fmsg" rows="7" class="campo" required placeholder="Sua mensagem"></textarea>
            <input type="submit" value="Enviar" class="botao">
        </form>
        <?php } ?>
    </article>
    <article>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.084572279955!2d-49.27651568819221!3d-25.435435933014773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce46dfb11f2d5%3A0x8d1d6578f2f7e927!2sPra%C3%A7a%20Rui%20Barbosa%20-%20Centro%2C%20Curitiba%20-%20PR%2C%2082590-300!5e0!3m2!1spt-BR!2sbr!4v1686947708397!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </article>
    <p class="rodape">
        Todos os direitos reservados a Mariadallu | Copy Right &copy; 2023 | <small><i>Desenvolvido com ♥ por Daniel Feuser</i></small>
    </p>
</footer>