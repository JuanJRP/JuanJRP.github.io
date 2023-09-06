function Calcular(){
    let nroPersonas = document.getElementById('nroPersonas').value
    let nroDias = document.getElementById('nroDias').value
    let vlrPersonas = document.getElementById('vlrPersonas').value
    let subtotal = (nroPersonas * vlrPersonas) * nroDias
    document.getElementById('subtotal').value = subtotal
    let descuento = subtotal * 0.10
    document.getElementById('descuento').value = descuento
    let Iva = (subtotal - descuento) * 0.19
    document.getElementById('iva').value = Iva
    let total = subtotal - descuento + Iva
    document.getElementById('total').value = total
}   
