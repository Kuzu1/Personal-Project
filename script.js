


function handleClientLoad() {
    gapi.load('client:auth2', initClient);
}

function initClient() {
    gapi.client.init({
        apiKey: 'AIzaSyB4JMrwbeix077PU_zTq4Hnb3lxQfz_fuA',
        clientId: 'proud-life-424812-t0.googleusercontent.com',
        discoveryDocs: ["https://classroom.googleapis.com/$discovery/rest?version=v1"],
        scope: "https://www.googleapis.com/auth/classroom.courses.readonly"
    }).then(() => {
        // Listen for sign-in state changes
        gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

        // Handle initial sign-in state
        updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
    });
}
function handleSignInClick() {
    gapi.auth2.getAuthInstance().signIn();
}

function handleSignOutClick() {
    gapi.auth2.getAuthInstance().signOut();
}

function updateSigninStatus(isSignedIn) {
    if (isSignedIn) {
        listCourses();
    } else {
        console.log("User not signed in");
    }
}
function listCourses() {
    gapi.client.classroom.courses.list({
        pageSize: 10
    }).then(response => {
        const courses = response.result.courses;
        if (courses && courses.length > 0) {
            courses.forEach(course => console.log(course.name));
        } else {
            console.log("No courses found.");
        }
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