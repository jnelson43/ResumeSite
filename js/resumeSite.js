$(document).ready(function () {
  $(".portfolioItem").hide();
  $(".timelineWrapper").hide();
  $(window).scroll(function () {
    $(".portfolioItem").fadeIn(1000);
  });
  $(window).scroll(function () {
    $(".timelineWrapper").fadeIn(1000);
  });
  
  var antiSpam1 = Math.floor(Math.random() * 10);
  var antiSpam2 = Math.floor(Math.random() * 10);
  var solution = antiSpam1 + antiSpam2;

  $("#antiSpamLabel").html("Anti-Spam: What is " + antiSpam1 + " + " + antiSpam2 + " ");
  $(".contactForm").append("<input name='antiSpamSolution' type='hidden' value='" + solution + "'></input>");
});