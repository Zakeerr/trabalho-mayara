<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistema de login Cuidapet Mogi - Acesse sua conta">
  <meta name="author" content="Cuidapet Mogi">
  
  <title>Login - Cuidapet Mogi</title>
  
  <link rel="icon" href="/imagem/cachorro.png" type="image/png">
  <link rel="stylesheet" href="CSS/style.css">
  
  <style>
  
  </style>
</head>
<body>
<?php 


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])){
  
  $usuario = htmlspecialchars($_POST['usuario'] ?? '');
  $senha = htmlspecialchars($_POST['senha'] ?? '');
  $data_nascimento = htmlspecialchars($_POST['data_nascimento'] ?? '');
  $conf_senha = htmlspecialchars($_POST['conf_senha'] ?? '');
  
  if(!empty($usuario) && !empty($senha) && !empty($data_nascimento) && !empty($conf_senha)){
    
    if($senha !== $conf_senha){
      $erro = "As senhas não coincidem.";
    }else{
      $data_nascimento_sql = date('Y-m-d', strtotime($data_nascimento));
      
      $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
      $retorno = $con->query($sql);
      $REGISTRO = $retorno->fetch_assoc();
       
      if($REGISTRO){    
        $erro = "Usuário já existe.";
      }else{
        $hashsenha = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (usuario, senha, data_nascimento) VALUES
        ('$usuario', '$hashsenha', '$data_nascimento_sql')";
        $retorno = $con->query($sql);
        
        if($retorno){
          $sucesso = "CADASTRO REALIZADO COM SUCESSO!";
        }else{
          $erro = "Não cadastrado no banco de dados.";
        }
      }
    }
  }else{
    $erro = "Preencha todos os campos.";
  }
}

?> 



?> 
  <main class="container">
    <section class="login-box">
      <img src="/imagem/cachorro.png" alt="Logo Cuidapet Mogi">
      
      <h1>Acesse a conta do seu pet</h1>
      <p class="descricao">Entre com seu usuário e senha para continuar</p>
      
      <?php if (isset($erro)): ?>
        <div class="erro" role="alert">
          <?php echo htmlspecialchars($erro, ENT_QUOTES, 'UTF-8'); ?>
        </div>
      <?php endif; ?>
      
      <?php if (isset($sucesso)): ?>
        <div class="sucesso" role="alert">
          <?php echo htmlspecialchars($sucesso, ENT_QUOTES, 'UTF-8'); ?>
        </div>
      <?php endif; ?>
      
      <form method="POST" action="" class="form-login" autocomplete="on">
        <div class="form-group">
          <label for="usuario">Usuário</label>
          <input 
            type="text" 
            id="usuario" 
            name="usuario" 
            placeholder="Digite seu nome de usuário" 
            autocomplete="username"
            required 
            autofocus
          >
        </div>
        
        <div class="form-group">
          <label for="senha">Senha</label>
          <input 
            type="password" 
            id="senha" 
            name="senha" 
            placeholder="Digite sua senha" 
            autocomplete="new-password"
            required
          >
        </div>
        
        <div class="form-group">
          <label for="conf_senha">Confirmar Senha</label>
          <input 
            type="password" 
            id="conf_senha" 
            name="conf_senha" 
            placeholder="Digite a senha novamente" 
            autocomplete="new-password"
            required
          >
        </div>
        
        <div class="form-group">
          <label for="data_nascimento">Data de Nascimento</label>
          <input 
            type="date" 
            id="data_nascimento" 
            name="data_nascimento"
            max="<?php echo date('Y-m-d'); ?>"
            required
          >
        </div>
        
        <button type="submit" name="login" class="btn-entrar">
          Cadastrar
          <a href="dashboard.php">
        </button>
      </form>
      
      
      
      <div class="link-cadastro">
        <a href="cadastro.php">Já tem uma conta? <strong>Faça login</strong></a>
      </div>
    </section>
  </main>
  
  <footer>
    <p>&copy; <?php echo date('Y'); ?> Cuidapet Mogi - Todos os direitos reservados</p>
  </footer>
</body>
</html>