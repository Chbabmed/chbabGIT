// toogle menu

let toggle = document.querySelector("#content nav .fa-solid");
let sidebar = document.querySelector(".sidebar");
let main = document.querySelector("#content");
let under = document.querySelector("#logo::after");

toggle.onclick = function () {
    sidebar.classList.toggle("active");
    main.classList.toggle("active");
    under.classList.toggle("active");
    
}

// drop down notification 

function menuToggle() {
    const m = document.querySelector(".menu");
    m.classList.add('active');
}

function dropToggle(){
    const m = document.querySelector(".menu");
    m.classList.remove('active');
}

function ProfilToggle() {
    const m = document.querySelector(".ProfileMenu");
    m.classList.add('active');
}

function dropProfileToggle(){
    const m = document.querySelector(".ProfileMenu");
    m.classList.remove('active');
}


var user = document.getElementById('UserList');
var admin = document.getElementById('AdminList');

function UserList() {
    user.style.display = 'block';
    admin.style.display = 'none';
}

function AdminList() {
    admin.style.display = 'block';
    user.style.display = 'none';
}


var activeBtn = document.querySelector('#all_Btn .btn-group .btn');