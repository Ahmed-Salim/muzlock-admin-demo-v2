document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);

    var collapsibles = document.querySelectorAll('.collapsible');
    var collapsibleInstances = M.Collapsible.init(collapsibles);
});