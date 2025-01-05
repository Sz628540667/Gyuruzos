
function bejelentkezes(){
    let felh=localStorage.getItem("felhasznalonev");
if(felh!=='')
{
    document.getElementById("bejgli").textContent = felh;
    document.getElementById("bej").href="kijelentkezes.php";
    document.getElementById("bejkep").style.border="0px";
}
else
{
    document.getElementById("bejgli").textContent = "";
    document.getElementById("bej").href="bejelentkezes.html";
    document.getElementById("bejkep").style.border="2px solid black";
}

}
function adatbevitel(){
    window.location.href="adatbevitel.html";
}
function adatlistazas(){
    window.location.href="adatlistazas.html";
}
function kiemel(id,szin) {
    document.getElementById(id).style.color=szin;
}
function visszaemel(id,szin) {
    document.getElementById(id).style.color=szin;

}
function kiemelb(id,szin) {
    document.getElementById(id).style.border="3px solid "+szin;
}
function visszaemelb(id,szin) {
    document.getElementById(id).style.border="3px solid "+szin;

}