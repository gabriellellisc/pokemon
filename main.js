fetch('menu.html').then(function(response) {
    return response.text();
}).then(function (html) {
    setTimeout(function(){
        var myMenu = document.getElementById('menu');
        myMenu.innerHTML = html;
    }, 500)
    
    console.log(myMenu);
}).catch(function (err) {
	// There was an error
	console.warn('Something went wrong.', err);
});


