function cred_check(){
  if(localStorage.getItem("ac_cred") === 'True'){
    document.getElementById('username').value = localStorage.getItem('ac_user');
    document.getElementById('password').value = localStorage.getItem('ac_pass');
    console.log('Credentials Pulled...');
  }
}