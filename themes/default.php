<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style>
    .highlight{background-color:#FFE4B5;}
    <?php $rand = random_int(100000, 999999)?>
    .panel<?php echo $rand?> > .panel-heading{cursor: pointer;}
</style>
<div class="container">
    <div class="alert alert-danger" role="alert" style="font-size:18px;"><?php echo $errorMsg?></div>
    <div class="panel-group">
        <div class="panel panel-default panel<?php echo $rand?>">
            <div class="panel-heading"><?php echo $errorFile . ' #' . $errorLine?></div>
            <div class="panel-body">
                <pre>
<?php
echo self::getSource($errorFile, $errorLine);
?>
                </pre>
            </div>
        </div>
        <?php foreach ($trace as $file) :?>
            <div class="panel panel-default panel<?php echo $rand?>">
                <div class="panel-heading"><?php echo $file['file'] . ' #' . $file['line']?></div>
                <div class="panel-body">
                    <pre>
<?php
echo self::getSource($file['file'], $file['line']);
?>
                    </pre>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
<script>
    var $groups = document.querySelectorAll('.panel-group>.panel<?php echo $rand?>');
    for (var $i = 0, $count = $groups.length; $i < $count; $i ++ ) {
        var $group = $groups[$i];
        if ($i != 0) {
            $group.querySelector('.panel-body').style.display = 'none';
        }
        $group.querySelector('.panel-heading').onclick = function () {
            this.parentNode.querySelector('.panel-body').style.display = 'block';
            var $parentSiblings = getSiblings<?php echo $rand?>(this.parentNode);
            for (var $j = 0, $length = $parentSiblings.length; $j < $length; $j ++) {
                $parentSiblings[$j].querySelector('.panel-body').style.display = 'none';
            }
        }
    }
    function getSiblings<?php echo $rand?>($element) {
        var $siblings = [];
        var $el = $element.nextElementSibling
        while ($el) {
            $siblings.push($el);
            $el = $el.nextElementSibling;
        }
        $el = $element.previousElementSibling;
        while ($el) {
            $siblings.push($el);
            $el = $el.previousElementSibling;
        }
        return $siblings;
    }
</script>
<hr>