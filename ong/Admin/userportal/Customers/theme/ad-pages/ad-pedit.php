<?php if(isset($_GET['id'])){?>
			<?php $id = htmlentities($_GET['id']);?>
<?php }?>

<div class="col-sm-3">
	
    <?php $promo = $spconn->query("SELECT * FROM tb_promo where promo_id = $id");?>
    
<form id="epromo" name="upromo"> 
  
	<div class="panel panel-default text-center effect2 efbor">

                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-file"></i> <?php echo $title;?> information
                                    </div>
                                    <div class="panel-body">
   	                                 
    <?php foreach($promo as $key=> $row){?>
                                    
	<div class="form-group">
    <input class="form-control" name="promoid" type="hidden" value="<?php echo $id;?>"/>
    <input readonly="readonly" class="form-control" name="promocode" type="text" 
    value="<?php echo $row['promo_code'];?>"/>
    </div>
    <div class="form-group">
    <input class="form-control" name="promo" type="text" placeholder="Promo details" value="<?php echo $row['promo'];?>"/>
    </div>
    <div class="form-group">
    <input class="form-control" name="discount" type="text" placeholder="Discount" value="<?php echo $row['promo_discount'];?>"/>
    </div>
    
    <input id="sid" type="hidden" value="<?php echo $row['swimmer_id'];?>" />
    
    <button type="submit" class="btn btn-sm btn-success efbor"><i class="glyphicon glyphicon-pencil"></i> Update <?php echo $title;?></button> 
    <a href='?page=promo&id=<?php echo $row['swimmer_id'];?>' class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</a> 
                                        
	<?php }?>								
									</div>	
	</div>
</form>

</div>