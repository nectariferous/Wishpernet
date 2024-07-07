document.addEventListener('DOMContentLoaded', function() {
    const telegramWebApp = new Telegram.WebApp();
    telegramWebApp.ready();

    document.getElementById('mineButton').addEventListener('click', function() {
        mineToken();
    });

    function mineToken() {
        let progressBar = document.getElementById('loadingBar');
        let width = parseInt(progressBar.style.width.slice(0, -1));
        if (width >= 100) {
            alert('Daily limit reached or total tokens maxed!');
        } else {
            width++;
            progressBar.style.width = width + '%';
            progressBar.textContent = width + '%';
        }
    }
});
