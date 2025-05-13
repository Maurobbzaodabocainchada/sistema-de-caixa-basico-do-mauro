<?php
$nomeCliente = htmlspecialchars($_POST['nomeCliente']);
$produto1 = $_POST['produto1'];
$valor1 = floatval($_POST['valor1']);
$produto2 = $_POST['produto2'];
$valor2 = floatval($_POST['valor2']);
$valorPago = floatval($_POST['valorPago']);
$total = $valor1 + $valor2;
$troco = $valorPago - $total;
?>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Nota Fiscal</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Nota Fiscal</h1>
<p><strong>Cliente:</strong> <?php echo $nomeCliente; ?></p>
<ul>
<li><?php echo htmlspecialchars($produto1); ?> - R$ <?php echo number_format($valor1, 2, ',', '.'); ?></li>
<li><?php echo htmlspecialchars($produto2); ?> - R$ <?php echo number_format($valor2, 2, ',', '.'); ?></li>
</ul>
<p><strong>Total:</strong> R$ <?php echo number_format($total, 2, ',', '.'); ?></p>
<p><strong>Troco:</strong> R$ <?php echo number_format($troco, 2, ',', '.'); ?></p>
</body>
</html>