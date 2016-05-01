<?php
$contadorArquivo = 1;
$nomeArquivo = "";
$nomeArquivo .= time() .date('Yhis') .$_FILES["arquivoSelecionado"]["name"];
$arquivo = "uploads/". basename($nomeArquivo);


// Check file size
/**
if ($_FILES["arquivoSelecionado"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}*/
// Allow certain file formats


if ($_FILES["arquivoSelecionado"]["size"] > 50000000000000000000) {
    echo "Desculpa, o arquivo informado é muito grande.";
}else{
// Check if $uploadOk is set to 0 by an error
    if (move_uploaded_file($_FILES["arquivoSelecionado"]["tmp_name"], $arquivo)) {
        echo "The file ". basename( $_FILES["arquivoSelecionado"]["name"]). " has been uploaded.</br>";
    } else {
        echo "Sorry, there was an error uploading your file.</br>";
    }
}
?>