<body>
<h1>hello new view</h1>
<p>my value has been loaded</p>

<?php foreach($rows as $r) : ?>
<h1><?php echo $r->title; ?></h1>
<div><?php echo $r->content; ?></div>
<?php endforeach; ?>
</body>