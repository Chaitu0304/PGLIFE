window.addEventListener("load", function () {
    var is_interested_images = document.getElementsByClassName("is-interested-image");
    Array.from(is_interested_images).forEach(element => {
        element.addEventListener("click", function (event) {
            var XHR = new XMLHttpRequest();
            var property_id = this.getAttribute("property_id");

            XHR.addEventListener("load", toggle_interested_success);
            XHR.addEventListener("error", function () {
                alert("Network error!");
            });

            XHR.open("GET", "api/toggle_interested.php?property_id=" + property_id);
            XHR.send();

            document.getElementById("loading").style.display = 'block';
            event.preventDefault();
        });
    });
});

var toggle_interested_success = function (event) {
    document.getElementById("loading").style.display = 'none';

    try {
        var response = JSON.parse(event.target.responseText);
    } catch (e) {
        alert("Server error: " + event.target.responseText);
        return;
    }

    if (response.success) {
        var property_id = response.property_id;
        var is_interested_image = document.querySelector(".property-id-" + property_id + " .is-interested-image");
        var interested_user_count = document.querySelector(".property-id-" + property_id + " .interested-user-count");
        var property_card = document.querySelector(".property-id-" + property_id);

        if (is_interested_image && interested_user_count) {
            interested_user_count.innerHTML = response.count;
            if (response.is_interested) {
                is_interested_image.classList.add("fas");
                is_interested_image.classList.remove("far");
                // If on dashboard and property not present, add it (optional, usually reload)
            } else {
                is_interested_image.classList.add("far");
                is_interested_image.classList.remove("fas");
                // If on dashboard, remove the property card
                if (window.location.pathname.includes("dashboard.php") && property_card) {
                    property_card.parentNode.removeChild(property_card);
                }
            }
        }
        // Optionally, reload dashboard to update the list
        if (window.location.pathname.includes("dashboard.php")) {
            window.location.reload();
        }
        if (window.location.pathname.includes("property_list.php")) {
            window.location.reload();
        }
    } else if (!response.success && response.is_logged_in === false) {
        window.$("#login-modal").modal("show");
    } else if (!response.success && response.message) {
        alert(response.message);
    }
};