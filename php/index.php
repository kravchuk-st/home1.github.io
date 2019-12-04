
<meta charset="utf-8"> 
<?php
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['validationDefault01']))		{$validationDefault01		= $_POST['validationDefault01'];		if ($validationDefault01 == '')	{unset($validationDefault01);}}
if (isset($_POST['validationDefault02']))		{$validationDefault02		= $_POST['validationDefault02'];		if ($validationDefault02 == '')	{unset($validationDefault02);}}
if (isset($_POST['FormControl']))				{$FormControl				= $_POST['FormControl'];				if ($FormControl == '')			{unset($FormControl);}}
if (isset($_POST['FormControl']))				{$FormControl				= $_POST['FormControl'];				if ($FormControl == '')			{unset($FormControl);}}

//стирание треугольных скобок из полей формы
if (isset($validationDefault01) ) {
$validationDefault01=stripslashes($validationDefault01);
$validationDefault01=htmlspecialchars($validationDefault01);
}
if (isset($validationDefault02) ) {
$validationDefault02=stripslashes($validationDefault02);
$validationDefault02=htmlspecialchars($validationDefault02);
}
if (isset($FormControl) ) {
$FormControl=stripslashes($FormControl);
$FormControl=htmlspecialchars($FormControl);
}
// адрес почты куда придет письмо
$address="qkp@ukr.net";
// текст письма 
$note_text="First name: $validationDefault01 \r\n Last name: $validationDefault02 \r\n Message: $FormControl";

if (isset($validationDefault01)) {
mail($address,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
echo "<p style='color:#0f55f1;'>Thank you for your message.</p>";
}

?>