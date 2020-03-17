const uri = 'http://php.test/test_mysql_poo/server/api';

document.addEventListener('DOMContentLoaded', initComponents);

function initComponents(event){
    console.log('Login ready');    
}

function login(evetn){
    event.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
  
    fetchPost(email, password);  
}

function fetchPost(email, password){
    let url = `${uri}/user/login.php`;

    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

    var urlencoded = new URLSearchParams();
    urlencoded.append("email", email);
    urlencoded.append("password", password);

    const requestOptions = {
        method: 'POST',
        headers: myHeaders,      
        body: urlencoded,
        redirect: 'follow',
        mode: 'cors',
      };
    
    fetch(url, requestOptions).then(res => res.json() )
    .then(response => {
        if(response.ok){
            alert(response.message);
        } else {
            alert("Usuario o contraseña inválidos.");
        }
    })
    .catch(error => console.log('Error:' + error));
}

function signup(event){
    console.log('signup');    
}