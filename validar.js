function Enviar() {
    var nomeInput = document.getElementById('nome');
    var telefoneInput = document.getElementById('telefone');
    var emailInput = document.getElementById('email');
    var avisoNome = document.getElementById('avisoNome');
    var avisoTelefone = document.getElementById('avisoTelefone');
    var avisoEmail = document.getElementById('avisoEmail');
    var emailValue = emailInput.value;

    // Verifica se o nome contém apenas caracteres do tipo letra e tem pelo menos duas letras
   
    var nomeSemEspacos = nomeInput.value.replace(/\s+/g, '');
    var nomeSemNumeros = nomeSemEspacos.replace(/[0-9]/g, '');

    nomeInput.value = nomeSemNumeros;
    avisoNome.textContent = '';

    if (nomeSemNumeros.length < 2) {
      avisoNome.textContent = 'Insira um nome válido.';
      return false;  // Impede o envio do formulário
    }

    // Remove qualquer caractere que não seja número do telefone, verifica se tem 10 numeros e formata
    
    var numero = telefoneInput.value.replace(/\D/g, '');
    telefoneInput.value = `(${numero.slice(0, 2)}) ${numero.slice(2, 11)}`;
    avisoTelefone.textContent = '';

    if (numero.length < 10  || numero.length > 11) {
      avisoTelefone.textContent = 'Insira um telefone válido. DDD + número.';
      return false;
    }

    // Verifica se o e-mail contém '@' e pelo menos um ponto após o '@'

    if (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValue)) {
      avisoEmail.textContent = '';
    } else {
      alert('Por favor, insira um endereço de e-mail válido.');
      avisoEmail.textContent = 'Insira um endereço de e-mail válido.';
      return false;
    }

    // Verifica se todos os campos obrigatórios estão preenchidos

    var camposObrigatorios = document.querySelectorAll('[required]');
    for (var i = 0; i < camposObrigatorios.length; i++) {
      if (!camposObrigatorios[i].value) {
        alert('Preencha todos os campos obrigatórios.');
        return false; 
      }
    }

    // Se for validado exibe um alerta ok com o nome do remetente e redireciona pra página inicial

    alert('Obrigado, ' + nomeSemNumeros + '! Formulário enviado com sucesso!');
    window.location.href = "pagina_inicial.html";
  }

    // Remove espaços em branco nas pontas, substitui espaços multiplos por um só e tira números do nome

  function validarNome(input) {
    input.value = input.value.trim();
    input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
    input.value = input.value.replace(/\s{2,}/g, ' ');
  }

    // Remove qualquer caractere que não seja número e formata

  function formatarTelefone(input) {
    var numero = input.value.replace(/\D/g, '');
    input.value = `(${numero.slice(0, 2)}) ${numero.slice(2, 11)}`;
  }

    // Remove espaços em branco no início e no final do e-mail e atualiza

  function validarEmail(input) {
    var email = input.value.trim();
    input.value = email;
  }