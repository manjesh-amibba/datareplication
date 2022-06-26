function writeData(){

}

function writeData(){
  var keyData = $("#key").val();
  var valueData = $("#value").val();
  $.post("write-data",
  {
    'key': keyData,
    'value': valueData
  },
  function(data, status){
    $("#key").val('');
    $("#value").val('');
    $("#write-status").show();
  });
}
function updateStatus1(){
  $.get("read-data", function(data, status){
      
  });
}
var intervalId = window.setInterval(function(){
  updateStatus();
}, 10000);

function updateStatus(){
  updateStatus1();
  //updateStatus2();
  //updateStatus3();
  //updateStatus4();
  //updateStatus5();
}
