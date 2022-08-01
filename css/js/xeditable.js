
//    $(document).ready(function(){
//     $('[data-toggle="tooltip"]').tooltip();   
// });
 
/*---------------------------Control pages-----------------------------*/


$(document).ready(function() {
  $('#managecontroltable').DataTable({

    "lengthMenu": [ [8,10, 25, 50, -1], [8,10, 25, 50, "All"] ],
});

});

$(document).ready(function(){
  $('#btn_deletestatus').click(function(){
  if(confirm("Are you sure you want to delete this?")) {
  var id = [];
  $(':checkbox:checked').each(function(i){
  id[i] = $(this).val();
  });
  if(id.length === 0) //tell you if the array is empty
  {
  alert("Please Select atleast one checkbox");
  }else {
  $.ajax({
  url:'action/deletestatus.php',
  method:'POST',
  data:{id:id},
  success:function()
  { 
      for(var i=0; i<id.length; i++)
      {
      $('tr#'+id[i]+'').css('background-color', '#ccc');
      $('tr#'+id[i]+'').fadeOut('slow');
      }
  }
      
  });
  }
  }else{
  return false;
  }
});
});







/*-----------checkboxes - check all--------------*/

   
                            
$(document).ready(function(){
  $("#checkAll").click(function(){
      if($(this).is(":checked")){
          $(".checkItem").prop('checked',true)
      }
      else{
          $(".checkItem").prop('checked',false)
      }
  });
});












/*-----------Student--------------*/




$(document).ready(function() {
  $('#managestud').DataTable({

    "lengthMenu": [ [8,10, 25, 50, -1], [8,10, 25, 50, "All"] ],
});




});

$(document).ready(function(){
  $('#btn_deletestudent').click(function(){
  if(confirm("Are you sure you want to delete this?")) {
  var id = [];
  $(':checkbox:checked').each(function(i){
  id[i] = $(this).val();
  });
  if(id.length === 0) //tell you if the array is empty
  {
  alert("Please Select atleast one checkbox");
  }else {
  $.ajax({
  url:'action/deletestudent.php',
  method:'POST',
  data:{id:id},
  success:function()
  { 
      for(var i=0; i<id.length; i++)
      {
      $('tr#'+id[i]+'').css('background-color', '#ccc');
      $('tr#'+id[i]+'').fadeOut('slow');
      }
  }
      
  });
  }
  }else{
  return false;
  }
});
});






/*---------- managestudentdetail--------------*/


$(document).ready(function() {
  $('#managestudentdetail').DataTable({

    "lengthMenu": [ [-1], ["All"] ],
});
});




$(document).ready(function(){
  $('#btn_deletestudentdetail').click(function(){
  if(confirm("Are you sure you want to delete this?")) {
  var id = [];
  $(':checkbox:checked').each(function(i){
  id[i] = $(this).val();
  });
  if(id.length === 0) //tell you if the array is empty
  {
  alert("Please Select atleast one checkbox");
  }else {
  $.ajax({
  url:'action/deletestudentdetail.php',
  method:'POST',
  data:{id:id},
  success:function()
  { 
      for(var i=0; i<id.length; i++)
      {
      $('tr#'+id[i]+'').css('background-color', '#ccc');
      $('tr#'+id[i]+'').fadeOut('slow');
      }
  }
      
  });
  }
  }else{
  return false;
  }
});
});


/*----------- managestudentsubjectload------------- */
$(document).ready(function() {
  $('#managestudentsubjectload').DataTable({

    "lengthMenu": [ [-1], ["All"] ],


  });




});

/*----------- Student List of Loads of Subjects-------------- */
$(document).ready(function(){
  $('#btn_deletestudentsubj').click(function(){
  if(confirm("Are you sure you want to delete this?")) {
  var id = [];
  $(':checkbox:checked').each(function(i){
  id[i] = $(this).val();
  });
  if(id.length === 0) //tell you if the array is empty
  {
  alert("Please Select atleast one checkbox");
  }else {
  $.ajax({
  url:'action/deletestudentsubject.php',
  method:'POST',
  data:{id:id},
  success:function()
  { 
      for(var i=0; i<id.length; i++)
      {
      $('tr#'+id[i]+'').css('background-color', '#ccc');
      $('tr#'+id[i]+'').fadeOut('slow');
      }
  }
      
  });
  }
  }else{
  return false;
  }
});
});









/*-----------Teacher--------------*/





$(document).ready(function() {
  $('#manageteacher').DataTable({

    "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],


  });




});

