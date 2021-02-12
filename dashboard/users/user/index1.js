const deleteUserButton = document.querySelector('button[name="delete-user"]');

document.addEventListener('DOMContentLoaded', function () {
    var tabs = document.querySelectorAll('.tabs');
    var tabsInstance = M.Tabs.init(tabs);

    var materialboxes = document.querySelectorAll('.materialboxed');
    var materialboxesInstances = M.Materialbox.init(materialboxes);

    var tooltips = document.querySelectorAll('.tooltipped');
    var tooltipInstances = M.Tooltip.init(tooltips);
});

deleteUserButton.addEventListener('click', (event) => {
    if (confirm("Are You Sure You Want To Delete This User ?\nThis Action Cannot Be Undone!")) {
        window.location.replace("../../../php-scripts/delete-user.php?user_id=" + new URL(window.location.href).searchParams.get("user_id"));
    } else {
    }
});