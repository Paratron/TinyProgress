<!DOCTYPE html>
<html lang="en">
<head>
    <link href="favicon.ico" rel="shortcut icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="lib/css/<?= $project['style'] ?>.css" type="text/css" rel="stylesheet" media="screen">
    <title>TinyProgress</title>
</head>
<body>
    <article>
        <div class="meta">
            <h1><?= $project['name'] ?></h1>
            <p><?= nl2br($project['description']) ?></p>
        </div>

        <? foreach($milestones as $title => $milestone):
        if($title == '__progress__') break; ?>
        <section class="milestone">
            <h2><?= $title ?></h2>
            <div class="progress"><span class="bar orange" style="width: <?=$milestone['__progress__']?>%"></span><span class="label"><?=$milestone['__progress__']?>%</span></div>

            <? foreach($milestone as $title2 => $feature):
            if($title2 == '__progress__') break; ?>
            <div class="feature">
                <h3><?= $title2 ?></h3>
                <div class="progress"><span class="bar yellow" style="width: <?=$feature['__progress__']?>%"></span><span class="label"><?=$feature['__progress__']?>%</span></div>
                <? foreach($feature['tasks'] as $title3 => $task): ?>
                <div class="task">
                    <span class="label"><?= $title3 ?></span>
                    <div class="progress"><span class="bar green" style="width: <?=$task['progress']?>%"></span><span class="label"><?= $task['label']?></span></div>
                </div>
                <? endforeach; ?>
            </div>
            <? endforeach; ?>

        </section>
    <? endforeach; ?>
    </article>
</body>
</html>