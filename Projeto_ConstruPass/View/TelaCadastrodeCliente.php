<?php

    session_start();
    require '../Model/conexao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/StyleCliente.css">
  <title>Tela de Cadastro de Cliente</title>

<script>
    class Validator {

      constructor() {
        this.validations = [
          'data-min-length',
          'data-max-length',
          'data-only-letters',
          'data-email-validate',
          'data-required',
          'data-equal',
          'data-password-validate',
        ]
      }

      // inicia a validação de todos os campos
      validate(form) {

        // limpa todas as validações antigas
        let currentValidations = document.querySelectorAll('form .error-validation');

        if (currentValidations.length) {
          this.cleanValidations(currentValidations);
        }

        // pegar todos inputs
        let inputs = form.getElementsByTagName('input');
        // transformar HTMLCollection em arr
        let inputsArray = [...inputs];

        // loop nos inputs e validação mediante aos atributos encontrados
        inputsArray.forEach(function(input, obj) {

          // fazer validação de acordo com o atributo do input
          for (let i = 0; this.validations.length > i; i++) {
            if (input.getAttribute(this.validations[i]) != null) {

              // limpa string para saber o método
              let method = this.validations[i].replace("data-", "").replace("-", "");

              // valor do input
              let value = input.getAttribute(this.validations[i])

              // invoca o método
              this[method](input, value);
            }
          }

        }, this);
      }

      // método para validar se tem um mínimo de caracteres
      minlength(input, minValue) {

        let inputLength = input.value.length;

        let errorMessage = `O campo precisa ter pelo menos ${minValue} caracteres`;

        if (inputLength < minValue) {
          this.printMessage(input, errorMessage);
        }
      }

      // método para validar se passou do máximo de caracteres
      maxlength(input, maxValue) {
        let inputLength = input.value.length;

        let errorMessage = `O campo precisa ter menos que ${maxValue} caracteres`;

        if (inputLength > maxValue) {
          this.printMessage(input, errorMessage);
        }
      }

      // método para validar strings que só contem letras
      onlyletters(input) {

        let re = /^[A-Za-z]+$/;;

        let inputValue = input.value;

        let errorMessage = `Este campo não aceita números nem caracteres especiais`;

        if (!re.test(inputValue)) {
          this.printMessage(input, errorMessage);
        }
      }

      // método para validar e-mail
      emailvalidate(input) {
        let re = /\S+@\S+\.\S+/;

        let email = input.value;

        let errorMessage = `Insira um e-mail no padrão matheus@email.com`;

        if (!re.test(email)) {
          this.printMessage(input, errorMessage);
        }
      }

      // verificar se um campo está igual o outro
      equal(input, inputName) {
        let inputToCompare = document.getElementsByName(inputName)[0];

        let errorMessage = `Este campo precisa estar igual ao ${inputName}`;

        if (input.value != inputToCompare.value) {
          this.printMessage(input, errorMessage);
        }
      }

      // método para exibir inputs que são necessários
      required(input) {

        let inputValue = input.value;

        if (inputValue === '') {
          let errorMessage = `Este campo é obrigatório`;

          this.printMessage(input, errorMessage);
        }
      }

      // validando o campo de senha
      passwordvalidate(input) {

        // explodir string em array
        let charArr = input.value.split("");

        let uppercases = 0;
        let numbers = 0;

        for (let i = 0; charArr.length > i; i++) {
          if (charArr[i] === charArr[i].toUpperCase() && isNaN(parseInt(charArr[i]))) {
            uppercases++;
          } else if (!isNaN(parseInt(charArr[i]))) {
            numbers++;
          }
        }

        if (uppercases === 0 || numbers === 0) {
          let errorMessage = `A senha precisa um caractere maiúsculo e um número`;

          this.printMessage(input, errorMessage);
        }
      }

      // método para imprimir mensagens de erro
      printMessage(input, msg) {

        // checa os erros presentes no input
        let errorsQty = input.parentNode.querySelector('.error-validation');

        // imprimir erro só se não tiver erros
        if (errorsQty === null) {
          let template = document.querySelector('.error-validation').cloneNode(true);

          template.textContent = msg;

          let inputParent = input.parentNode;

          template.classList.remove('template');

          inputParent.appendChild(template);
        }
      }

      // remove todas as validações para fazer a checagem novamente
      cleanValidations(validations) {
        validations.forEach(el => el.remove());
      }

      let form = document.getElementById('register-form');
      let submit = document.getElementById('btn-submit');

      let validator = new Validator();

      // evento de envio do form, que valida os inputs
      submit.addEventListener('click', function(e) {
        e.preventDefault();

        validator.validate(form);
      });
      var password = document.getElementById("senhacliente"),
        confirm_password = document.getElementById("senhaconfirmadacliente");

      function validatePassword() {
        if (password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Senhas diferentes!");
        } else {
          confirm_password.setCustomValidity('');
        }
      }

      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;

  </script>





<body>

   <div>
   
      <?php
        if(isset($_SESSION['erro'])){
          echo $_SESSION['erro'];
          unset($_SESSION['erro']);
        }
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        if(isset($_SESSION['cadastrado'])){
          echo $_SESSION['cadastrado'];
          unset($_SESSION['cadastrado']);
        }
      
      ?>
    </div>

    <div id="main-container">
      <h1>CADASTRE-SE</h1>
      <form id="register-form" action="cadastrarClient.php" method="POST">
        <div class="half-box spacing">
          <label for="name">Nome Completo</label>
          <input type="text" name="nomeCliente" id="nomeCliente" placeholder="Digite seu nome completo" data-required data-min-length="3" data-max-length="16">
        </div>
        <div class="half-box">
          <label for="cpf">CPF</label>
          <input type="text" name="cpfCliente" id="cpfCliente" placeholder="Digite o seu CPF" maxlength="14" data-required>
        </div>
        <div class="half-box spacing">
          <label for="uf">UF</label>
          <select name="uf">
            <option value="null" selected="selected"></option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
            <option value="DF">DF</option>

          </select>
        </div>
        <div class="half-box">
          <label for="rg">RG</label>
          <input type="text" name="rgCliente" id="rgCliente" placeholder="Digite o seu RG" maxlength="12" data-password-validate data-required>
        </div>
        <div class="half-box spacing">
          <label for="telefone">Telefone</label>
          <input type="text" name="telefoneCliente" id="telefoneCliente" placeholder="Digite número do seu Telefone" maxlength="14" data-password-validate data-required>

        </div>
        <div class="half-box">
          <label for="celular">Celular</label>
          <input type="text" name="celularCliente" id="celularCliente" placeholder="Digite o número do seu Celular" maxlength="15" data-equal="password">
        </div>
        <div class="half-box spacing">
          <label for="cep">CEP</label>
          <input type="text" name="cepCliente" id="cepCliente" placeholder="Digite o seu CEP" maxlength="10" data-equal="password">
        </div>
        <div class="half-box">
          <label for="email">E-mail</label>
          <input type="email" name="emailCliente" id="emailCliente" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
        </div>
        <div class="half-box spacing">
          <label for="endereco">Endereço Completo</label>
          <input type="text" name="enderecoCliente" id="enderecoCliente" placeholder="Digite seu endereço" data-password-validate data-required>
        </div>
        <div class="half-box">
          <label for="numerocasa">N°</label>
          <input type="text" name="numeroCasaCliente" id="numeroCasaCliente" placeholder="numero da sua casa" maxlength="4" data-equal="password">
        </div>
        <div class="half-box spacing">
          <label for="senha">Senha</label>
          <input type="password" name="senhaCliente" id="senhaCliente" placeholder="Digite sua senha" minlength="10" data-password-validate data-required>
        </div>
        <div class="half-box">
          <label for="senhaconfirmada">Confirmação de senha</label>
          <input type="password" name="senhaConfirmadaCliente" id="senhaConfirmadaCliente" placeholder="Digite novamente sua senha" minlength="10" data-equal="password">
        </div>

        <div>
          <input type="checkbox" name="agreement" id="agreement">
          <label for="agreement" id="agreement-label">Eu li e aceito os <a href="X">termos de uso</a></label>
        </div>
        <div class="full-box">
          <input id="btn-submit" type="submit" color="#ff0000" value="Registrar-se">
        </div>
      </form>
    </div>
    <p class="error-validation template"></p>
    <script src="js/scripts.js"></script>
  </body>

  </html>
</body>

</html>