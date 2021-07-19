let sucess = document.querySelector("#success");
let emailCliente = document.querySelector("#emailCliente");
let pin = document.querySelector("#pint");
let senhaCliente = document.querySelector("#senhaCliente");
let senhaConfirmadaCliente = document.querySelector("#senhaConfirmadaCliente");

function mensagem(){

    if(emailCliente == true && pin == true && senhaCliente == true && senhaConfirmadaCliente == true)
    {
        $("#sucess").removeClass('hidden');
    }
}