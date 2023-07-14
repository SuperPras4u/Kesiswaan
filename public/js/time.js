function showTime() {
    const date = new Date();
    const hours = date.getHours();
    const minutes = date.getMinutes();
    const seconds = date.getSeconds();
    const time = hours + ":" + minutes + ":" + seconds;
    document.getElementById("clock").innerHTML = time;
}

setInterval(showTime, 1000);
