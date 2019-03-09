alertify.set('notifier','position', 'top-center');
alertify.glossary = ('title','Offline?');


var sec = 1000;
window.addEventListener("load", () => {
  setInterval(handleNetworkChange, sec * 15);
  function handleNetworkChange(event) {
    if (navigator.onLine) {
      console.log('online');
    }else{
      alertify.message('Você está offline, alguns recursos do aplicativo serão desabilitados.');
    }
  }
  window.addEventListener("online", handleNetworkChange);
  window.addEventListener("offline", handleNetworkChange);
});