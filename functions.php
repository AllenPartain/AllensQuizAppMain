  <?php
  function nav() {
      echo '<style>
          

          body {
              margin: 0; /* Remove default margin to extend the content across the whole page */
              font-family: "Uncial Antiqua", sans-serif; /* Set the font family */
          }

          .nav-container {
              display: flex;
              justify-content: flex-end; /* Align the navigation to the right */
              background-color: #f8f8f8; /* Background color for the navigation bar */
              padding: 10px; /* Add padding to the navigation bar */
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle lift */
          }

          .nav-card {
              border-radius: 8px; /* Border radius for rounded corners */
              overflow: hidden; /* Hide overflowing content */
          }

          nav {
              display: flex;
          }

          nav a {
              /* Add styling for the navigation links */
              color: green;  /* Set the default text color */
              text-decoration: none; /* Remove underline from links */
              padding: 8px 12px; /* Add padding to the links for spacing */
              display: inline-block; /* Display links as blocks */
          }

          nav a:hover {
              color: red; /* Set the text color to red on hover */
          }

          .profile-pic {
              border-radius: 50%; /* Make the profile picture circular */
              width: 30px; /* Set the width of the profile picture */
              height: 30px; /* Set the height of the profile picture */
              object-fit: cover; /* Maintain aspect ratio and cover the container */
              margin-right: 10px; /* Add margin for spacing */
          }
      </style>
      <div class="nav-container">
          <div class="nav-card">
              <nav>
                  <!-- Make the profile picture clickable and link to /handler/profileHandler.php -->
                  <a href="/profile.php">
                      <img src="https://e7.pngegg.com/pngimages/654/738/png-clipart-computer-icons-name-icon-black-desktop-wallpaper-thumbnail.png" alt="Profile Pic" class="profile-pic">
                  </a>
                  <a href="/landingPage.php">Home</a>
                  <a href="/aboutMe.php">About</a>
                  <a href="/logout.php">Log Out</a>
              </nav>
          </div>
      </div>';
  }

  // Call the function to display the navigation
  // nav();
  ?>
