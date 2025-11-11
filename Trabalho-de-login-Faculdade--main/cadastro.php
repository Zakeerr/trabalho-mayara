<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Cadastro Cuidapet Mogi - Crie sua conta">
  <meta name="author" content="Cuidapet Mogi">
  
  <title>Cadastro - Cuidapet Mogi</title>
  
  <link rel="icon" href="/imagem/cachorro.png" type="image/png">
  <link rel="stylesheet" href="CSS/style.css">
  
  <style>
    :root {
      --primary-color: #4a90e2;
      --primary-hover: #357abd;
      --success-color: #27ae60;
      --error-color: #e74c3c;
      --text-dark: #2c3e50;
      --text-light: #7f8c8d;
      --border-color: #dfe6e9;
      --background: #f8f9fa;
      --white: #ffffff;
      --shadow: rgba(0, 0, 0, 0.1);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      line-height: 1.6;
    }

    .container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .cadastro-box {
      background: var(--white);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 40px var(--shadow);
      max-width: 480px;
      width: 100%;
      animation: slideUp 0.5s ease-out;
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .logo-container {
      text-align: center;
      margin-bottom: 24px;
    }

    .logo-container img {
      max-width: 100px;
      height: auto;
      border-radius: 50%;
    }

    h1 {
      color: var(--text-dark);
      font-size: 28px;
      font-weight: 600;
      text-align: center;
      margin-bottom: 8px;
    }

    .descricao {
      color: var(--text-light);
      font-size: 14px;
      text-align: center;
      margin-bottom: 32px;
    }

    /* Mensagens de alerta */
    .alert {
      padding: 12px 16px;
      border-radius: 8px;
      margin-bottom: 20px;
      font-size: 14px;
      display: flex;
      align-items: center;
      gap: 10px;
      animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(-20px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .alert-error {
      background-color: #fee;
      color: var(--error-color);
      border-left: 4px solid var(--error-color);
    }

    .alert-success {
      background-color: #edf7ed;
      color: var(--success-color);
      border-left: 4px solid var(--success-color);
    }

    .alert::before {
      content: '';
      width: 20px;
      height: 20px;
      flex-shrink: 0;
    }

    .alert-error::before {
      content: '⚠️';
    }

    .alert-success::before {
      content: '✓';
      background: var(--success-color);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
    }

    /* Formulário */
    .form-cadastro {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    label {
      color: var(--text-dark);
      font-size: 14px;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 4px;
    }

    .required {
      color: var(--error-color);
      font-size: 16px;
    }

    input[type="text"],
    input[type="password"],
    input[type="date"],
    input[type="email"] {
      width: 100%;
      padding: 12px 16px;
      border: 2px solid var(--border-color);
      border-radius: 8px;
      font-size: 15px;
      transition: all 0.3s ease;
      outline: none;
      font-family: inherit;
    }

    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="date"]:focus,
    input[type="email"]:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
    }

    input::placeholder {
      color: #b2bec3;
    }

    /* Indicador de força da senha */
    .password-strength {
      height: 4px;
      background: var(--border-color);
      border-radius: 2px;
      overflow: hidden;
      margin-top: -4px;
    }

    .password-strength-bar {
      height: 100%;
      width: 0;
      transition: all 0.3s ease;
      border-radius: 2px;
    }

    .password-strength-bar.weak {
      width: 33%;
      background: var(--error-color);
    }

    .password-strength-bar.medium {
      width: 66%;
      background: #f39c12;
    }

    .password-strength-bar.strong {
      width: 100%;
      background: var(--success-color);
    }

    .password-hint {
      font-size: 12px;
      color: var(--text-light);
      margin-top: -4px;
    }

    /* Botão */
    .btn-cadastrar {
      width: 100%;
      padding: 14px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: var(--white);
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 8px;
    }

    .btn-cadastrar:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }

    .btn-cadastrar:active {
      transform: translateY(0);
    }

    .btn-cadastrar:disabled {
      opacity: 0.6;
      cursor: not-allowed;
      transform: none;
    }

    /* Termos */
    .termos-container {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      font-size: 13px;
      color: var(--text-light);
    }

    .termos-container input[type="checkbox"] {
      margin-top: 2px;
      cursor: pointer;
      width: auto;
    }

    .termos-container a {
      color: var(--primary-color);
      text-decoration: none;
    }

    .termos-container a:hover {
      text-decoration: underline;
    }

    /* Link de login */
    .link-login {
      text-align: center;
      margin-top: 24px;
      padding-top: 24px;
      border-top: 1px solid var(--border-color);
    }

    .link-login p {
      color: var(--text-light);
      font-size: 14px;
    }

    .link-login a {
      color: var(--primary-color);
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
    }

    .link-login a:hover {
      color: var(--primary-hover);
      text-decoration: underline;
    }

    footer {
      background: rgba(0, 0, 0, 0.1);
      color: var(--white);
      text-align: center;
      padding: 16px;
      font-size: 13px;
    }

    /* Responsividade */
    @media (max-width: 540px) {
      .cadastro-box {
        padding: 30px 24px;
      }

      h1 {
        font-size: 24px;
      }

      .descricao {
        font-size: 13px;
      }
    }
  </style>
</head>

<body>
  <main class="container">
    <section class="cadastro-box">
      <div class="logo-container">
        <img src="/imagem/fofo.png" alt="Logo Cuidapet Mogi">
      </div>

      <h1>Criar conta</h1>
      <p class="descricao">Preencha os dados abaixo para cadastrar seu pet</p>

      <?php if (isset($erro)): ?>
        <div class="alert alert-error" role="alert">
          <?php echo htmlspecialchars($erro, ENT_QUOTES, 'UTF-8'); ?>
        </div>
      <?php endif; ?>

      <?php if (isset($sucesso)): ?>
        <div class="alert alert-success" role="alert">
          <?php echo htmlspecialchars($sucesso, ENT_QUOTES, 'UTF-8'); ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form-cadastro" id="formCadastro">
        
        <div class="form-group">
          <label for="usuario">
            Nome de usuário <span class="required">*</span>
          </label>
          <input 
            type="text" 
            id="usuario" 
            name="usuario" 
            placeholder="Escolha um nome de usuário" 
            autocomplete="username"
            minlength="3"
            maxlength="30"
            required 
            autofocus
          >
        </div>

        <div class="form-group">
          <label for="email">
            E-mail <span class="required">*</span>
          </label>
          <input 
            type="email" 
            id="email" 
            name="email" 
            placeholder="seu@email.com" 
            autocomplete="email"
            required
          >
        </div>

        <div class="form-group">
          <label for="senha">
            Senha <span class="required">*</span>
          </label>
          <input 
            type="password" 
            id="senha" 
            name="senha" 
            placeholder="Crie uma senha forte" 
            autocomplete="new-password"
            minlength="6"
            required
          >
          <div class="password-strength">
            <div class="password-strength-bar" id="strengthBar"></div>
          </div>
          <span class="password-hint">Mínimo de 6 caracteres</span>
        </div>

        <div class="form-group">
          <label for="conf_senha">
            Confirmar senha <span class="required">*</span>
          </label>
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
          <label for="data_nascimento">
            Data de nascimento do pet
          </label>
          <input 
            type="date" 
            id="data_nascimento" 
            name="data"
            max="<?php echo date('Y-m-d'); ?>"
          >
        </div>

        <div class="termos-container">
          <input 
            type="checkbox" 
            id="termos" 
            name="termos" 
            required
          >
          <label for="termos" style="font-weight: normal; font-size: 13px;">
            Aceito os <a href="termos.php" target="_blank">Termos de Uso</a> e 
            <a href="privacidade.php" target="_blank">Política de Privacidade</a>
          </label>
        </div>

        <button type="submit" name="cadastro" class="btn-cadastrar">
          Criar conta
        </button>
      </form>

      <div class="link-login">
        <p>Já tem uma conta? <a href="index.php">Faça login</a></p>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> Cuidapet Mogi - Todos os direitos reservados</p>
  </footer>

  <script>
    // Indicador de força da senha
    const senhaInput = document.getElementById('senha');
    const strengthBar = document.getElementById('strengthBar');

    senhaInput.addEventListener('input', function() {
      const senha = this.value;
      let strength = 0;

      if (senha.length >= 6) strength++;
      if (senha.length >= 10) strength++;
      if (/[a-z]/.test(senha) && /[A-Z]/.test(senha)) strength++;
      if (/[0-9]/.test(senha)) strength++;
      if (/[^a-zA-Z0-9]/.test(senha)) strength++;

      strengthBar.className = 'password-strength-bar';
      
      if (strength <= 2) {
        strengthBar.classList.add('weak');
      } else if (strength <= 3) {
        strengthBar.classList.add('medium');
      } else {
        strengthBar.classList.add('strong');
      }
    });

    // Validação de confirmação de senha
    const form = document.getElementById('formCadastro');
    const confSenha = document.getElementById('conf_senha');

    form.addEventListener('submit', function(e) {
      if (senhaInput.value !== confSenha.value) {
        e.preventDefault();
        alert('As senhas não coincidem!');
        confSenha.focus();
      }
    });
  </script>
</body>
</html>