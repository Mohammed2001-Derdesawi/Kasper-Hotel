var notificationsWrapper = $('.kt-header__topbar-item dropdown');
var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
var notificationsCountElem = notificationsToggle.find('span[data-count]');
var notificationsCount = parseInt(notificationsCountElem.data('count'));
var notifications = notificationsWrapper.find('div.kt-notification');


// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('Manager_Registration');
console.log("adsfasdfasdf");
// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\ManagerRegister', function (data) {
    console.log(data);

    var existingNotifications = notifications.html();
    var newNotificationHtml = ` <a href="#" class="kt-notification__item">
    <div class="kt-notification__item-icon">
        <i class="flaticon2-line-chart kt-font-success"></i>
    </div>
    <div class="kt-notification__item-details">
        <div class="kt-notification__item-title">
        `+data.name+`
        </div>
        <div class="kt-notification__item-time">
        `+data.name+`
        </div>
    </div>
</a>`;
    notifications.html(newNotificationHtml + existingNotifications);
    notificationsWrapper.show();
});
