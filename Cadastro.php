<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="Cadastro.css" />
  </head>
  <body>
    <div class="container">
        <img src="logo-pet-pam.png" style="width:100%">
            <div style="text-align:center">
                <p>Seu novo sistema de cadastro e busca de atendimentos</p>
            </div>
          <div class="row">
            <div class="column">
               <h2>Cadastrar Atendimento</h2>
               <form method="post" action="processa.php">
                    <label for="nome">Nome Completo </label>
                    <input type="text" id="nome" name="fnome" placeholder="meu nome..">
                    <label for="telefone">Telefone com DDD?</label>
                    <input type="text" id="telefone" name="ftel" placeholder="77..">
                    <label for="animal">Qual animal deseja atendimento?</label>
                    <select id="animal" name="fanimal">
                        <option value="cachorro">Cachorro</option>
                        <option value="gato">Gato</option>
                        <option value="passaro">Pássaro</option>
                        <option value="outro">Outro</option>
                    </select>
                    <label for="subject">Qual é o motivo para atendimento?</label>
                    <textarea id="fmensagem" name="fmensagem" placeholder="Escreva o motivo aqui..." style="height:170px"></textarea>
                    <input type="submit" value="Enviar">
                </form>
                <form method="post" action="consulta.php">
                  <input type="submit" value="Consultar">
                </form>
            </div>
            <div class="column"> 
            <h2>Nossos serviços</h2>
            <img src="mostruario-muros-pet-pam.png" style="width:100%">
            </div>
          </div>
        </div> 
  </body>
</html>