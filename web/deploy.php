<?php
  /**
   * GIT DEPLOYMENT SCRIPT
   *
   * Used for automatically deploying websites via github or bitbucket, more deets here:
   *
   *    https://gist.github.com/1809044
   */

  // The commands
  $commands = array(
    'cd ../',
    'echo $PWD',
    'whoami',
    'git pull',
    'git status',
    'git submodule sync',
    'git submodule update',
    'git submodule status',
    'php app/console cache:clear --env=prod --no-debug',
  );

  // Run the commands for output
  $output = '';
  foreach($commands AS $command){
    // Run it
    $tmp = shell_exec($command);
    // Output
    $output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
    $output .= htmlentities(trim($tmp)) . "\n";
  }

  // Make it pretty for manual user access (and why not?)
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Deploying Hackathon site...</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
 .  ____  .    ____________________________
 |/      \|   |                            |
[| <span style="color: #FF0000;">&hearts;    &hearts;</span> |]  | Git Deployment Script |
 |___==___|  /               |
              |____________________________|

<?php echo $output; ?>
</pre>
</body>
</html>
