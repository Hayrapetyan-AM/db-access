function getTableContent(tableName){
   $.ajax({
    url : 'Connect.php',
    method : 'post',
    data : {
      tableName : tableName, 
      ajax : true,
      host : host,
      port : port,
      database : database, 
      username : username,
      password : password
    },
    beforeSend: function(){
      $("table").remove()
    },  
    success : function(data)
    {
      let response = JSON.parse(data)
      genereateTable(response)
    }
  });
}