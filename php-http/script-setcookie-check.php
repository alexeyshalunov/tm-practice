<?php

// Устанавливаем Cookie до конца сессии:

// В случае успешной установки Cookie, функция SetCookie возвращает TRUE:
if (SetCookie("Test","Value"))
echo "<h3>Cookies успешно установлены!</h3>";

?>