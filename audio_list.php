<?php

header('Content-type: application/json');
echo json_encode(glob('audios/*.mp3'));
