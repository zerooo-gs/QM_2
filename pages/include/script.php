<script>
  // document.addEventListener('contextmenu', event => event.preventDefault());
  $("form#fm-1").submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: '../include/f1.php',
      type: 'POST',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function (d) {
        if(d==1){
          alert('Data Added Successfully...!');
        }else{
          alert(d);
        }
      }
    });
  });

  $("button.bt-d").click(function(e) {
    e.preventDefault();
    var id=$(this).data('id1');
    if(confirm('Are You Sure To Delete This Row...?')){
      $.ajax({
        url: '../include/fn1.php',
        type: 'POST',
        data: {i:1,id:id},
        success: function (d) {
          if(d==1){
            alert('Data Deleted...!');
            location.reload();
          }else{
            alert(d);
          }
        }
      });
    }
  });

  $("select.rdp-1, select.rdp-2, select.rdp-3").change(function(e) {
    fs_1(1);
    e.preventDefault();
  });
  function fs_1(x) {
    $('.page-loader-wrapper').show();
    var d1=$('select.rdp-1').val();
    var d2=$('select.rdp-2').val();
    var d3=$('select.rdp-3').val();
    $.ajax({
      url: '../include/fs2.php',
      type: 'POST',
      data: {i:x,d1:d1,d2:d2,d3:d3},
      success: function (d) {
        $('.bx-1').empty();
        $('.bx-1').html(d);
        $('.exp1').dataTable({
          "order": []
        });
        $('.page-loader-wrapper').hide();
      }
    });
  };


  $('.ck-1').click(function() {
    $('.exp1').DataTable({
      "order": []
    });
  });
  $('.ck-11').click(function() {
    // // alert();
		//  var oTable = $('#example').dataTable();
    // // Get the data from the first row in the table
    // var data = oTable._('tr:first');
    // // Do something useful with the data
    // alert( "First cell is: "+data[0] );
    // var oTable = $('#exp1').dataTable();
    // oTable.fnDraw();

    // $('#exp1').DataTable({
    //     paging: false,
    //     ordering: false,
    //     info: false,
    //     // alert();
    // });

    /* Custom filtering function which will search data in column four between two values */
    // $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
    //     var min = parseInt($('#min').val(), 10);
    //     var max = parseInt($('#max').val(), 10);
    //     var age = parseFloat(data[8]) || 0; // use data for the age column
    //     if (
    //         (isNaN(min) && isNaN(max)) ||
    //         (isNaN(min) && age <= max) ||
    //         (min <= age && isNaN(max)) ||
    //         (min <= age && age <= max)
    //     ) {
    //     }
    //     return false;
    //     return true;
    //     var table = $('#exp1').DataTable();
    //     // Event listener to the two range filtering inputs to redraw on input
    //     $('#min, #max').keyup(function () {
    //         table.draw();
    //     });
    // });
    
    // $(document).ready(function () {
    // });

  });

  // $(document).ready( function(){
	//   $('#exp1').dataTable( {
	//     // "paginate": false,
	//     // "sort": false
	//   });
	// });

  // $(document).ready( function(){
  //   $('#example').dataTable();
  // });

</script>

<!-- Select Plugin Js -->
<script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>