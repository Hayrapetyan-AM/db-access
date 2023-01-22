<style>
  
  .main{
    display:block;
    height:700px;
    overflow:scroll;
} 
</style>

<div class="container p-5 main" id="tableDiv"></div>
<script src="../js/generateTable.js"></script>
<script src="../js/getTableContent.js"></script>
<script>
  
const host = "<?php echo $this->host; ?>";
const port = "<?php echo $this->port; ?>";
const database = "<?php echo $this->database; ?>";
const username = "<?php echo $this->username; ?>";
const password = "<?php echo $this->password; ?>";
const tableDiv = $("#tableDiv")

$(".tableName").one("click",function(){
  let tableName = this.innerText
  getTableContent(tableName)
})
</script>


