// script.js
const contactForm = document.getElementById('contact-form');

contactForm.addEventListener('submit', function(event) {
  event.preventDefault();

  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const message = document.getElementById('message').value;

  const data = {
    name: name,
    email: email,
    message: message
  };

  axios.post('enviar-email.php', data)
    .then(function(response) {
      // Lógica para lidar com a resposta do envio do email
      console.log(response);
      // Exibir uma mensagem de sucesso ou redirecionar para outra página, por exemplo
    })
    .catch(function(error) {
      // Lógica para lidar com erros no envio do email
      console.log(error);
      // Exibir uma mensagem de erro ou tomar alguma ação adequada
    });
});
