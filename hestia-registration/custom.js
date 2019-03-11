let queMembers = [];
let min = 3; // TODO set min
let max = 3; // TODO set max
$(document).ready(function() {
  if (max-min<=0) {
    $("#addmoreMembersBtn").css({
      "display": "none"
    });
  }
  $("#addmoreMembersBtn").click(function() {
    if (queMembers.length < max-min) {
      let id_ = "#member_" + (queMembers.length + 1);
      $(id_).show();
      for (let incr = 0; incr < queMembers.length; incr++) {
        $(queMembers[incr] + "_close").hide();
      }
      $(id_ + "_close").show();
      queMembers.push(id_);
      if (queMembers.length >= max-min) {
        $("#addmoreMembersBtn").css({
          "opacity": "0.7",
          "border-color": "grey",
          "color": "grey"
        });
      }
    }
  })
  $(".close-href").click(function() {
    let id_ = $(this).attr('id');
    $("#" + id_).hide();
    $(queMembers[queMembers.length - 1] + " input").val('');
    id_ = id_.substring(0, 8);
    queMembers.splice(queMembers.indexOf("#" + id_), 1);
    $("#" + id_).hide();
    $("#addmoreMembersBtn").css({
      "opacity": "1",
      "border-color": "black",
      "color": "black"
    });
    $("#addmoreMembersBtn").removeAttr("disabled", "disabled");
    $(queMembers[queMembers.length - 1] + "_close").show();
  })
  $("#uploadAbstractPseudo").click(function() {
    $("#uploadAbstract").trigger("click");
  })
})
