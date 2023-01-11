<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Assignment #2: Fresh Website</title>
    <?php include('./partials/index.html') ?>
</head>
<body>
    <div class="main-container">
        
        <header>
            <a href="/">
                <h1>Fresh</h1>
            </a>
        </header>
        
        <nav id="nav">
            
            <span id="menu-icon">
                <span id="bar" class="bar1"></span>
                <span id="bar" class="bar2"></span>
                <span id="bar" class="bar3"></span>
            </span>
            
            <ul class="nav-list">
                <li class="nav-items">
                    <a href="index.html" class="active">
                        <span>HOME</span>
                    </a>
                </li>
                <li class="nav-items">
                    <a href="sample page.html">
                        <span>SAMPLE PAGE</span>
                    </a>
                </li>
                <li class="nav-items">
                    <a href="column page.html">
                       <span>COLUMNS PAGE</span>
                    </a>
                </li>
                <li class="nav-items">
                    <a href="contact.html">
                        <span>CONTACT</span>
                    </a>
                </li>
                <li class="nav-items">
                    <a href="setup.html">
                        <span>SETUP</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        <main class="main-section">
            <section class="sections img-left">
                <img src="https://demos.restored316designs.com/fresh-free/files/2013/09/marryy-450x450.jpg" alt="">
                <div class="info-container">
                    <h2 class="title">
                        <a href="">Sample Post With Threaded Comments</a>
                    </h2>
                    <p class="comment">
                        <span>
                            <a href="">LEAVE A COMMENT</a>
                        </span>
                        //
                        <span>
                            <a href="">CATEGORY #1</a>
                        </span>
                    </p>
                    <p class="description">This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind. This is an example of a WordPress post, you ...</p>
                    <span class="readmore-button">
                        <a href="">read more</a>
                    </span>
                </div>
            </section>

            <section class="sections img-right">
                <div class="info-container">
                    <h2 class="title">
                        <a href="">Sample Post with Image Aligned Left</a>
                    </h2>
                    <p class="comment">
                        <span>
                            <a href="">LEAVE A COMMENT</a>
                        </span>
                        //
                        <span>
                            <a href="">CATEGORY #2</a>
                        </span>
                    </p>
                    <p class="description">This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like. This is an example of a WordPress post, you could edit this to put information about yourself or your ...</p>
                    <span class="readmore-button">
                        <a href="">read more</a>
                    </span>
                </div>
                <img src="https://demos.restored316designs.com/fresh-free/files/2013/09/DSC_8985-450x450.jpg" alt="">
            </section>

            <section class="sections">
                <img src="https://demos.restored316designs.com/fresh-free/files/2013/09/DSCF90022-450x450.jpg" alt="">
                <div class="info-container">
                    <h2 class="title">
                        <a href="">Sample Post With Image Aligned Right</a>
                    </h2>
                    <p class="comment">
                        <span>
                            <a href="">LEAVE A COMMENT</a>
                        </span>
                        //
                        <span>
                            <a href="">CATEGORY #3</a>
                        </span>
                    </p>
                    <p class="description">This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like. This is an example of a WordPress post, you could edit this to put information about yourself or your ...</p>
                    <span class="readmore-button">
                        <a href="">read more</a>
                    </span>
                </div>
            </section>

            <section class="sections img-right">
                <div class="info-container">
                    <h2 class="title">
                        <a href="">Sample Post With Image Centered</a>
                    </h2>
                    <p class="comment">
                        <span>
                            <a href="">LEAVE A COMMENT</a>
                        </span>
                        //
                        <span>
                            <a href="">CATEGORY #4</a>
                        </span>
                    </p>
                    <p class="description">This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind. This is an example of a WordPress post, you ...</p>
                    <span class="readmore-button">
                        <a href="">read more</a>
                    </span>
                </div>
                <img src="https://demos.restored316designs.com/fresh-free/files/2013/09/sb6a4857-450x450.jpg" alt="">
            </section>
        </main>
        
        <div class="pagination">
            <a href="" class="active">1</a>
            <a href="1.html">2</a>
            <a href="2.html">3</a>
            <a href="1.html" >Next Page »</a>
        </div>
        
        <div class="contacts">
            <div class="socials">
                <a href="">
                    <i class="ri-mail-line"></i>
                </a>
                <a href="">
                    <i class="ri-facebook-fill"></i>
                </a>
                <a href="">
                    <i class="ri-instagram-line"></i>
                </a>
                <a href="">
                    <i class="ri-pinterest-line"></i>
                </a>
                <a href="">
                    <i class="ri-twitter-fill"></i>
                </a>
            </div>
            <form action="">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="email" placeholder="E-Mail Address">
                <input type="submit" value="GO">
            </form>
        </div>
        
        <footer>
            <small>
                <p>COPYRIGHT © 2022 · FRESH THEME BY RESTORED 316</p>
                <p>COPYRIGHT © 2022 · FRESH THEME ON GENESIS FRAMEWORK · WORDPRESS · LOG IN</p>
            </small>
        </footer>
    </div>
</body>
</html>