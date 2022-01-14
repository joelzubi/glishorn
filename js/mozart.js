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

function activateCookieContent() {
    document.getElementById("video-klarinettenquartett").innerHTML =
        '<iframe width="480" height="270" src="https://www.youtube.com/embed/FVFdi_SiWs4"\n' +
        '                    title="YouTube video player" frameborder="0"\n' +
        '                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
        '                    allowfullscreen></iframe>'

    document.getElementById("video-perkussionsensemble").innerHTML =
        '<iframe width="480" height="270" src="https://www.youtube.com/embed/2DkpfTCcZiI"\n' +
        '                    title="YouTube video player" frameborder="0"\n' +
        '                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
        '                    allowfullscreen></iframe>'

    document.getElementById("video-saxensemble").innerHTML =
        '<iframe width="480" height="270" src="https://www.youtube.com/embed/JqiUNBiVIyI"\n' +
        '                    title="YouTube video player" frameborder="0"\n' +
        '                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
        '                    allowfullscreen></iframe>'

    document.getElementById("video-klarinettenquintett").innerHTML =
        '<iframe width="480" height="270" src="https://www.youtube.com/embed/v_ZBDnn9YP4"\n' +
        '                    title="YouTube video player" frameborder="0"\n' +
        '                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
        '                    allowfullscreen></iframe>'

    document.getElementById("video-blechblaeserquintett").innerHTML =
        '<iframe width="480" height="270" src="https://www.youtube.com/embed/K_3k1jfYdDY"\n' +
        '                    title="YouTube video player" frameborder="0"\n' +
        '                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
        '                    allowfullscreen></iframe>'

    document.getElementById("video-floetenquartett").innerHTML =
        '<iframe width="480" height="270" src="https://www.youtube.com/embed/Z9KbFW9mA6o"\n' +
        '                    title="YouTube video player" frameborder="0"\n' +
        '                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
        '                    allowfullscreen></iframe>'

    document.getElementById("video-posaunenquartett").innerHTML =
        '<iframe width="480" height="270" src="https://www.youtube.com/embed/g8FTcOkFrNs"\n' +
        '                    title="YouTube video player" frameborder="0"\n' +
        '                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
        '                    allowfullscreen></iframe>'

    document.getElementById("video-brassensemble").innerHTML =
        '<iframe width="480" height="270" src="https://www.youtube.com/embed/WlULpkWGUk0"\n' +
        '                    title="YouTube video player" frameborder="0"\n' +
        '                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
        '                    allowfullscreen></iframe>'

    document.getElementById("video-oboenquartett").innerHTML =
        '<iframe width="480" height="270" src="https://www.youtube.com/embed/vP2wQh06j5s"\n' +
        '                    title="YouTube video player" frameborder="0"\n' +
        '                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
        '                    allowfullscreen></iframe>'
}

function showCookieBanner() {
    let endOfPage = document.getElementById("endOfPage");
    endOfPage.insertAdjacentHTML('afterend', '<div id="cookieBanner" style="position: fixed;\n' +
        '    bottom: 8px;\n' +
        '    left: 20px;\n' +
        '    width: 220px;\n' +
        '    padding-top: 7px;\n' +
        '    height: 80px;\n' +
        '    color: #fff;\n' +
        '    line-height: 20px;\n' +
        '    padding-left: 10px;\n' +
        '    padding-right: 10px;\n' +
        '    font-size: 14px;\n' +
        '    background: #292929;\n' +
        '    z-index: 120;\n' +
        '    border-radius: 3px;">\n' +
        '    <span>\n' +
        '        Diese Website verwendet Cookies.\n' +
        '        <a href="#" class="ml-1 text-decoration-none" style="color: dodgerblue;">\n' +
        '            Mehr Informationen\n' +
        '        </a>\n' +
        '    </span>\n' +
        '    <div class="mt-2 d-flex align-items-center justify-content-center g-2">\n' +
        '        <button onclick="refuseCookies();"\n' +
        '                class="mr-1" style="height: 20px;\n' +
        '    width: 104px;\n' +
        '    color: #fff;\n' +
        '    font-size: 12px;\n' +
        '    line-height: 10px;\n' +
        '    border-radius: 3px;\n' +
        '    border: 1px solid green;\n' +
        '    background-color: dimgrey;\n' +
        '    cursor: pointer;">\n' +
        '            Ablehnen\n' +
        '        </button>\n' +
        '        <button onclick="acceptCookies();"\n' +
        '                style="height: 20px;\n' +
        '    width: 104px;\n' +
        '    color: #fff;\n' +
        '    font-size: 12px;\n' +
        '    line-height: 10px;\n' +
        '    border-radius: 3px;\n' +
        '    border: 1px solid green;\n' +
        '    background-color: green;\n' +
        '    cursor: pointer;">\n' +
        '            Akzeptieren\n' +
        '        </button> </div>\n' +
        '</div>');
}

function hideCookieBanner() {
    document.getElementById('cookieBanner').remove();
}

function refuseCookies() {
    setCookie('cookiesDisabled', 'true', 750);
    hideCookieBanner();
}

function acceptCookies() {
    setCookie('cookiesDisabled', 'false', 360);
    hideCookieBanner();
    activateCookieContent();
}

if (navigator.cookieEnabled) {
    if (getCookie('cookiesDisabled') === 'false') {
        activateCookieContent();
    } else {
        if (getCookie('cookiesDisabled') !== 'true') {
            showCookieBanner();
        }
    }
}