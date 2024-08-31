<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Classroom Integration</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google API and Custom JavaScript -->
    <script src="https://apis.google.com/js/api.js"></script>
    <script src="app.js" defer></script>
</head>
<body onload="handleClientLoad()" >
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="mt-5">
        <h1>Google Classroom Courses</h1>
        <button id="signInButton" class="btn btn-primary" onclick="handleSignInClick()">Sign In with Google</button>
        <button id="signOutButton" class="btn btn-secondary" onclick="handleSignOutClick()" style="display:none;">Sign Out</button>
        
        <div id="coursesList" class="mt-4">
            <!-- Course list will be displayed here -->
        </div>
    </div>

    <!-- Google Classroom API Script -->
    <script src="script.js"></script>
</body>
</html>
