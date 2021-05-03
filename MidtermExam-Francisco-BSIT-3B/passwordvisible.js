function viewPassword()
{
  var passwordInput = document.getElementById('password-field');
  var passStatus = document.getElementById('togglePassword');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='far fa-eye-slash';
  }
  else{
    passwordInput.type='password';
    passStatus.className='far fa-eye';
  }
}

function viewPassword1()
{
  var passwordInput = document.getElementById('password-field1');
  var passStatus = document.getElementById('togglePassword1');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='far fa-eye-slash';
  }
  else{
    passwordInput.type='password';
    passStatus.className='far fa-eye';
  }
}