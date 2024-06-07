document.getElementById('login-form').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission to server
  
  var username = document.getElementById('username').value.trim();
  
  if (username !== 'padding:') {
    alert('Jawaban anda salah');
  } else {
    window.location.href = '/Level3 2'; // Redirect to another HTML page or route
  }
});

document.getElementById('login-form').addEventListener('keydown', function(event) {
  if (event.key === 'Enter') {
    event.preventDefault(); // Prevent default form submission on Enter
    document.getElementById('login-button').click(); // Programmatically click the login button
  }
});
