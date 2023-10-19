<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<style>
table {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 75%;
  text-align: left;
}
table td, table th {
  border: 1px dotted #AAAAAA;
  padding: 3px;
  font-family: calibri;
  
}
table th {
  background: #404040;
  color: white;
}

table tbody td {
  font-size: 13px;

}
table thead {
  background: #02A0E1;
  border-bottom: 2px solid #444444;
}
.time {
  width: 18%;
}
.speaker {
  width: 18%;
}

</style>

<script type="test/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">

var location = document.getElementById("location").value;
var date = document.getElementById("date").value;
var data = document.getElementById("data").value;

var url = location + date + position + data;

Get file location from the url
var url = window.location.href;
var filename = url.substring(url.lastIndexOf('/')+1);

//Get value of id position using jquery

//Note that there are many position. So, we need to get the position of the clicked row
const tbody = document.querySelector('#position tbody');
tbody.addEventListener('click', function (e) {
  const cell = e.target.closest('td');
  if (!cell) {return;} // Quit, not clicked on a cell
  const row = cell.parentElement;
  console.log(cell.innerHTML, row.rowIndex, cell.cellIndex);
});

function runMe(test) {
  alert(text);
}

////onclick="alert('ftr//:date='+ this.innerHTML.split(' ')[0]+'time='+ this.innerHTML.split(' ')[1])"

</script>



<body>

<table >
    <tr>
    <th id="date">Date  : <xsl:value-of select="lognotes/header/date"/>
</th>
   </tr>
    <tr>
    <th id="location">Location :  <xsl:value-of select="lognotes/header/location"/></th>
    </tr>
	
   
   <tr>
       <td><pre><xsl:value-of select="lognotes/header/description"/> </pre></td>
   </tr>
</table>

<table id="position"> 
<xsl:for-each select="lognotes/notes/note">
  <tr>
    <td><a href='//ftr:/location1as'><xsl:value-of select="time"/></a></td>
    <td><xsl:value-of select="speaker"/></td>
    <td><xsl:value-of select="text"/><xsl:value-of select="text-rtf"/> </td>
  </tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>