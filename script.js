// Load the Google API Client Library
function handleClientLoad() {
    gapi.load('client:auth2', initClient);
}

// Initialize the Google API Client
function initClient() {
    gapi.client.init({
        apiKey: 'API_KEY', 
        clientId: 'CLIENT_ID',  
        discoveryDocs: ["https://classroom.googleapis.com/$discovery/rest?version=v1"],
        scope: "https://www.googleapis.com/auth/classroom.courses.readonly"
    }).then(() => {
        // Handle the sign-in state
        gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);
        updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
    }).catch(error => {
        console.error("Error during initialization: ", error);
        alert("Initialization error. Please check your configuration.");
    });
}

// Update UI based on sign-in status
function updateSigninStatus(isSignedIn) {
    if (isSignedIn) {
        document.getElementById('signInButton').style.display = 'none';
        document.getElementById('signOutButton').style.display = 'block';
        listCourses();  // Fetch and display the courses
    } else {
        document.getElementById('signInButton').style.display = 'block';
        document.getElementById('signOutButton').style.display = 'none';
        document.getElementById('coursesList').innerHTML = '';
    }
}

// Sign in to Google
function handleSignInClick() {
    gapi.auth2.getAuthInstance().signIn();
}

// Sign out of Google
function handleSignOutClick() {
    gapi.auth2.getAuthInstance().signOut();
}

// Fetch and list Google Classroom courses
function listCourses() {
    gapi.client.classroom.courses.list({
        pageSize: 10
    }).then(response => {
        const courses = response.result.courses;
        if (courses && courses.length > 0) {
            displayCourses(courses);
        } else {
            document.getElementById('coursesList').innerHTML = '<p>No courses found.</p>';
        }
    }).catch(error => {
        console.error("Error fetching courses: ", error);
        document.getElementById('coursesList').innerHTML = '<p>Failed to fetch courses. Please try again.</p>';
    });
}

// Display courses in the HTML
function displayCourses(courses) {
    let html = '<ul class="list-group">';
    courses.forEach(course => {
        html += `<li class="list-group-item">${course.name} - ${course.section || ''}</li>`;
    });
    html += '</ul>';
    document.getElementById('coursesList').innerHTML = html;
}
