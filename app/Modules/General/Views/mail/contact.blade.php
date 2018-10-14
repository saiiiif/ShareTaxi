<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Formulaire de Contact</h2>

<div>
    <p>Nom : {{ $name }}</p><br>
    <p>Email : {{ $email }}</p><br>
    <p>Suject : {{ $subject }}</p><br>
    <p>Message : {!!  $messages !!}</p><br>

</div>

</body>
</html>
