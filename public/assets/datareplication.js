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
