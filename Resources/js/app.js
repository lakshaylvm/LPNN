const login_button = document.getElementById('pp');
const signup_button = document.getElementById('up');

const login_area = document.getElementById('log');
const signup_area = document.getElementById('signups');

const areaBlur = document.getElementById('blur');

const logInLink = document.getElementById('signup-bttn');
const signUpLink =document.getElementById('logs');

const toggleLink = () =>{
    login_area.classList.toggle('visible');
    signup_area.classList.toggle('visible');
}
const removeDiv = function(){
    login_area.classList.remove('visible');
    signup_area.classList.remove('visible');
    areaBlur.classList.remove('visible');
};

const toggle_blur = function(){
    areaBlur.classList.toggle('visible');
};


const toggle_signup = function(){
    signup_area.classList.toggle('visible');
    toggle_blur();
};

const toggle_login = function(){
    login_area.classList.toggle('visible');
    toggle_blur();    
};

login_button.addEventListener('click',toggle_login);

signup_button.addEventListener('click',toggle_signup);

areaBlur.addEventListener('click',removeDiv);
logInLink.addEventListener('click',toggleLink);
signUpLink.addEventListener('click' , toggleLink);


// function Validate() {
//     var password = document.getElementById("password").value;
//     var confirmPassword = document.getElementById("txtConfirmPassword").value;
//     if (password != confirmPassword) {
//         alert("Passwords do not match.");
//         return false;
//     }
//     return true;
// }
// var tunnu = document.getElementById('thuk');
// tunnu.addEventListener('click',Validate());