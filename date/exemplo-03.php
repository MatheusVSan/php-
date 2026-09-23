<?php

setlocale(LC_TIME, "pt_BR", "pt_BR.utf-8", "portuguese");

//echo ucwords(strftime("%A %B")); CODIGO ANTIGO
echo (new DateTime())->format('%A %B'); // NOVO

?> 