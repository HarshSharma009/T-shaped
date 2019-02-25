<?php
$select="select * from student";
$res=mysqli_query($conn,$select);

?>
<div class="container">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Roll no</th>
                <th>Branch</th>
                <th>phno</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($res))
            {
            ?>

            <tr>
                <td><?php echo $row[1]; ?> </td>
                <td><?php echo $row[2]; ?> </td>
                <td><?php echo $row[3]; ?> </td>
                <td><?php echo $row[4]; ?> </td>
               
            </tr>
            <?php
             }
             ?>
      
    </tbody>        
</table>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        "pageLength": 100
    });
    
} );
</script>