$(document).ready(function(){
  $('#btn_deleteteacher').click(function(){
  if(confirm("Are you sure you want to delete this?")) {
  var id = [];
  $(':checkbox:checked').each(function(i){
  id[i] = $(this).val();
  });
  if(id.length === 0) //tell you if the array is empty
  {
  alert("Please Select atleast one checkbox");
  }else {
  $.ajax({
  url:'action/deleteteacher.php',
  method:'POST',
  data:{id:id},
  success:function()
  { 
      for(var i=0; i<id.length; i++)
      {
      $('tr#'+id[i]+'').css('background-color', '#ccc');
      $('tr#'+id[i]+'').fadeOut('slow');
      }
  }
      
  });
  }
  }else{
  return false;
  }
});
});






/*---------- manageteacherdetail--------------*/


$(document).ready(function() {
  $('#manageteacherdetail').DataTable({

    "lengthMenu": [ [-1], ["All"] ],
});
});



$(document).ready(function(){
  $('#btn_deleteteacherdetail').click(function(){
  if(confirm("Are you sure you want to delete this?")) {
  var id = [];
  $(':checkbox:checked').each(function(i){
  id[i] = $(this).val();
  });
  if(id.length === 0) //tell you if the array is empty
  {
  alert("Please Select atleast one checkbox");
  }else {
  $.ajax({
  url:'action/deleteteacherdetail.php',
  method:'POST',
  data:{id:id},
  success:function()
  { 
      for(var i=0; i<id.length; i++)
      {
      $('tr#'+id[i]+'').css('background-color', '#ccc');
      $('tr#'+id[i]+'').fadeOut('slow');
      }
  }
      
  });
  }
  }else{
  return false;
  }
});
});






/*-----------Teacher List of Loads of Subjects -------------- */
$(document).ready(function() {
  $('#manageteachersubjectload').DataTable({

    "lengthMenu": [ [5,10, 25, 50, -1], [5,10, 25, 50, "All"] ],


  });




});



$(document).ready(function(){
  $('#btn_deleteteachersubj').click(function(){
  if(confirm("Are you sure you want to delete this?")) {
  var id = [];
  $(':checkbox:checked').each(function(i){
  id[i] = $(this).val();
  });
  if(id.length === 0) //tell you if the array is empty
  {
  alert("Please Select atleast one checkbox");
  }else {
  $.ajax({
  url:'action/deleteteachersubject.php',
  method:'POST',
  data:{id:id},
  success:function()
  { 
      for(var i=0; i<id.length; i++)
      {
      $('tr#'+id[i]+'').css('background-color', '#ccc');
      $('tr#'+id[i]+'').fadeOut('slow');
      }
  }
      
  });
  }
  }else{
  return false;
  }
});
});

/*-----------Teacher List of Loads of section -------------- */
$(document).ready(function() {
  $('#manageteachersectionload').DataTable({

    "lengthMenu": [ [5,10, 25, 50, -1], [5,10, 25, 50, "All"] ],


  });




});


$(document).ready(function(){
  $('#btn_deleteteachersection').click(function(){
  if(confirm("Are you sure you want to delete this?")) {
  var id = [];
  $(':checkbox:checked').each(function(i){
  id[i] = $(this).val();
  });
  if(id.length === 0) //tell you if the array is empty
  {
  alert("Please Select atleast one checkbox");
  }else {
  $.ajax({
  url:'action/deleteteachersection.php',
  method:'POST',
  data:{id:id},
  success:function()
  { 
      for(var i=0; i<id.length; i++)
      {
      $('tr#'+id[i]+'').css('background-color', '#ccc');
      $('tr#'+id[i]+'').fadeOut('slow');
      }
  }
      
  });
  }
  }else{
  return false;
  }
});
});





/*-----------parent -------------- */
$(document).ready(function(){
  $('#btn_deleteparent').click(function(){
  if(confirm("Are you sure you want to delete this?")) {
  var id = [];
  $(':checkbox:checked').each(function(i){
  id[i] = $(this).val();
  });
  if(id.length === 0) //tell you if the array is empty
  {
  alert("Please Select atleast one checkbox");
  }else {
  $.ajax({
  url:'action/deleteparent.php',
  method:'POST',
  data:{id:id},
  success:function()
  { 
      for(var i=0; i<id.length; i++)
      {
      $('tr#'+id[i]+'').css('background-color', '#ccc');
      $('tr#'+id[i]+'').fadeOut('slow');
      }
  }
      
  });
  }
  }else{
  return false;
  }
});
});




