const coronaAlert = document.getElementById("coronaAlert");
expire(coronaAlert, new Date("2020-04-12"));

function expire(htmlContent, expiryDate) {
    const now = new Date();
    expiryDate.setDate(expiryDate.getDate() + 1);
    if (expiryDate.getTime() < now.getTime()) {
        htmlContent.style.display = "none";
    }
}