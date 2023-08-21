<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/profile.css">
    <script src="../script/script.js" defer></script>
    <title>Profile</title>
</head>
<body>
    <main>
        <section class="firstSection">
            <div class="contenedorHeader">
                <div class="containerInfinity"><img src="/image/infinity.svg" alt="imagen"></div>
                <p>DevChallenges</p>
            </div>
        </section>
        <section class="secondSection">
            <div class="headerForm">
                <h1>Personal info</h1>
                <p>Basic info, like your name and photo</p>
            </div>
            <div>
                <section class="profileSectionFirst">
                    <div class="profileEdit">
                        <h2>Profile</h2>
                        <p>Some info may be visible to other people</p>
                    </div>
                    <a href="./edit.php"><button>Edit</button></a>
                </section>
                <section class="profileSectionSecond">
                    <div class="containerPhotoProfile">
                        <h4>PHOTO</h4>
                        <div class="contenedorImagen"><img src="#" alt="-"></div>
                    </div>
                    <div class="containerInformation">
                        <h4>NAME</h4>
                        <p>XANTHE NEAL</p>                        
                    </div>
                    <div class="containerInformation">
                        <h4>BIO</h4>
                        <p>I am a software developer and a big fan of devchallenges...</p>
                    </div>
                    <div class="containerInformation">
                        <h4>PHONE</h4>
                        <p>908249274292</p>
                    </div>
                    <div class="containerInformation">
                        <h4>EMAIL</h4>
                        <p>xanthe.neal@gmail.com</p>
                    </div>
                    <div class="containerInformation last">
                        <h4>PASSWORD</h4>
                        <p>**********</p>
                    </div>    
                </section>
            </div>
        </section>
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