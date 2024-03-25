
<header class='header'>
       <div class='logo'><a href="index.php"> <img src="./img/logo/logo.png" alt="logo"></a></div>

        <div>
            <nav class="navigation">
			
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="portfolio.php">PORTFOLIO</a></li>
                    <li><a href="mailto:yuan127775@gmail.com">CONTACT</a></li>
			
			</nav>

            <div class="mobile-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
			
        </div>

        <script>
        
            const menuButton = document.querySelector('.mobile-menu');
            const nav = document.querySelector('.navigation');

            menuButton.addEventListener('click', function() {
            nav.classList.toggle('showMenu');
            menuButton.classList.toggle('active');
            });

        </script>

</header>
