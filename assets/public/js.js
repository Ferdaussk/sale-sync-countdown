function setProgress(element) {
    const progressValue = parseInt(element.getAttribute('progress'), 10);
    const outOfValue = parseInt(element.getAttribute('outof'), 10);
    const progressBar = document.getElementById('sscdn-progress-bar');
    const progressPercentage = Math.round((progressValue / outOfValue) * 100);

    progressBar.style.width = progressPercentage + '%';
    progressBar.innerHTML = progressPercentage + '%';
}

// Set the initial progress value
setProgress(document.getElementById('sscdn-progress-bar'));
