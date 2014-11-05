(function () {
    /**
        Hämtar adressen som står i adressfältet så jag kan utläsa vilken sida vi är på  
    **/
    var currentUrl = document.URL;
    var className = currentUrl.split("/").pop(); // Hämtar sidnamnet från adressen.
    // Hämtar upp menyelement som matchar med sidnamnet i url:en utifrån klassnamnet. 
    var currentMenuItem = document.querySelector('.' + className); 
    if(currentMenuItem){
        // Sätt klassnamn på menyelementet så att den får rätt färg.
        currentMenuItem.classList.add('active');
    }
    

    $("#contactForm").validate();
})();