<?php
foreach($_GET as $progress_file=>$v){break;}

$progress_file = str_replace('..', '', $progress_file);

$dta = @file_get_contents('lib/progress/'.$progress_file.'.json');

if(!$dta){
    die('Progress not found.');
}

function render($dta){
    $project = $dta['project'];
    $milestones = $dta['milestones'];

    foreach($milestones as $k=>$v){
        $m_progress = 0;
        foreach($v as $k2=>$v2){ //Features
            $f_progress = 0;
            foreach($v2['tasks'] as $k3=>$v3){ //Tasks
                $t_title = '';
                $t_progress = '';
                if(is_int($v3)){
                    $t_title = $v3.'%';
                    $t_progress = $v3;
                } else {
                    $p = explode('/', $v3);
                    $ps = 100 / $p[1];
                    $t_progress = round($p[0] * $ps);
                    $t_title = $p[0] . ' of ' . $p[1];
                }
                $f_progress += $t_progress;

                $milestones[$k][$k2]['tasks'][$k3] = array(
                    'label' => $t_title,
                    'progress' => $t_progress
                );
            }

            if(count($v2['tasks'])) $f_progress = round($f_progress / count($v2['tasks']));
            $milestones[$k][$k2]['__progress__'] = $f_progress;
            $m_progress += $f_progress;
        }
        if(count($v)) $m_progress = round($m_progress / count($v));
        $milestones[$k]['__progress__'] = $m_progress;
    }

    include('lib/template.php');
}

render(json_decode($dta, TRUE));