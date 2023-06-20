<?php

$redis = new Redis();
$redis->connect('redis', 6379);
$code = $redis->get('code');

echo "
        <video controls width=\"250\" autoplay=\"true\" muted=\"true\" loop=\"true\">

                 <source src=\"https://images-ext-2.discordapp.net/external/iDoRVEFvDLl8ZZdt-oWShFE-faAZ4ZuLnu_8atOzUZ4/https/media.tenor.com/QmLdalGaX84AAAPo/my-honest-reaction.mp4\" type=\"video/mp4\">

        </video>
	<table>
		<tr>
			<td>SERVERNAME</td>
			<td><b>".$_SERVER['SERVER_NAME']."</b></td>
		</tr>
                <tr>
                        <td>HOSTNAME</td>
                        <td><b>".gethostname()."</b></td>
                </tr>
                <tr>
                        <td>ETUDIANT</td>
                        <td><b>".$_ENV['NOM']." / ".$_ENV['PRENOM']."</b></td>
		</tr>
               <tr>
                        <td>CODE</td>
                        <td><b>$code</b></td>
                </tr>


	</table>";
