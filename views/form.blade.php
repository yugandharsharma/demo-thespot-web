
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
	body {
    background-color: #f2f7fb
}

.mt-100 {
    margin-top: 100px
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);
    box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.card .card-header {
    background-color: transparent;
    border-bottom: none;
    padding: 20px;
    position: relative
}

.card .card-header h5:after {
    content: "";
    background-color: #d2d2d2;
    width: 101px;
    height: 1px;
    position: absolute;
    bottom: 6px;
    left: 20px
}

.card .card-block {
    padding: 1.25rem
}

.dropzone.dz-clickable {
    cursor: pointer
}

.dropzone {
    min-height: 150px;
    border: 1px solid rgba(42, 42, 42, 0.05);
    background: rgba(204, 204, 204, 0.15);
    padding: 20px;
    border-radius: 5px;
    -webkit-box-shadow: inset 0 0 5px 0 rgba(43, 43, 43, 0.1);
    box-shadow: inset 0 0 5px 0 rgba(43, 43, 43, 0.1)
}

.m-t-20 {
    margin-top: 20px
}

.btn-primary,
.sweet-alert button.confirm,
.wizard>.actions a {
    background-color: #4099ff;
    border-color: #4099ff;
    color: #fff;
    cursor: pointer;
    -webkit-transition: all ease-in .3s;
    transition: all ease-in .3s
}

.btn {
    border-radius: 2px;
    text-transform: capitalize;
    font-size: 15px;
    padding: 10px 19px;
    cursor: pointer
}
</style>
<body>
<div class="row d-flex justify-content-center mt-100">
    <div class="col-md-8">
       
               <?php echo Form::open(array('url' => 'home/documentView','files'=>'true')); ?>
					<textarea rows="30" cols="120" name="comment" value='<?php $data ?>'>
					<?php echo $data ?></textarea>
					<?php 
					echo Form::submit('Upload File');
					echo Form::close(); 
					?>

            
    </div>
</div>
</body>
</html>