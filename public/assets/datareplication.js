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
    json = JSON.parse(data);
    recordcount = json.recordcount;
    for(i=1; i <= recordcount; i++){
       key = "key_"+i;
       valueKey = "value_"+i;
        tableRowData = '<tr>\
          <th class="theme-bg-light"><a class="theme-link" href="#">'+i+'</a></th>\
          <td>'+json->{key}+'</td>\
          <td>'+json->{valueKey}+'</td>\
        </tr>';
        $("#server-data-table-1 tbody").append(tableRowData);
    }
    /* $(json).each(function (i, val) {
      $.each(val, function (tableId, result) {
        $.each(result, function(key, value) {
          tableRowData = '<tr>\
            <th class="theme-bg-light"><a class="theme-link" href="#">'+tableId+'</a></th>\
            <td>'+key+'</td>\
            <td>'+value+'</td>\
          </tr>';
          $("#server-data-table-1 tbody").append(tableRowData);
        });

      });
    });*/

  });
}

function updateStatus(){
  updateStatus1();
  //updateStatus2();
  //updateStatus3();
  //updateStatus4();
  //updateStatus5();
}
