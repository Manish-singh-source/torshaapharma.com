<div class="page-breadcrumb-area style-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <div class="page-heading">
                        <h3 class="page-title text-uppercase"><?php echo $title; ?></h3>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <?php if(isset($subtitle) && $subtitle != '') { ?>
                            <li class="active"><a href="javascript:void(0)"><?php echo $subtitle; ?></a></li>
                            <?php } ?>
                            <?php if(isset($title) && $title != '') { ?>
                            <li class="active text-capitalize"><a href="#" class="text-capitalize"><?php echo $title; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>