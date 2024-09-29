const btnAluno = document.getElementById("bucarAluno")
const valorAluno = document.getElementById("campoAluno")
 
    if(btnAluno){
        btnAluno.addEventListener('click', (e) =>{
            e.preventDefault();
    
            var valor = valorAluno.value
      
            if(valor){
      
                $.ajax({
                  type: "POST",
                  url: "../pesquisa/buscarAlunos.php",
                  data: { valor: valor },
                  success: function (data) {
                      $("#ResultBuscarAluno").html(data);
                  }
              });
              }
        })
    }


    const btnProff = document.getElementById("buscarProf")
    const valorProff = document.getElementById("campoProf")

    if(btnProff){
        btnProff.addEventListener('click', (e) =>{
            e.preventDefault();
            var valor = valorProff.value
      
            if(valor){
      
                $.ajax({
                  type: "POST",
                  url: "../pesquisa/buscarProff.php",
                  data: { valor: valor },
                  success: function (data) {
                      $("#ResultBuscarProff").html(data);
                  }
              })
              }
        })
    }

    const btnCurso = document.getElementById("btnCurso")
    const valorCurso = document.getElementById("campoCurso")

    if(btnCurso){
        btnCurso.addEventListener("click" , (e) =>{
            e.preventDefault();

            let valor = valorCurso.value

            if(valor){
                $.ajax({
                    type: "POST",
                    url: "../pesquisa/buscarCurso.php",
                    data: { valor : valor},
                    success: function (data) {
                        $("#ResultBuscarCurso").html(data)
                    }
                })
            }
        })
    }


    const btnAP = document.getElementById("btnPagamento")
    const valorPagamento = document.getElementById("campoAlunPaga")

    if(btnAP){
        btnAP.addEventListener("click" , (e) =>{
            e.preventDefault();

            let valor = valorPagamento.value

            if(valor){
                $.ajax({
                    type: "POST",
                    url: "../pesquisa/buscarAP.php",
                    data: { valor : valor},
                    success: function (data) {
                        $("#ResultBuscarPagamento").html(data)
                    }
                })
            }
        })
    }
    