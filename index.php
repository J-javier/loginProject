<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/register.css">
    <title>Registrer page</title>
</head>
<body>
    <main>
        <section class="sectionOne">
            <div class="contenedorHeader">
                <div class="containerInfinity"><img src="/image/infinity.svg" alt="imagen"></div>
                <p>DevChallenges</p>
            </div>
            <h2>Join thousands of learners from around the world</h2>
            <h3>Master web development by making real-life projects. There are multiple paths for you to choose</h3>
        </section>
        <section class="sectionTwo">
            <form action="./views/profile.php" method="post" class="formulario">
                <div class="containerInput">
                    <div class="contenedorImagen"><img src="/image/envelope-fill.svg" alt="imagen"></div>
                    <input type="text" placeholder="Email" name="email">
                </div>
                <div class="containerInput">
                    <div class="contenedorImagen"><img src="/image/lock.svg" alt="imagen"></div>
                    <input type="text" placeholder="Password" name="pwd">
                </div>
                <button type="submit">Start coding now</button>
            </form>
        </section>
        <section class="sectionThree">
            <p>or continue with these social profile</p>
            <div class="imagenSocialMedia">
                <div class="containerLogos"><img src="/image/google.svg" alt="Google"></div>
                <div class="containerLogos"><img src="/image/facebook.svg" alt="Facebook"></div>
                <div class="containerLogos"><img src="/image/twitter.svg" alt="Twitter"></div>
                <div class="containerLogos"><img src="/image/github.svg" alt="Github"></div>
            </div>
            <p>Adready a member? <a href="/views/login.php">Login</a></p>
        </section>
    </main>
</body>
</html>