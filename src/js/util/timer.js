function timer() {

   const oldDateObj = new Date();

   const diff = 10
   const newDateObj = new Date(oldDateObj.getTime() + diff * 60000);
   const deadline = new Date(newDateObj);

   let timerId = null;

   function countdownTimer() {
      const diff = deadline - new Date();
      if (diff <= 0) {
         clearInterval(timerId);
      }

      const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
      const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;

      $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
      $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;

   }

   const $minutes = document.querySelector('.timer__minutes');
   const $seconds = document.querySelector('.timer__seconds');

   countdownTimer();

   timerId = setInterval(countdownTimer, 1000);
}
timer()
