$(document).ready(function(){
   $('#searchExpr').keyup(function () {
     var t = this;
     $("#TxtHint").load("newEmployeeSearcher.php?searchExpr=" + t.value);
   });
 });



