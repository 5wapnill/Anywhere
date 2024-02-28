function uChange() {
    document.getElementById("uName").style = "background-color: #d9b3ff;";
}
function uChangeBack() {
    document.getElementById("uName").style = "background-color: #ffffff;";
}
function pChange() {
    document.getElementById("pWord").style = "background-color: #d9b3ff;";
}
function pChangeBack() {
    document.getElementById("pWord").style = "background-color: #ffffff;";
}
function onpress(){
    document.getElementById("typing").style = ("background-color: #abfabc;color: rgb(0, 0, 0); transition: color 1ms, background-color 1ms;");
}
function onup()
{
    document.getElementById("typing").style = ("background-color: #000000; color:#000000; transition: color 2s, background-color 2s;");
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