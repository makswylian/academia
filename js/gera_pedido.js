function setarTotal(
){
    qtd = document.getElementById("quantidade").value ;
    vlru = document.getElementById("vlr_unit").value ;
    total = qtd * vlru;
    
    document.getElementById("vlr_total").value = total ;
}