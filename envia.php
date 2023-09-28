<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    // Validar se os campos estão preenchidos
    if (empty($nome) || empty($email) || empty($celular) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        $para = "hosianigor18@gmail.com";
        $assunto = "Mensagem enviada do site";

        $corpo = "Nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "Celular: " . $celular . "\n" . "Mensagem: " . $mensagem;

        $cabecalho = "From: hosiantutoriais123321@gmail.com" . "\r\n" .
                     "Reply-To: " . $email . "\r\n" .
                     "X-Mailer: PHP/" . phpversion();

        // Enviar o e-mail
        if (mail($para, $assunto, $corpo, $cabecalho)) {
            echo "E-mail enviado com sucesso";
        } else {
            echo "Houve um erro ao enviar o e-mail";
        }
    }
} else {
    echo "Este script deve ser acessado por meio de um formulário POST.";
}
?>
