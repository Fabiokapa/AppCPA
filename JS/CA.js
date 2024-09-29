
 // Container Card
    const modalcard = document.querySelector('.conteiner-card-i')


// butão e container  "ALUNO"
    const bnt_aluno = document.getElementById("aluno")
    const modalAluno = document.querySelector(".sub-c-alunos")
        bnt_aluno.addEventListener('click', () =>{
            modalAluno.classList.add("ativar-modal")
            contBuscaProff.classList.remove('extrair')
            contBuscaCurso.classList.remove('extrair')

            //Desabilitar
            modalProff.classList.remove("ativar-modal")
            modalCurso.classList.remove('ativar-modal')
            modalPagamento.classList.remove("ativar-modal")


            modalcard.classList.add("dsprc")

            modalAluno.addEventListener('click', (e) =>{
                if(e.target.id == 'fechar'){
                    modalAluno.classList.remove('ativar-modal')
                    modalcard.classList.remove("dsprc")
                }
            })

        })

        /*
        * Código ativar modal  aluno
        */

        // modal novo "ALUNO"
          const btnNovoAluno = document.getElementById("novo-aluno")
            const subModal_Aluno = document.querySelector(".conteiner-aluno-n")
                btnNovoAluno.addEventListener('click', () =>{
                    subModal_Aluno.classList.add('visivel')

                    subModal_Aluno.addEventListener('click', (e) =>{
                        if(e.target.id == 'fechar'){
                            subModal_Aluno.classList.remove('visivel')
                        }
                    })
                })

                
                // Btn pesquisar alunos 
                const btnPalunos = document.getElementById("buscarAlunos");
                const contBuscaAluno = document.querySelector(".conteiner-buscar")
                   btnPalunos.addEventListener('click', () =>{ 
                       contBuscaAluno.classList.toggle("extrair")
                   })

                // fechar modal pesquisa aluno
                const btnFP_aluno = document.getElementById("fechar-p-aluno")
                   btnFP_aluno.addEventListener('click', () =>{
                        contBuscaAluno.classList.remove("extrair")
                   })

        
        // butão e container  "PROFESSOR"
        const bnt_proff = document.getElementById("professor")
        const modalProff = document.querySelector(".sub-c-proff")
            bnt_proff.addEventListener('click', () =>{
                modalProff.classList.add("ativar-modal")
                contBuscaAluno.classList.remove('extrair')
                contBuscaCurso.classList.remove('extrair')

                //Desabilitar 
                modalAluno.classList.remove("ativar-modal")
                modalCurso.classList.remove("ativar-modal")
                modalPagamento.classList.remove("ativar-modal")

                modalcard.classList.add("dsprc")

                modalProff.addEventListener('click', (e) =>{
                    if(e.target.id == 'fechar'){
                        modalProff.classList.remove('ativar-modal')
                        modalcard.classList.remove("dsprc")
                    }
                })
            })


             //Código ativar modal  professor
            // modal novo "PROFESSOR"

            const btnNovoProff = document.getElementById("novo-proff")
            const subModal_Proff = document.querySelector(".conteiner-proff-n")
            if(btnNovoProff){
                    btnNovoProff.addEventListener('click', () =>{
                        subModal_Proff.classList.add('visivel')

                        subModal_Proff.addEventListener('click', (e) =>{
                        if(e.target.id == 'fechar'){
                            subModal_Proff.classList.remove('visivel')
                        }
                    })
                })
            }

            // Btn pesquisar professor 

            const btnPproff = document.getElementById("buscarProff");
            const contBuscaProff = document.querySelector(".contBusca")
                btnPproff.addEventListener('click', () =>{ 
                    contBuscaProff.classList.toggle("extrair")
            })

            // fechar modal pesquisa proff
            const btnFP_proff = document.getElementById("fechar-p-proff")
            btnFP_proff.addEventListener('click', () =>{
                contBuscaProff.classList.remove("extrair")
            })

            // butão e container  "CURSO"
            const bnt_curso = document.getElementById("curso")
            const modalCurso = document.querySelector(".sub-c-curso")
                bnt_curso.addEventListener('click', () =>{
                    modalCurso.classList.add("ativar-modal")
                    contBuscaAluno.classList.remove('extrair')
                    contBuscaProff.classList.remove('extrair')

                    //Desabilitar 
                    modalAluno.classList.remove("ativar-modal")
                    modalProff.classList.remove("ativar-modal")
                    modalPagamento.classList.remove("ativar-modal")

                    modalcard.classList.add("dsprc")

                    modalCurso.addEventListener('click', (e) =>{
                        if(e.target.id == 'fechar'){
                            modalCurso.classList.remove('ativar-modal')
                            modalcard.classList.remove("dsprc")
                        }
                    })
                })

            /*
            * Código ativar modal  novo curso
            */

            // modal novo "Curso"
            const btnNovoCurso = document.getElementById("novo-curso")
            const subModal_Curso = document.querySelector(".conteiner-curso-n")
            if(btnNovoCurso){
                btnNovoCurso.addEventListener('click', () =>{
                    subModal_Curso.classList.add('visivel')

                    subModal_Curso.addEventListener('click', (e) =>{
                        if(e.target.id == 'fechar'){
                            subModal_Curso.classList.remove('visivel')
                        }
                    })
                })
            }

             /*
            * Código pesquisar curso
            */

            // Btn pesquisar cursos 
            const btnPcurso = document.getElementById("buscarCurso");
            const contBuscaCurso = document.querySelector(".contCurso")
                btnPcurso.addEventListener('click', () =>{ 
                    contBuscaCurso.classList.toggle("extrair")
            })
            

                // fechar modal pesquisa proff
                const btnFP_curso = document.getElementById("fechar-p-curso")
                btnFP_curso.addEventListener('click', () =>{
                    contBuscaCurso.classList.remove("extrair")
                })

             // butão e container  "PAGAMENTO"
             const bnt_pagamento = document.getElementById("Pagamento")
             const modalPagamento = document.querySelector(".sub-c-pagamento")
                bnt_pagamento.addEventListener('click', () =>{
                    modalPagamento.classList.add("ativar-modal")

                    //Desabilitar
                    modalAluno.classList.remove("ativar-modal")
                    modalProff.classList.remove("ativar-modal")
                    modalCurso.classList.remove('ativar-modal')

                    
                    modalcard.classList.add("dsprc")
 
                     modalPagamento.addEventListener('click', (e) =>{
                         if(e.target.id == 'fechar'){
                            modalPagamento.classList.remove('ativar-modal')
                            modalcard.classList.remove("dsprc")
                         }
                     })
                 })

                 /*Pagameno*/

                // Btn pesquisar cursos 
                const btnPPaga = document.getElementById("buscarPago");
                const contBuscaPaga = document.querySelector(".contPagameto")
                btnPPaga.addEventListener('click', () =>{ 
                    contBuscaPaga.classList.toggle("extrair")
                })
            

                // Fechar modal pesquisa pagamento
                const btnFP_pagamento = document.getElementById("fechar-p-pago")
                    btnFP_pagamento.addEventListener('click', () =>{
                        contBuscaPaga.classList.remove("extrair")
                    })




              

