const btnPaga = document.getElementById("pagamento")
const containerMes = document.querySelector(".sub-mes")
var valorTipo = document.getElementById("tipoPagamento")

    if(btnPaga){

        btnPaga.addEventListener('change',  () =>{
            let valorCampo = btnPaga.value
            
            // Atualiza o valor da forma de pagamento
            valorTipo.value = valorCampo

            if(valorCampo != "Forma de pagamento"){
                containerMes.style.visibility = 'visible'
            } else {
                containerMes.style.visibility = 'hidden'
            }
    })
    
}
