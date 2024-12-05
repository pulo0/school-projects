function countGas() {
    type = document.getElementById('type').value;
    amount = document.getElementById('amount').value;
    par = document.getElementById('par');
    gasPrice = 0
    result = 0

    if (type == 1) {
        gasPrice = 4
        result = gasPrice * amount
    } 
    
    if (type == 2) {
        gasPrice = 3.5
        result = gasPrice * amount
    }

    par.innerHTML = `koszt paliwa: jest ${result}zł`;
}