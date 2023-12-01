<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Use title if it's in the page YAML frontmatter -->
  <title>Self XAMPP</title>

  <meta name="description"
    content="XAMPP is an easy to install Apache distribution containing MariaDB, PHP and Perl." />
  <meta name="keywords" content="xampp, apache, php, perl, mariadb, open source distribution" />

  <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" />
  <link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
  <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet"
    type="text/css" />

  <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>


  <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />


</head>

<body class="index">
  <div id="fb-root"></div>
  <script>(function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=277385395761685";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
  <header class="header contain-to-grid">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="/dashboard/index.html">Apache Friends</a></h1>
        </li>
        <li class="toggle-topbar menu-icon">
          <a href="#">
            <span>Menu</span>
          </a>
        </li>
      </ul>

      <section class="top-bar-section">
        <!-- Left Nav Section -->
        <ul class="left">
          <li class="item "><a href="/dashboard/faq.html">FAQs</a></li>
          <li class="item "><a href="/dashboard/howto.html">HOW-TO Guides</a></li>
          <li class="item "><a target="_blank" href="/dashboard/phpinfo.php">PHPInfo</a></li>
          <li class="item "><a href="/phpmyadmin/">phpMyAdmin</a></li>
        </ul>
      </section>
    </nav>
  </header>

  <div class="wrapper">
    <div class="hero">
      <div class="row">
        <div class="large-12 columns">
          <h1><img src="/dashboard/images/xampp-logo.svg" />XAMPP <span>Apache + MariaDB + PHP + Perl</span></h1>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- display all folders in the ../ directory -->
      <div class="folder-container">
        <?php
        $subfolder = "../"; // Specify the subfolder path
        $folders = scandir($subfolder); // Get all folders in the subfolder
        
        foreach ($folders as $folder) {
          if ($folder !== '.' && $folder !== '..' && is_dir($subfolder . $folder)) {
            echo '<div class="folder">';
            echo '<p><a href="' . $subfolder . $folder . '">' . $folder . '</a></p>';
            echo '</div>';
          }
        }
        ?>
      </div>
      <div class="create-folder">
        <form id="create-folder-form">
          <p>
            <label for="folderName">Enter the name of the new directory:</label>
            <input type="text" id="folderName" name="folderName" required>
          </p>
          <p>
          <h3>Folders</h3>
          <div class="folderholder">
            <label><input type="checkbox" name="img"> img</label>
            <label><input type="checkbox" name="css"> css</label>
            <label><input type="checkbox" name="js"> js</label>
            <label><input type="checkbox" name="scripts"> scripts</label>
          </div>

          </p>
          <p>
          <p>
            <h3>Files</h3>
            <div class="scriptholder">
              <label><input type="radio" name="createIndexFile" value="php"> index.php</label>
              <label><input type="radio" name="createIndexFile" value="html"> index.html</label>
            </div>
          </p>

          </p>
          <p>
            <button type="button" class="create-folder-btn">Create New Directory</button>
          </p>
        </form>
        <script>
          document.querySelector('.create-folder-btn').addEventListener('click', function () {
            var form = document.getElementById('create-folder-form');
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'create_directory.php', true);
            xhr.onreadystatechange = function () {
              if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                  alert('New directory and subdirectories created successfully!');
                } else {
                  alert('Failed to create directory.');
                }
              }
            };
            xhr.send(formData);
          });
        </script>
      </div>


      <div class="large-12 columns">
        <h2>Welcome to XAMPP for Windows 8.2.4</h2>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <p>
          You have successfully installed XAMPP on this system! Now you can start using Apache, MariaDB, PHP and other
          components.
          You can find more info in the <a href="/dashboard/faq.html">FAQs</a> section or check the <a
            href="/dashboard/howto.html">HOW-TO Guides</a> for getting started with PHP applications.
        </p>
        <p>
          XAMPP is meant only for development purposes. It has certain configuration settings that make it easy to
          develop locally but that are insecure if you want to have your installation accessible to others.
        </p>
        <p>
          Start the XAMPP Control Panel to check the server status.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <h3>Community</h3>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <p>
          XAMPP has been around for more than 10 years &ndash; there is a huge community behind it. You can get involved
          by joining our <a href="https://community.apachefriends.org">Forums</a>, liking us on <a
            href="https://www.facebook.com/we.are.xampp">Facebook</a>, or following our exploits on <a
            href="https://twitter.com/apachefriends">Twitter</a>.
        </p>
      </div>
    </div>


  </div>

  <footer class="footer row">
    <div class="columns">
      <div class="footer_lists-container row collapse">
        <div class="footer_social columns large-2">
          <ul class="social">
            <li class="twitter"><a href="https://twitter.com/apachefriends">Follow us on Twitter</a></li>
            <li class="facebook"><a href="https://www.facebook.com/we.are.xampp">Like us on Facebook</a></li>
          </ul>

          <p class="footer_copyright">Copyright (c) 2022, Apache Friends</p>
        </div>
        <ul class="footer_links columns large-9">
          <li><a href="https://www.apachefriends.org/blog.html">Blog</a></li>
          <li><a href="/privacy_policy.html">Privacy Policy</a></li>
          <li>
            <a target="_blank" href="http://www.fastly.com/"> CDN provided by
              <img width="48" data-2x="/dashboard/images/fastly-logo@2x.png" src="/dashboard/images/fastly-logo.png" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- JS Libraries -->
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="/dashboard/javascripts/all.js" type="text/javascript"></script>
</body>

</html>