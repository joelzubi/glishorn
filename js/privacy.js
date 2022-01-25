function setCookie(cname,cvalue,exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function refuseCookies() {
    setCookie('cookiesDisabled', 'true', 750);
    location.reload();
}

function acceptCookies() {
    setCookie('cookiesDisabled', 'false', 360);
    location.reload();
}

function showBoxCookiesDisabled() {
    document.getElementById('personal-notice-before').innerHTML = '<div class="alert alert-info">\n' +
        '            Sie haben Cookies für diese Seite in den Browsereinstellungen deaktiviert.\n' +
        '        </div>';
}

function showBoxCookiesAccepted() {
    document.getElementById('personal-notice-before').innerHTML = '<div class="alert alert-success">\n' +
        '            Sie haben die Cookie-Richtlinien akzeptiert.\n' +
        '            <button onclick="refuseCookies()">Cookies ablehnen</button>\n' +
        '        </div>';
}

function showBoxCookiesRejected() {
    document.getElementById('personal-notice-before').innerHTML = '<div class="alert alert-dark">\n' +
        '            Sie haben Cookies abgelehnt.\n' +
        '            <button onclick="acceptCookies()">Cookies akzeptieren</button>\n' +
        '        </div>';
}

function showCookieButtons() {
    document.getElementById('personal-notice-after').innerHTML = '<p>Möchten Sie Cookies akzeptieren?</p>\n' +
        '        <div class="row">\n' +
        '            <div class="col">\n' +
        '                <button onclick="refuseCookies()" class="w-100 bg-dark text-white">\n' +
        '                    Cookies ablehnen\n' +
        '                </button>\n' +
        '            </div>\n' +
        '            <div class="col">\n' +
        '                <button onclick="acceptCookies()" class="w-100 text-white" style="background-color: green">\n' +
        '                    Cookies akzeptieren\n' +
        '                </button>\n' +
        '            </div>\n' +
        '        </div>';
}

if (navigator.cookieEnabled) {
    if (getCookie('cookiesDisabled') === 'false') {
        showBoxCookiesAccepted();
    } else {
        if (getCookie('cookiesDisabled') === 'true') {
            showBoxCookiesRejected();
        } else {
            showCookieButtons();
        }
    }
} else {
    showBoxCookiesDisabled();
}