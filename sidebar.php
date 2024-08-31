<div class="sidebar">
    <!-- Sidebar Content -->
    <div class="logo"></div>
    <ul class="menu">
        <li>
            <a href="index.php" data-page="index.php">
                <i class="ri-dashboard-3-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="class.php" data-page="class.php">
                <i class="ri-graduation-cap-line"></i>
                <span>Class</span>
            </a>
        </li>
        <li>
            <a href="student.php" data-page="student.php">
                <i class="ri-account-box-fill"></i>
                <span>Student</span>
            </a>
        </li>
        <li>
            <a href="googleclassroom.php" data-page="google-classroom.php">
                <i class="ri-clapperboard-line"></i>
                <span>Google Classroom</span>
            </a>
        </li>
        <li>
        <a href="https://my.paragoniu.edu.kh" data-page="my.paragoniu.edu.kh">
        <i class="ri-school-fill"></i>
        <span>MyParagon</span>
    </a>
        </li>
        <li>
            <a href="settings.php" data-page="settings.php">
                <i class="ri-settings-2-line"></i>
                <span>Settings</span>
            </a>
        </li>
        <li class="logout">
            <a href="logout.php" data-page="logout.php">
                <i class="ri-logout-box-line"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>

<script>// Get the current page from the URL
const currentPage = window.location.pathname.split("/").pop();

// Select all sidebar menu links
const menuLinks = document.querySelectorAll('.sidebar .menu a');

// Loop through each link
menuLinks.forEach(link => {
    // If the link's data-page attribute matches the current page, add the 'active' class
    if (link.getAttribute('data-page') === currentPage) {
        link.parentElement.classList.add('active');
    } else {
        // Remove 'active' class from non-matching links
        link.parentElement.classList.remove('active');
    }
});
</script>
