
$(document).ready(function(){



$('body').on("click", "#enableSuspension", function() {
  notification('Client suspension enabled.', 2000)
  disabled = true
})

$('body').on("click", "#Immediate", function() {
    notification('Warning sent to Healthworker for screening!', 2000)
    this.disabled = true    
  })
  $('body').on("click", "#Unschedule", function() {
    notification('Unscheduled.', 2000)
    this.disabled = true
  })
  $('body').on("click", "#Send_Notification", function() {
    notification('Notification sent.', 2000)
    this.disabled = true
  })
  $('body').on("click", "#Availability", function() {
    notification('Availability checked. Can be scheduled.', 2000)
    this.disabled = true
  })
  $('body').on("click", "#Notify_schedule", function() {
    notification('Healthworker notified about schedule.', 2000)
    this.disabled = true

  })

function notification(s, time) {
  $("<p>" + s + "</p>").appendTo('#notification-box').fadeTo(time, 1, function() {
    $(this).fadeTo(1000, 0, function() {
      $(this).remove()
    });
  });
}

});