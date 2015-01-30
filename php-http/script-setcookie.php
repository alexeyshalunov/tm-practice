<?php

// Устанавливаем Cookie до конца сессии:
SetCookie("Test","Value");

// Устанавливаем Cookie на один час после установки:
SetCookie("My_Cookie","Value",time()+3600);

?>
