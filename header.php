      <div class="logo">
          <a href="home-page.php">
              <img src="img/mainLogoWhite.png" alt="logo" class="logo">
          </a>
      </div>
      <nav>
          <ul class="nav-links">
              <li><a href="home-page.php" title="Home Page">Home</a></li>
              <li><a href="gallery-page.php" title="Gallery">Gallery</a></li>
              <li><a href="prices-page.php" title="Prices">Prices</a></li>
              <li><a href="profile-page.php" title="Profile">Profile: <?php echo $_SESSION["name"] ?></a></li>
          </ul>
      </nav>
      <div class="logout-button">
          <a href="logout-page.php" class="logOutbutton"><button>Log Out</button></a>
      </div>