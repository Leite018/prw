<?php

 $estado = $_GET['estado'];

 switch ($estado) {
    case "acre":
        echo "Rio Branco";
        break;
    case "alagoas":
        echo "Maceió";
        break;
    case "amapá":
        echo "Macapá";
        break;
    case "amazonas":
        echo "Manaus";
        break;
    case "bahia":
        echo "Salvador";
        break;
    case "ceará":
        echo "Fortaleza";
        break;
    case "distrito federal":
        echo "Brasília";
        break;
    case "espírito santo":
        echo "Vitória";
        break;
    case "goiás":
        echo "Goiânia";
        break;
    case "maranhão":
        echo "São Luís";
        break;
    case "mato grosso":
        echo "Cuiabá";
        break;
    case "mato grosso do sul":
        echo "Campo Grande";
        break;
    case "minas gerais":
        echo "Belo Horizonte";
        break;
    case "pará":
        echo "Belém";
        break;
    case "paraíba":
        echo "João Pessoa";
        break;
    case "paraná":
        echo "Curitiba";
        break;
    case "pernambuco":
        echo "Recife";
        break;
    case "piauí":
        echo "Teresina";
        break;
    case "rio de janeiro":
        echo "Rio de Janeiro";
        break;
    case "rio grande do norte":
        echo "Natal";
        break;
    case "rio grande do sul":
        echo "Porto Alegre";
        break;
    case "rondônia":
        echo "Porto Velho";
        break;
    case "roraima":
        echo "Boa Vista";
        break;
    case "santa catarina":
        echo "Florianópolis";
        break;
    case "são paulo":
        echo "São Paulo";
        break;
    case "sergipe":
        echo "Aracaju";
        break;
    case "tocantins":
        echo "Palmas";
        break;
    default:
    echo "Estado inválido";
        break;
}
?>