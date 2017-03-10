<?php

  $post_data =  json_decode($GLOBALS['HTTP_RAW_POST_DATA']);
file_put_contents('a.txt', $post_data);
  //这里是一个认证的token，下面我们就会设置到
//  if($post_data->Secret === 'myhook') {

      $pwd = getcwd();

      // '2>$1' 配置管道输出错误，方便调试
      // 这里已经配置了上面coding仓库的remote，并且-u 绑定了默认remote，所以直接使用'git pull'
      // 建议先在cmd里面把这条命令跑通了先！
      $command = 'cd ' . str_replace('\\', '/\\', $pwd) . ' & git pull 2>&1';

      $status = shell_exec($command);

      print $status;
 // }
?>
