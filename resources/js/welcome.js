document.getElementById('btn1').addEventListener('click', function(){
    nuevoTitulo = prompt('Que nombre le das a nuestra mascota');
    document.getElementById('t2').innerHTML = nuevoTitulo;
    document.getElementById('t2').style.color = 'white';
});
