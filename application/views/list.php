<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Father Name</th>
                <th>Zip Code</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value) {?>
            <tr>
               	<td><?php echo $key+1; ?></td>
                <td><?php echo $value['first_name']; ?></td>
                <td><?php echo $value['last_name']; ?></td>
                <td><?php echo $value['father_name']; ?></td>
                <td><?php echo $value['zipcode']; ?></td>
                <td><?php echo $value['phone']; ?></td>
                <td><a href="<?php echo base_url().'/assets/uploads/lesson2.pdf'; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="<?php echo base_url(); ?>"><i class="fa fa-plus" aria-hidden="true"></i></a>
                <a href="<?php echo base_url().'record/delete_data/'.$value['id']; ?>"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                </td>
                

            </tr>
            <?php }?>
        </tbody>
        <tfoot>
            <tr>
               <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Father Name</th>
                <th>Zip Code</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>


 <script type="text/javascript">
	$(document).ready(function() {
		$.noConflict();
    $('#example').DataTable();
	} );
 </script>
 <style type="text/css">
 #example_wrapper{
 	    margin: 4% 0% 0% 7%;
 }
 </style>