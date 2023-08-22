<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/edit.css">
    <script src="../script/script.js" defer></script>
    <title>CHANGE INFORMATION</title>
</head>

<body>
    <main>
        <section class="firstSection">
            <div class="contenedorHeader">
                <div class="containerInfinity"><img src="/image/infinity.svg" alt="imagen"></div>
                <p>DevChallenges</p>
            </div>
        </section>
        <div class="contenedorprueba2">
            <div class="ctparrafo"> <a href="/views/profile.php">&lt; Back</a></div>
            <section class="secondSection">
                <div class="headerForm">
                    <h1>Change info</h1>
                    <p>Changes will be reflected to every services</p>
                </div>
                <div>
                    <section class="profileSectionSecond">
                        <div class="containerPhotoProfile">
                            <div class="contenedorImagen"><img src="#" alt="-"></div>
                            <h4 class="fotoedit">CHANGE PHOTO</h4>
                        </div>
                        <div class="form">
                            <form action="POST">
                                <div class="containerInformation">
                                    <label for="nombre">NAME</label>
                                    <input type="text" value="XANTHE NEAL" id="nombre" placeholder="Enter your name">
                                </div>
                                <div class="containerInformation bio">
                                    <label for="Bio">BIO</label>
                                    <input class="biogra" id="Bio" type="text" value="I am a software developer and a big fan of 
                                    devchallenges..." placeholder="Enter your bio..">

                                </div>
                                <div class="containerInformation">
                                    <label for="phone">PHONE</label>
                                    <input type="text" value="908249274292" id="phone" placeholder="Enter your phone...">
                                </div>
                                <div class="containerInformation">
                                    <label for="mail">EMAIL</label>
                                    <input id="mail" type="email" value="xanthe.neal@gmail.com" placeholder="Enter your email...">
                                </div>
                                <div class="containerInformation last">
                                    <label for="psw">PASSWORD</label>
                                    <input id="psw" type="text" value="*********" placeholder="Enter your new password">
                                </div>
                                <button class="btnSave">Save</button>
                            </form>
                        </div>

                    </section>
                </div>
            </section>
        </div>

        <section class="thirdSection">
            <div class="contenedorToogle">
                <div class="contImg"><img src="#" alt="-"></div>
                <div class="dropdown">
                    <button id="dropdownBtn" class="dropdown-button">
                        Profile Name <span class="arrow">&#9660;</span>
                    </button>
                    <div id="dropdownContent" class="dropdown-content">
                        <a href="#">Perfil</a>
                        <a href="#">Chat Group</a>
                        <a href="#">Log Out</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>