
document.body.style.fontFamily = "Arial";
document.body.style.backgroundColor = "#f0f2f5";
document.body.style.padding = "20px";

// ====== INPUT ======
document.body.appendChild(createInput('x'))
document.body.appendChild(createInput('y'))
document.body.appendChild(createResult())

// ====== BUTTON ======
document.body.appendChild(createButton('tambah','+','#4CAF50'))
document.body.appendChild(createButton('kurang','-','#f44336'))
document.body.appendChild(createButton('kali','x','#2196F3'))
document.body.appendChild(createButton('bagi','/','#ff9800'))
document.body.appendChild(createButton('hasil','=','black'))
document.body.appendChild(createButton('hapus','Reset','#9e9e9e'))

// ====== FUNCTION INPUT ======
function createInput(id){
    let input = document.createElement('input');
    input.setAttribute('id', id);
    input.placeholder = "Masukkan angka";
    input.style.margin = "5px";
    input.style.padding = "10px";
    input.style.fontSize = "16px";
    return input;
}

// ====== RESULT ======
function createResult(){
    let result = document.createElement('h2');
    result.setAttribute('id','z');
    result.innerHTML = "Hasil: ";
    return result;
}

// ====== FUNCTION BUTTON ======
function createButton(id, text, color){
    let button = document.createElement('button');
    button.setAttribute('id', id);
    button.innerHTML = text;

    button.style.margin = "5px";
    button.style.padding = "10px 15px";
    button.style.fontSize = "16px";
    button.style.backgroundColor = color;
    button.style.color = "white";
    button.style.border = "none";
    button.style.borderRadius = "5px";
    button.style.cursor = "pointer";

    // EVENT
    button.onclick = function(){
        hitung(id);
    }

    return button;
}

// ====== LOGIKA ======
let operasi = "";

function hitung(id){
    let x = parseFloat(document.getElementById('x').value);
    let y = parseFloat(document.getElementById('y').value);
    let hasil = 0;
}
    if(id === 'tambah') operasi = '+';
    else if(id === 'kurang') operasi = '-';
    else if(id === 'kali') operasi = '*';
    else if(id === 'bagi') operasi = '/';

    else if(id === 'hasil'){
        if(operasi === '+') hasil = x + y;
        else if(operasi === '-') hasil = x - y;
        else if(operasi === '*') hasil = x * y;
        else if(operasi === '/') hasil = x / y;

        document.getElementById('z').innerHTML = "Hasil: " + hasil;
    }

    else if(id === 'hapus'){
        document.getElementById('x').value = "";
        document.getElementById('y').value = "";
        document.getElementById('z').innerHTML = "Hasil: ";
        operasi = "";
    }
