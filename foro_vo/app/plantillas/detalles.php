<div>
<b> Detalles:</b><br>
<table>
<tr><td>Longitud:          </td><td><?= strlen($_REQUEST['comentario']) ?></td></tr>
<tr><td>Nº de palabras:</td><td><? echo str_word_count($_REQUEST['comentario']) ?></td></tr>
<tr><td>Letra + repetida:  </td><td><?echo  letrarepetida($_POST["comentario"]) ?> </td></tr>
<tr><td>Palabra + repetida:</td><td><?echo  palabraRepetida($_POST["comentario"]) ?> </td></tr>
</table>
</div>

