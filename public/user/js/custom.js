    function openCountry(evt, countryId) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tab-link");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(countryId).style.display = "flex";
        evt.currentTarget.className += " active";
    }

    // Activate the first tab on page load
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementsByClassName('tab-link')[0].click();
    });