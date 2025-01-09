<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Contactez-nous</h1>
    </header>

    <main>
        <section class="contact-form">
            <h2>Envoyez-nous un message</h2>
            <?php if (isset($message_success)): ?>
                <p class="success"><?php echo $message_success; ?></p>
            <?php elseif (isset($message_error)): ?>
                <p class="error"><?php echo $message_error; ?></p>
            <?php endif; ?>

            <form action="C_contact.php" method="POST">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Votre Entreprise. Tous droits réservés.</p>
    </footer>
</body>
</html>

<style>
    /* Styles généraux */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
}

header {
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 20px 0;
}

main {
    margin: 20px;
}

h1, h2 {
    margin-bottom: 20px;
}

.contact-info, .contact-form {
    margin-bottom: 40px;
}

.contact-info {
    background: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.contact-form form {
    background: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 4px;
}

button:hover {
    background-color: #45a049;
}

/* Footer */
footer {
    text-align: center;
    margin-top: 40px;
    padding: 10px;
    background-color: #333;
    color: white;
}

</style>