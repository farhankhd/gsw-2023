const countdown = () => {
    //specify the date and time
    const countDate = new Date("Mar 30, 2023 10:00:00").getTime();
    const now = new Date().getTime();
    
    //calculate remaining time
    const remainingTime = countDate - now;
    
    //convert to days, hours, mins, secs
    const second = 1000;
    const minute = second*60;
    const hour = minute*60;
    const day = hour*24;
    
    const textDay = Math.floor(remainingTime/day);
    const textHour = Math.floor( (remainingTime %day) /hour);
    const textMinute = Math.floor((remainingTime %hour) /minute);
    const textSecond = Math.floor((remainingTime % minute) /second);
    
    //update html with calculated values
    //check if time is past 0
    document.querySelector(".day").innerText = textDay >0? textDay: 0;
    document.querySelector(".hour").innerText = textHour >0? textHour: 0;
    document.querySelector(".minute").innerText = textMinute >0? textMinute: 0;
    document.querySelector(".second").innerText = textSecond >0? textSecond: 0;
    
    if (remainingTime==0) {
        return {start();}
    }
}

//run countdown every 500ms
setInterval(countdown, 500);




// for starting the confetti 
const start = () => {
    setTimeout(function() {
        confetti.start()
    }, 1000); // 1000 is time that after 1 second start the confetti ( 1000 = 1 sec)
    // after this here we are calling both the function so it works
    stop();
};

//  for stopping the confetti 

const stop = () => {
    setTimeout(function() {
        confetti.stop()
    }, 5000); // 5000 is time that after 5 second stop the confetti ( 5000 = 5 sec)
};


// if you dont want to make it stop and make it infinite you can just remove the stop function 😊
