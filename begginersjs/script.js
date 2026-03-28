// ===== VARIABLES =====
let name1 = "Jamuna";
let age1 = 19;
const pi = 3.14;

console.log(name1, age1, pi);

// ===== FUNCTIONS =====
function arithmetic(a, b) {
    console.log("Add:", a + b);
    console.log("Sub:", a - b);
    console.log("Mul:", a * b);

    if (b !== 0) {
        console.log("Div:", a / b);
    } else {
        console.log("Division not possible");
    }
}

let a = Number(prompt("Enter number 1"));
let b = Number(prompt("Enter number 2"));
arithmetic(a, b);

// ===== ARROW FUNCTIONS =====
const add = (x, y) => x + y;
console.log("Arrow Add:", add(5, 3));

// ===== USER INPUT =====
let user = prompt("Enter your name");
if (user) {
    alert("Hello " + user);
}

// ===== DOM MANIPULATION =====
function changeText() {
    let el = document.getElementById("text");
    el.innerHTML = "Text Changed!";
    el.style.color = "red";
}

function undoChange() {
    let el = document.getElementById("text");
    el.innerHTML = "Arrays are lists of values.";
    el.style.color = "black";
}

function addText() {
    let p = document.createElement("p");
    p.innerHTML = "New text added!";
    document.getElementById("container").appendChild(p);
}

function removeText() {
    let container = document.getElementById("container");
    if (container.lastChild) {
        container.removeChild(container.lastChild);
    }
}

// ===== STYLING =====
function applyStyle() {
    let el = document.getElementById("task5");
    el.style.color = "blue";
}

function toggleStyle() {
    document.getElementById("task5").classList.toggle("myStyle");
}

// ===== EVENTS =====
document.addEventListener("DOMContentLoaded", function () {
    let box = document.getElementById("hover");

    box.addEventListener("mouseover", function () {
        box.style.backgroundColor = "yellow";
        box.innerHTML = "Mouse Over";
    });

    box.addEventListener("mouseout", function () {
        box.style.backgroundColor = "lightgray";
        box.innerHTML = "Hover over me";
    });

    let form = document.getElementById("myForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        let name = document.getElementById("name").value;
        let age = document.getElementById("age").value;
        let email = document.getElementById("email").value;

        if (!name || !age || !email) {
            alert("Fill all fields");
            return;
        }

        document.getElementById("result").innerHTML =
            "Name: " + name + "<br>Age: " + age + "<br>Email: " + email;
    });
});

// ===== PRINT =====
function printPage() {
    window.print();
}