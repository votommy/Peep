<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Peep</title>
        <link rel="shortcut icon" href="image/Logo.ico" type="image/x-icon" />
        <link rel="stylesheet" href="SignUp.css" />
    </head>
    <body>
        <main>
            <article>
                <section id="banner">
                    <div class="bannerText">
                        <img id="logo" src="image/WhiteLogo.png" alt="Peep's official logo." />
                        <br><br>
                        <span id="message">Be the first to know when Peep is available.</span>
                        <br>
                        <form action="insertEmail.php" method="POST">
                            <input class="textBox" type="text" placeholder="email address" name="emailAddress" /><input id="button" type="submit" value="Submit">
                        </form>
                        <br>
                        <span id="downArrow"></span>
                    </div>
                </section>
                
                <div class="container">
                    <section id="aboutUs">
                        <h2>What is Peep?</h2>
                        <p>
                            Peep allows users to browse, create, and promote events while at the same time making it a functional site for social interaction. We believe that great stories and memories are made through communal and societal interaction.
                            <br>
                            Bringing ideas to life is our purpose as a company. We help you coordinate and create these ideas and turn them into events and opportunities to connect and spend time with friends and family. We aim to connect people and places.
                        </p>
                    </section>
                    <hr>
                    <section id="eventsList">
                        <div id="cardListView">
                            <img src="image/screenshots/profile.jpg" alt="Screenshot of the profile page of Peep's mobile app." />
                            <img src="image/screenshots/eventPage.jpg" alt="Screenshot of the events page of Peep's mobile app." />
                            <img src="image/screenshots/map.jpg" alt="Screenshot of the map page of Peep's mobile app." />
                            <img src="image/screenshots/map_onclick.jpg" alt="Screenshot of the map event of Peep's mobile app." />
                            <img src="image/screenshots/inChat.jpg" alt="Screenshot of the messaging box of Peep's mobile app." />
                            <img src="image/screenshots/chat.jpg" alt="Screenshot of the contacts page of Peep's mobile app." />
                        </div>
                    </section>
                    <hr>
                    <section>
                        <h2>Interested in Peep?</h2>
                        <h3>Be the first to know what it is publically available.</h3>
                        <form action="insertEmail.php" method="POST">
                            <input class="textBox" type="text" placeholder="email address" name="emailAddress" /><input id="button" type="submit" value="Submit">
                        </form>
                    </section>
                </div>
            </article>
        </main>
        <footer style="margin-top: 2rem;">
            <span id="copyrightInfo"></span>
        </footer>
        
        <script>
            document.getElementById("copyrightInfo").innerHTML = "&copy; " + new Date().getFullYear() + " Peep. All rights reserved";
        </script>
    </body>
</html>