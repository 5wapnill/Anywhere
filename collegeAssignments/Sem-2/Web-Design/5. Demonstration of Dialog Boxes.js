function alertDemo() {
    alert("Demonstration of alert dialog box");
}
function confirmDemo() {
    confirm("Demonstration of confirm dialog box");
}
function promptDemo() {
    prompt("Demonstration of prompt dialog box");
}

function login() {
    let uName = document.getElementById("uName").value;
    let pWord = document.getElementById("pWord").value;

    if (uName === "" || pWord === "") {
        alert("please enter Username and Password");
    }
    else {
        if (uName === "Admin" && pWord === "Admin123") {
            alert("Welcome Admin!!!");
        }
        else {
            alert("Sorry!!! Invalid Credentials.");
        }
    }

}