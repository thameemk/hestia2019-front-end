let queMembers = [];
$(document).ready(function() {
  $("#addmoreMembersBtn").click(function() {
    if (queMembers.length < 4) {
      let id_ = "#member_" + (queMembers.length + 1);
      $(id_).show();
      for (let incr = 0; incr < queMembers.length; incr++) {
        $(queMembers[incr] + "_close").hide();
      }
      $(id_ + "_close").show();
      queMembers.push(id_);
      if (queMembers.length >= 3) {
        $("#addmoreMembersBtn").css({
          "opacity": "0.7",
          "border-color": "grey",
          "color": "grey"
        });
        $("#addmoreMembersBtn").attr("disabled", "disabled");
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
