<!-- resources/views/emails/contact.blade.php -->

<!DOCTYPE html>

<html>

<head>

    <title>Novo contacto</title>

</head>

<body>

<p>Olá admin, recebeu um novo contacto no seu website.</p>

<b>Nome:</b> {{ $data['name'] }}<br/>
<b>Email:</b> {{ $data['email'] }}<br/>
<b>Telefone:</b> {{ $data['phone'] }}<br/>
<b>Localidade:</b> {{ $data['local'] }}<br/>
<b>Tipo:</b> {{ $data['type'] }}

</body>

</html>