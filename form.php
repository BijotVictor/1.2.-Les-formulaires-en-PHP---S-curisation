fichier form.php :

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
        <label  for="lastname">Nom :</label>
        <input  type="text"  id="lastname"  name="user_lastname">
    </div>
    <div>
        <label  for="name">Prénom :</label>
        <input  type="text"  id="name"  name="user_name">
    </div>
    <div>
        <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <div>
        <label  for="phoneNumber">Numéro de téléphone :</label>
        <input  type="tel"  id="phoneNumber"  name="user_phoneNumber">
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <select id="subject" name="user_subject">
            <option value="krunker">krunker</option>
            <option value="skribbl">skribbl</option>
            <option value="bombparty">bombparty</option>
            <option value="popsauce">popsauce</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>
</body>
</html>