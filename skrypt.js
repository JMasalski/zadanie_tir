
baseURL = 'http://localhost/zadanie_tir/';

window.onload = () =>{
    lokalizacje()
    tabela()
    opcje()
    document.querySelector('#dodaj_baza').addEventListener("click", dodaj_baza);
}

function lokalizacje(){
    let url = "lokalizacje.php";
    const xhr = new XMLHttpRequest();
    xhr.open("GET", url);

    xhr.onload = () => {
        if(xhr.status != 200){
            console.log(`Błąd połączenia ${xhr.status}`);
            }
        else{
            document.querySelector("#lista").innerHTML = xhr.response;
        }
    }
    xhr.send();
}

function opcje(){
    let url = "opcje.php";
    const xhr = new XMLHttpRequest();
    xhr.open("GET", url);

    xhr.onload = () => {
        if(xhr.status != 200){
            console.log(`Błąd połączenia ${xhr.status}`);
            }
        else{
            document.querySelector("#lokalizacja").innerHTML = xhr.response;
        }
    }
    xhr.send();
}


function tabela(){

    
    let url = "tabela.php";
    const xhr = new XMLHttpRequest();
    xhr.open("GET", url);

    xhr.onload = () => {
        if(xhr.status != 200){
            console.log(`Błąd połączenia ${xhr.status}`);
            }
        else{
            document.querySelector("#tabela").innerHTML = xhr.response;
        }
    }
    xhr.send();
}

function dodaj_baza(){
    const lokalizacja = document.querySelector('#lokalizacja').value;
    const waga = document.querySelector('#waga').value;
    const rejestracja = document.querySelector('#rejestracja').value;
    const dzien = document.querySelector('#dzien').value;
    const czas = document.querySelector('#czas').value;

    console.log(lokalizacja, waga, rejestracja, dzien, czas);
    let url = "dodaj_baza.php";

    let param = new FormData();
    param.append('lokalizacja', lokalizacja);
    param.append('waga', waga);
    param.append('rejestracja', rejestracja);
    param.append('dzien', dzien);
    param.append('czas', czas);


    const xhr = new XMLHttpRequest();
    xhr.open("POST", url);
    

    xhr.onload = () => {
        if (xhr.status != 200) {
            console.log(`Błąd połączenia ${xhr.status}`);
        } else {
            console.log(xhr.response);
        }
    }
   

    xhr.send(param);
    setTimeout(() => {
        window.location.reload();
    }, 10000);
 }

