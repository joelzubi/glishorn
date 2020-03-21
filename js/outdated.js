function expire(htmlContent, expiryDate) {
    htmlContent = document.getElementById(htmlContent);
    expiryDate = new Date(expiryDate);
    expiryDate.setDate(expiryDate.getDate() + 1);
    const now = new Date();

    if (expiryDate.getTime() < now.getTime()) {
        htmlContent.style.display = "none";
    }
}