  function genereateTable(data)
  {
    let table = '<table class="table table-info table-striped table-bordered border-success">'
      +generateHeader(data.columns)
      +generateBody(data.content)+
      '</table>'
      tableDiv.empty()
      tableDiv.append(table)
  }

  function generateHeader(columns)
  {
      let headerTH = '';
      $.each(columns, function( index, value ) {
          headerTH += '<th scope="col">'+value+'</th>';
      });
      let header = '<thead><tr>'+headerTH+'</tr></thead>'
      return header
  }

  function generateBody(content)
  {
    let td = ''
    let tr = ''
    $.each(content, function(index,value){
            $.each(value, function(Vindex,Vvalue){
               td += '<td>'+Vvalue+'</td>'
            })
      tr += '<tr>'+td+'</tr>'
      td = ''
    })
    let body = '<tbody>'+tr+'</tbody>'
    return body
  }
