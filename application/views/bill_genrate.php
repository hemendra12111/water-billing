<html>
<div class="container" style="
    width:  80%;
    height:  50%;
    border:  1px solid;
">
    <div class="">
        	<h2><span class="left">Water-Bill </span><span class="right">Order # <?php echo rand();?></span></h2>
    </div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					<?php echo $data[0]['first_name']." ".$data[0]['last_name']; ?><br>
    					 S/O <?php echo $data[0]['father_name']; ?>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Address:</strong><br>
    					<?php echo $data[0]['address'];?>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Order Date:</strong><br>
    					<?php echo date("Y-m-d h:i:sa");?>
    					<br><br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
        			<strong>
        				Basic Details
        			</strong><br>
        			Meter Number:<span><?php echo $data[0]['meter_number'];?></span><br>
        			Zone Number:<span><?php echo $data[0]['zone_number'];?></span><br>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Bill-Details</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong></strong></td>
        							<td class="text-center"><strong>Total Unit</strong></td>
        							<td class="text-center"><strong>Per Unit/Price</strong></td>
        							<td class="text-right"><strong>Total</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td>Total Unit of Last Two Month</td>
    								<td class="text-center"><?php echo $data[0]['meter_reading'];?></td>
    								<td class="text-center">5</td>
    								<td class="text-right"><?php echo $total = $data[0]['meter_reading']*5;?></td>
    							<tr>

    							<tr>
    								<td>Service Text(14%)</td>
    								<td class="text-center"></td>
    								<td class="text-center"></td>
    								<td class="text-right"><?php echo $tax = $total*14/100;?></td>
    							<tr>

    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Total</strong></td>
    								<td class="thick-line text-right"><?php echo $tax+$total;?></td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>

<style type="text/css">
	.invoice-title h2, .invoice-title h3 {
    	display: inline-block;
	}

	.table > tbody > tr > .no-line {
	    border-top: none;
	}

	.table > thead > tr > .no-line {
	    border-bottom: none;
	}

	.table > tbody > tr > .thick-line {
	    border-top: 2px solid;
	}
</style>
<html>