var event = document.querySelector("#section-main");
var event1 = document.querySelector("#section_event_1");
var event2 = document.querySelector("#section_event_2");
var event3 = document.querySelector("#section_event_3");
var event4 = document.querySelector("#section_event_4");
var event5 = document.querySelector("#section_event_5");
var event6 = document.querySelector("#section_event_6");

function event_f1() {
    event.classList.remove("show");
    event2.classList.remove("show");
    event3.classList.remove("show");
    event4.classList.remove("show");
    event5.classList.remove("show");
    event6.classList.remove("show");
    event1.classList.add("show");
}

function event_f2() {
    event.classList.remove("show");
    event1.classList.remove("show");
    event3.classList.remove("show");
    event4.classList.remove("show");
    event5.classList.remove("show");
    event6.classList.remove("show");

    event2.classList.add("show");
}

function event_f3() {
    event.classList.remove("show");
    event1.classList.remove("show");
    event2.classList.remove("show");
    event4.classList.remove("show");
    event5.classList.remove("show");
    event6.classList.remove("show");

    event3.classList.add("show");
}

function event_f4() {
    event.classList.remove("show");
    event1.classList.remove("show");
    event2.classList.remove("show");
    event3.classList.remove("show");
    event5.classList.remove("show");
    event6.classList.remove("show");

    event4.classList.add("show");
}

function event_f5() {
    event.classList.remove("show");
    event1.classList.remove("show");
    event2.classList.remove("show");
    event3.classList.remove("show");
    event4.classList.remove("show");
    event6.classList.remove("show");

    event5.classList.add("show");
}

function event_f6() {
    event.classList.remove("show");
    event1.classList.remove("show");
    event2.classList.remove("show");
    event3.classList.remove("show");
    event4.classList.remove("show");
    event5.classList.remove("show");

    event6.classList.add("show");
}
// modal
$(".event-panel-heading a").click(function(){
    var id = $(this).attr("id").split("_");
    var modal = $("#event_"+id[0]+"_"+id[1]);
    modal.css({"display":"block"});
    $(".close").click(function(){
        modal.css({"display":"none"});
    });
    window.onclick = function(event) {
        if (event.target == document.getElementById("event_"+id[0]+"_"+id[1])) {
            modal.css({"display":"none"});
        }
    }
});