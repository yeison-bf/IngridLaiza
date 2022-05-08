function SeleccionFigura(){
    let figuraSeleccionada = (document.getElementById('seleccionFigura').value);

    if(figuraSeleccionada == 'Circulo'){
        $('#ModuloCirdulo').show();
        $('#ModuloCuadrado').hide();
    }

    if(figuraSeleccionada == 'Cuadrado'){
        $('#ModuloCuadrado').show();
        $('#ModuloCirdulo').hide();

    }
}