/*-----------select tag search parentpage -------------- */
$(document).ready(function() {
  $('#select_stud').select2();
});





/*-----------parentpage delete -------------- */

$(document).ready(function(){
  $('#btn_deleteparentdetail').click(function(){
  if(confirm("Are you sure you want to delete this?")) {
  var id = [];
  $(':checkbox:checked').each(function(i){
  id[i] = $(this).val();
  });
  if(id.length === 0) //tell you if the array is empty
  {
  alert("Please Select atleast one checkbox");
  }else {
  $.ajax({
  url:'action/deleteparentdetail.php',
  method:'POST',
  data:{id:id},
  success:function()
  { 
      for(var i=0; i<id.length; i++)
      {
      $('tr#'+id[i]+'').css('background-color', '#ccc');
      $('tr#'+id[i]+'').fadeOut('slow');
      }
  }
      
  });
  }
  }else{
  return false;
  }
});
});












/*-----------subjectlist -------------- */
$(document).ready(function() {
    $('#subjectlist').DataTable({
  
      "lengthMenu": [ [-1], ["All"] ],
  
  
    });
  
  
  
  
});
  







/*-----------Curriculum-------------- */
$(document).ready(function(){
  
      var dataTable = $('#managecurriculum').DataTable({
      "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
      "processing" : true,
      "serverSide" : true,
      "order" : [],
      "ajax" : {
      url:"fetch/fetchcurriculum.php",
      type:"POST"
      }
      });
      $('#managecurriculum').on('draw.dt', function(){
      $('#managecurriculum').Tabledit({
      url:'action/actioncurriculum.php',
      dataType:'json',
      buttons: {
        edit: {
            class: 'btn btn-sm btn-success',  
            action: 'edit'
        },
        delete: {
          class: 'btn btn-sm btn-danger',           
          action: 'delete'
      },},
      columns:{
      identifier: [0,'curriculumid'],
     
      editable:[[1, 'curriculumdesc']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
      if(data.action == 'delete')
      {
      $('#' + data.id).remove();
      $('#managecurriculum').DataTable().ajax.reload();
      }
      }
      });
      });
     
  });
    

/*-----------SchoolYear--------------  */ 
$(document).ready(function(){
  var dataTable = $('#manageschoolyear').DataTable({
  "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
  "processing" : true,
  "serverSide" : true,
  "order" : [],
  "ajax" : {
  url:"fetch/fetchschoolyear.php",
  type:"POST"
  }
  });
  $('#manageschoolyear').on('draw.dt', function(){
  $('#manageschoolyear').Tabledit({
  url:'action/actionschoolyear.php',
  dataType:'json',
  buttons: {
    edit: {
        class: 'btn btn-sm btn-success',  
        action: 'edit'
    },
    delete: {
      class: 'btn btn-sm btn-danger',           
      action: 'delete'
  },},
  columns:{
  identifier : [0, 'syid'],
  editable:[[1,'sy'],[2, 'sydesc'],[3,'curriculumdesc']],

  },
  restoreButton:false,
  onSuccess:function(data, textStatus, jqXHR)
  {
  if(data.action == 'delete')
  {
  $('#' + data.id).remove();
  $('#manageschoolyear').DataTable().ajax.reload();
  }
  }
  });
  });
}); 


/*-----------Department-------------- */
$(document).ready(function(){
  
  var dataTable = $('#managedepartment').DataTable({
  "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
  "processing" : true,
  "serverSide" : true,
  "order" : [],
  "ajax" : {
  url:"fetch/fetchdepartment.php",
  type:"POST"
  } 
  });
  $('#managedepartment').on('draw.dt', function(){
  $('#managedepartment').Tabledit({
  url:'action/actiondepartment.php',
  dataType:'json',
  buttons: {
    edit: {
        class: 'btn btn-sm btn-success',  
        action: 'edit'
    },
    delete: {
      class: 'btn btn-sm btn-danger',           
      action: 'delete'
  },},
  columns:{
  identifier: [0,'departmentid'],
  editable:[[1, 'department'],[2, 'departmentdesc'],[3,'educationlevel']]
  },
  restoreButton:false,
  onSuccess:function(data, textStatus, jqXHR)
  {
  if(data.action == 'delete')
  {
  $('#' + data.id).remove();
  $('#managedepartment').DataTable().ajax.reload();
  }
  }
  });
  });
 
}); 


/*-----------Grade level--------------*/
$(document).ready(function(){
  
  var dataTable = $('#managegradelevel').DataTable({
  "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
  "processing" : true,
  "serverSide" : true,
  "order" : [],
  "ajax" : {
  url:"fetch/fetchgradelevel.php",
  type:"POST"
  }
  });
  $('#managegradelevel').on('draw.dt', function(){
  $('#managegradelevel').Tabledit({
  url:'action/actiongradelevel.php',
  dataType:'json',
  buttons: {
    edit: {
        class: 'btn btn-sm btn-success',  
        action: 'edit'
    },
    delete: {
      class: 'btn btn-sm btn-danger',           
      action: 'delete'
  },},
  columns:{
  identifier:[0, 'gradelevelid'],
  editable:[[1, 'gradeleveldesc']]
  },
  restoreButton:false,
  onSuccess:function(data, textStatus, jqXHR)
  {
  if(data.action == 'delete')
  {
  $('#' + data.id).remove();
  $('#managegradelevel').DataTable().ajax.reload();
  }
  }
  });
  });
 
}); 


/*-----------Grade Section-------------- */
$(document).ready(function(){
  
  var dataTable = $('#managegradesection').DataTable({
  "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
  "processing" : true,
  "serverSide" : true,
  "order" : [],
  "ajax" : {
  url:"fetch/fetchgradesection.php",
  type:"POST"
  }
  });
  $('#managegradesection').on('draw.dt', function(){
  $('#managegradesection').Tabledit({
  url:'action/actiongradesection.php',
  dataType:'json',
  buttons: {
    edit: {
        class: 'btn btn-sm btn-success',  
        action: 'edit'
    },
    delete: {
      class: 'btn btn-sm btn-danger',           
      action: 'delete'
  },},
  columns:{
  identifier:[0, 'gradesectionid'],
  editable:[[1, 'gradedesc'],[2, 'sectiondesc'],[3, 'department'],[4, 'departmentdesc'],[5, 'educationlevel']]
  },
  restoreButton:false,
  onSuccess:function(data, textStatus, jqXHR)
  {
  if(data.action == 'delete')
  {
  $('#' + data.id).remove();
  $('#managegradesection').DataTable().ajax.reload();
  }
  }
  });
  });
 
}); 


/*-----------Subject -------------- */
$(document).ready(function(){
  
  var dataTable = $('#managesubject').DataTable({
  "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
  "processing" : true,
  "serverSide" : true,
  "order" : [],
  "ajax" : {
  url:"fetch/fetchsubject.php",
  type:"POST"
  }
  });
  $('#managesubject').on('draw.dt', function(){
  $('#managesubject').Tabledit({
  url:'action/actionsubject.php',
  dataType:'json',
  buttons: {
    edit: {
        class: 'btn btn-sm btn-success',  
        action: 'edit'
    },
    delete: {
      class: 'btn btn-sm btn-danger',           
      action: 'delete'
  },},
  columns:{
  identifier:[0, 'subjectid'],
  editable:[[1, 'subject'],[2, 'subjectdesc'],[3,'subjectgradelevel']]
  },
  restoreButton:false,
  onSuccess:function(data, textStatus, jqXHR)
  {
  if(data.action == 'delete')
  {
  $('#' + data.id).remove();
  $('#managesubject').DataTable().ajax.reload();
  }
  }
  });
  });
 
}); 



/*-----------Grading Period -------------- */
$(document).ready(function(){
  
  var dataTable = $('#managegradingperiod').DataTable({
  "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
  "processing" : true,
  "serverSide" : true,
  "order" : [],
  "ajax" : {
  url:"fetch/fetchgradingperiod.php",
  type:"POST"
  }
  });
  $('#managegradingperiod').on('draw.dt', function(){
  $('#managegradingperiod').Tabledit({
  url:'action/actiongradingperiod.php',
  dataType:'json',
  buttons: {
    edit: {
        class: 'btn btn-sm btn-success',  
        action: 'edit'
    },
    delete: {
      class: 'btn btn-sm btn-danger',           
      action: 'delete'
  },},
  columns:{
  identifier:[0, 'id'],
  editable:[[1, 'gradingperiod'],[2, 'department']]
  },
  restoreButton:false,
  onSuccess:function(data, textStatus, jqXHR)
  {
  if(data.action == 'delete')
  {
  $('#' + data.id).remove();
  $('#managegradingperiod').DataTable().ajax.reload();
  }
  }
  });
  });
 
}); 








