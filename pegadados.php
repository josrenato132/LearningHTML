<?php
printf("<html>\n");
printf("<body>\n");
# Este programa vai ler os valores dos campos do formulário do form.html
# Como o método é POST, será gerado um vetor com nome $_POST[]
# Os índices serão identificados com os NOMES dos campos do form.
# Exibindo os valores de $_POST[]

printf("Primeiro: %s<br>\n",$_POST['c1']);
printf("Segundo: $_POST[c2]<br>\n");
printf("Terceiro: %s<br>\n",$_POST['c3']);
printf("Quarto: %s<br>\n",$_POST['c4']);

printf("</body>\n");
printf("</html>\n");
?>