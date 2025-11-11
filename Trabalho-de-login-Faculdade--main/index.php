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
  <main class="container">
    <section class="login-box">
      <img src="/imagem/fofo.png" alt="Logo Cuidapet Mogi">
      
      <h1>Acesse a conta do seu pet</h1>
      <p class="descricao">Entre com seu usuário e senha para continuar</p>

      <?php if (isset($erro)): ?>
        <div class="erro" role="alert">
          <?php echo htmlspecialchars($erro, ENT_QUOTES, 'UTF-8'); ?>
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
            autocomplete="current-password"
            required
          >
        </div>

        <button type="submit" name="login" class="btn-entrar">
        

          Entrar
        </button>
      </form>

      <a href="recuperar.php" class="link-esqueci">Esqueceu sua senha?</a>

      <div class="link-cadastro">
        <a href="cadastro.php">Não tem uma conta? <strong>Cadastre-se</strong></a>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> Cuidapet Mogi - Todos os direitos reservados</p>
  </footer>
</body>
</html>