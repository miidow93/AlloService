/*function init() {
    FB.api(
        '/l214.animaux',
        {"fields":"fan_count"},
        function(response) {
            alert(response.fan_count);
        }
    );
}*/

window.fbAsyncInit = function() {
    FB.init({
        appId      : '127110168150898',//'{your-app-id}',
        cookie     : true,
        xfbml      : true,
        version    : 'v3.0'//'{latest-api-version}'
    });
    //init();
    FB.AppEvents.logPageView();

};

/*FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});*/

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


/*
var finished_rendering = function() {
    console.log("finished rendering plugins");
    var spinner = document.getElementById("spinner");
    spinner.removeAttribute("style");
    spinner.removeChild(spinner.childNodes[0]);
}
FB.Event.subscribe('xfbml.render', finished_rendering); */