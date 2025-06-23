const botaoSoma = document.getElementById("btnSoma")
const botaoSubtrair = document.getElementById("btnSubtrair")

botaoSoma.addEventListener('click',somar)
botaoSubtrair.addEventListener('click', subtrair)

function somar(){
    const numero1 = document.querySelector("input#number1").value
    const numero2 = document.querySelector("input#number2").value
    const numero1Formatado = parseFloat(numero1)
    const numero2Formatado = parseFloat(numero2)

    const soma = numero1Formatado + numero2Formatado
    
    if (isNaN(numero1Formatado) || isNaN(numero2Formatado)) {
        alert("Digite números válidos!")
        return
    }

    document.querySelector("input#txtResultado").value = soma
}

function subtrair(){
    const numero1 = document.querySelector("input#number1").value
    const numero2 = document.querySelector("input#number2").value
    
    const numero1Formatado = parseInt(numero1)
    const numero2Formatado = parseInt(numero2)

    const subtracao = numero1Formatado - numero2Formatado
    
    if (isNaN(numero1Formatado) || isNaN(numero2Formatado)) {
        alert("Digite números válidos!")
        return
    }
    
    document.querySelector("input#txtResultado").value = subtracao
}

