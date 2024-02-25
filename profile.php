<?php include $_SERVER["DOCUMENT_ROOT"] . '/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .profile-card-container {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-card {
            max-width: 600px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: block;
            object-fit: cover;
        }

        .username {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .edit-profile-link {
            display: block;
            margin-top: 20px;
        }

        .footer {
            padding: 20px 0;
            background-color: #f8f9fa;
            text-align: center;
        }
    </style>
</head>

<body>

<?php nav(); ?>

<div class="profile-card-container">
    <div class="profile-card">
        <img class="profile-picture" src="https://e7.pngegg.com/pngimages/654/738/png-clipart-computer-icons-name-icon-black-desktop-wallpaper-thumbnail.png" alt="Profile Picture">
        <h2 class="username">John Doe</h2>
        <p class="user-info">Email: johndoe@example.com</p>
        <p class="user-info">Location: New York, USA</p>
        <p class="user-info">Bio: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="/EditProfile.php" class="edit-profile-link">Edit Profile</a>
    </div>
</div>

<div class="footer">
    <div class="container">
        <p>Footer content goes here.</p>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
