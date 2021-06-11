var url = window.location.pathname;
var filename = url.substring(url.lastIndexOf('/') + 1);

var home = window.document.getElementById('homenl'),

    posts = window.document.getElementById('postsnl'),

    tools = window.document.getElementById('toolsnl'),

    about = window.document.getElementById('aboutnl'),

    control = window.document.getElementById('controlnl');

switch (filename) {
case "":
    home.classList.add('active');
    break;
case "index.php":
    home.classList.add('active');
    break;
case "posts.php":
    posts.classList.add('active');
    break;
case "tools.php":
    tools.classList.add('active');
    break;
case "about.php":
    about.classList.add('active');
    break;
case "control.php":
    control.classList.add('active');
    break;
}
