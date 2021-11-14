<?php
	session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Game Warrior</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="hstyle.css" rel="Stylesheet" type="text/css" />
</head>

<body>
    <header>
        <div class="flex">
            <div class="logo">
                <a href="#"><img src="https://onclickwebdesign.com/wp-content/uploads/game_warrior_logo.png"
                        alt="Game Warrior Logo" /></a>
            </div>
            <nav>
                <button id="nav-toggle" class="hamburger-menu">
                    <span class="strip"></span>
                    <span class="strip"></span>
                    <span class="strip"></span>
                </button>
                <ul id="nav-menu-container">
                    <li><a href="Games/product.php">Games</a></li>
                    <li><a href="https://www.gamespot.com/news/">News</a></li>
                    <li><a href="opinion/opinion.php">Opinion</a></li>
                    <li><a href="../contact-form/contact.php">Contact</a></li>
                </ul>
            </nav>
			<a></a>
            <a href="../login/login.php" id="login-register-button">Login / Register</a>
        </div>
    </header>

    <main>
        <section id="hero-image">
            <div class="hero-marketing-text">
                <h1>The Best <span>Games</span> Out There</h1>
                <h5>Counter-Strike: Global Offensive (CS:GO) is a multiplayer first-person shooter video game developed
                    by Valve and Hidden Path Entertainment. It is the fourth game in the Counter-Strike series </h5>
                <button class="rm"><a href="https://www.hotspawn.com/guides/what-is-csgo/"><span>Read
                            More</span></a></button>
            </div>
        </section>

        <section id="latest-news">
            <div class="flex">
                <h5>Latest News</h5>
                <div id="latest-news-container">
                    <div class="latest-news-item">
                        <a href="https://www.gamespot.com/news/"><span class="badge new">New</span></a>
                        <span class="latest-news-text">Click here to find out the latest news about the games.</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="game-types-boxes">
            <div class="flex">
                <div class="box new">
                    <div class="shade"></div>
                    <span class="badge new">New</span>
                    <div class="contents">
                        <h4>COD WarZone</h4>
                        <p>Call of Duty: Warzone is a free-to-play battle royale video game released on March 10, 2020.
                        </p>
                        <a href="https://www.callofduty.com/warzone" class="comments">Click here to find out more</a>
                    </div>
                </div>

                <div class="box racing">
                    <div class="shade"></div>
                    <span class="badge racing">New</span>
                    <div class="contents">
                        <h4>Forza Horizon 4</h4>
                        <p>Forza Horizon 4 is a 2018 racing video game developed by Playground Games and published by
                            Microsoft Studios.</p>
                        <a href="https://www.forzamotorsport.net/en-us/games/fh4" class="comments">click here to find
                            out more</a>
                    </div>
                </div>

                <div class="box strategy">
                    <div class="shade"></div>
                    <span class="badge strategy">New</span>
                    <div class="contents">
                        <h4>Overwatch 2</h4>
                        <p>Overwatch 2 is going all-in on PvE. The game's main campaign, made up of co-operative Story
                            Missions.
                        </p>
                        <a href="https://overwatch2.playoverwatch.com/en-us/trailer" class="comments">Click here to find
                            out more</a>
                    </div>
                </div>

                <div class="box rpg">
                    <div class="shade"></div>
                    <span class="badge rpg">New</span>
                    <div class="contents">
                        <h4>PUBG PC</h4>
                        <p>PlayerUnknown's Battlegrounds (PUBG) is an online multiplayer battle royale game developed
                            and published by PUBG Corporation.</p>
                        <a href="https://www.pubg.com/en-us/" class="comments">Click here to find out more</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="recent-games">
            <h1>Recent Games</h1>
            <div class="flex">
                <div class="box">
                    <span class="badge new">New</span>
                    <img
                        src="https://boygeniusreport.files.wordpress.com/2020/06/the-last-of-us-part-ii-review.jpg?quality=70&strip=all&w=1200" />
                    <div class="box-lower-section">
                        <h4>The Last of US Part ||</h4>
                        <p>The Last of Us Part II is a 2020 action-adventure game developed by Naughty Dog and published
                            by Sony Interactive Entertainment for the PlayStation 4. </p>
                        <a href="https://www.vulture.com/article/the-last-of-us-part-2-review.html"
                            class="comments">Review</a>
                    </div>
                </div>

                <div class="box">
                    <span class="badge racing">Adventure</span>
                    <img src="https://onclickwebdesign.com/wp-content/uploads/recent_games_2.jpg" />
                    <div class="box-lower-section">
                        <h4>DOOM Eternal</h4>
                        <p>Doom Eternal is a first-person shooter video game developed by id Software and published by
                            Bethesda Softworks. The sequel to Doom, and the fifth main game in the Doom series</p>
                        <a href="https://in.ign.com/doom-eternal/146230/review/doom-eternal-final-review"
                            class="comments">Review</a>
                    </div>
                </div>

                <div class="box">
                    <span class="badge adventure">Adventure</span>
                    <img src="https://i.gadgets360cdn.com/large/FFVII_remake_main_1583156946518.png" />
                    <div class="box-lower-section">
                        <h4>Final Fantasy VII Remake</h4>
                        <p>Final Fantasy VII Remake is an action role-playing game developed and published by Square
                            Enix, released for PlayStation 4 on April 10, 2020.</p>
                        <a href="https://www.gamespot.com/reviews/final-fantasy-7-remake-review-first-class/1900-6417445/"
                            class="comments">Review</a>
                    </div>
                </div>
            </div>
            <div class="rinfo" style="position:relative; left:80px; top:10px;">
                <b><a href=" https://www.metacritic.com/browse/games/release-date/new-releases/all/date"><span>More
                            Recent Games</span></a></b>
            </div>
        </section>

        <section id="tournaments">
            <div class="flex">
                <span class="badge tournaments">Tournaments</span>
                <div class="box">
                    <span class="badge premium-tournament">Premium Tournament</span>
                    <div class="tournaments-image">
                        <img
                            src="data:image/png;base64,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" />
                    </div>
                    <div class="tournaments-content">
                        <h3>CSGO</h3>
                        <div><label>Tournament Begins:</label> <strong>June 22, 2020</strong></div>
                        <div><label>Tournament Ends:</label> <strong>July 01, 2020</strong></div>
                        <div><label>Participants:</label> <strong>10 teams</strong></div>
                        <div><label>Tournament Organizer:</label> <strong>CS_Summit 6</strong></div>
                        <div><label class="prizes">Prizes:</label> <label>1st place $20,000, 2nd place: $10,000, 3rd
                                place: $5,000</label></div>
                    </div>
                </div>

                <div class="box">
                    <span class="badge premium-tournament">Premium Tournament</span>
                    <div class="tournaments-image">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/tournaments_2.jpg" />
                    </div>
                    <div class="tournaments-content">
                        <h3>World Of Warcraft</h3>
                        <div><label>Tournament Begins:</label> <strong>June 20, 20120</strong></div>
                        <div><label>Tournament Ends:</label> <strong>July 10, 2020</strong></div>
                        <div><label>Participants:</label> <strong>10 teams</strong></div>
                        <div><label>Tournament Organizer:</label> <strong>AWC</strong></div>
                        <div><label class="prizes">Prizes:</label> <label>1st place $100,000, 2nd place: $50,000, 3rd
                                place:
                                $10,000</label></div>
                    </div>
                </div>
            </div>
            <div class="rinfo" style="position:relative; left:80px; top:10px;">
                <b><a href="https://esportsinsider.com/calendar/"><span>More Tournaments</span></a></b>
            </div>
        </section>

        <section id="recent-reviews">
            <h1>Recent Reviews</h1>
            <div class="flex">
                <div class="box">
                    <span class="rating-badge gold">9.3</span>
                    <div class="recent-reviews-image">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/recent_reviews_1.jpg" />
                    </div>
                    <div>
                        <h4>Assasin's Creed Odyssey</h4>
                    </div>
                </div>

                <div class="box">
                    <span class="rating-badge purple">9.5</span>
                    <div class="recent-reviews-image">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/recent_reviews_2.jpg" />
                    </div>
                    <div>
                        <h4>Doom Eternal</h4>
                    </div>
                </div>

                <div class="box">
                    <span class="rating-badge green">9.1</span>
                    <div class="recent-reviews-image">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/recent_reviews_3.jpg" />
                    </div>
                    <div>
                        <h4>Overwatch 2 </h4>
                    </div>
                </div>

                <div class="box">
                    <span class="rating-badge violet">9.7</span>
                    <div class="recent-reviews-image">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/recent_reviews_4.jpg" />
                    </div>
                    <div>
                        <h4>GTA V</h4>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <small>Copyright &copy; 2020 All rights reserved <span>| Devanshu Shekhar</span></small>
    </footer>

    <script>
        document.getElementById('nav-toggle').addEventListener('click', function () {
            let navMenu = document.getElementById('nav-menu-container');
            navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
        });
    </script>
</body>

</html>
