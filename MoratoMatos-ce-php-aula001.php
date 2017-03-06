 
 <!DOCTYPE html>
 
 <head>
<meta charset="utf-8">
<title>PHP - Atividade 01</title>
</head>
 
 <h1 align="center"> PHP - Atividade 01</h1> 
 <p  align="center">Considerando que A seja igual a 10 e B seja igual a 20, eis os seguintes cálculos:</p>
 
<table align="center" WIDTH="1000" CELLSPACING="2" CELLPADDING="10" BORDER="1" >
   
   <th>Operação</th> <th>Resultado</th>
   <tr> <td align="center"> A+B </td>  <td align="center"> <?php $numero1 = 10; $numero2 = 20; $total; $total = $numero1 + $numero2;     echo $total; ?> </td> <tr> 
   <tr> <td align="center"> A-B </td>  <td align="center"> <?php $numero1 = 10; $numero2 = 20; $total; $total = $numero1 - $numero2;     echo $total; ?> </td> <tr>
   <tr> <td align="center"> A*B </td>  <td align="center"> <?php $numero1 = 10; $numero2 = 20; $total; $total = $numero1 * $numero2;     echo $total; ?> </td> <tr> 
   <tr> <td align="center"> A/B </td>  <td align="center"> <?php $numero1 = 10; $numero2 = 20; $total; $total = $numero1 / $numero2;     echo $total; ?> </td> <tr> 
   <tr> <td align="center"> Bª  </td>  <td align="center"> <?php $numero1 = 10; $numero2 = 20; $total; $total = pow ($numero2,$numero1); echo number_format($total, 2, '', '.'); ?> </td> <tr> 
    
</table>







