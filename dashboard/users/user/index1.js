document.addEventListener('DOMContentLoaded', function () {
    var tabs = document.querySelectorAll('.tabs');
    var tabsInstance = M.Tabs.init(tabs);

    var materialboxes = document.querySelectorAll('.materialboxed');
    var materialboxesInstances = M.Materialbox.init(materialboxes);

    var tooltips = document.querySelectorAll('.tooltipped');
    var tooltipInstances = M.Tooltip.init(tooltips);

    var datepickers = document.querySelectorAll('.datepicker');
    var datepickerInstances = M.Datepicker.init(datepickers);
});