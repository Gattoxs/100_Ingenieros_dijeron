<?php 

switch ($_GET['z']) {
	case 'Seleccion':
		echo "<embed src='Sound/Champion Select.mp3' autostart='true' loop=false width=0 height=0 >";
		break;
	case 'Challenger':
		echo "<img src='img/reta.gif' style='width: 100%;'>
		<embed src='Sound/Music/Challenger.mp3' autostart='true' loop=false width=0 height=0 >";
		break;
	case 'Tirado':
		echo "<img src='img/tirado.jpg' style='width: 100%;'>
		<embed src='Sound/Music/tirado.mp3' autostart='true' loop=false width=0 height=0 >";
		break;
	case 'Music':
		switch ($_GET['x']) {
			case 'Escape':
				echo "<embed src='Sound/Music/SonicEscape.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Mario':
				echo "<embed src='Sound/Music/Mario.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Red':
				echo "<embed src='Sound/Music/Red.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Goku':
				echo "<embed src='Sound/Music/Goku.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Light':
				echo "<embed src='Sound/Music/Light.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Shinge':
				echo "<embed src='Sound/Music/Shinge.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Zelda':
				echo "<embed src='Sound/Music/Zelda.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'LoL':
				echo "<embed src='Sound/Music/LoL.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Iron':
				echo "<embed src='Sound/Music/Iron.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'SW':
				echo "<embed src='Sound/Music/SW.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'HT':
				echo "<embed src='Sound/Music/HT.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Mega':
				echo "<embed src='Sound/Music/Mega.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'DP':
				echo "<embed src='Sound/Music/DP.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'UM':
				echo "<embed src='Sound/Music/UM.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Digimon':
				echo "<embed src='Sound/Music/Digimon.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Pokemon':
				echo "<embed src='Sound/Music/Pokemon.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'One':
				echo "<embed src='Sound/Music/One.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Ranma':
				echo "<embed src='Sound/Music/Ranma.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Inu':
				echo "<embed src='Sound/Music/Inu.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Sailor':
				echo "<embed src='Sound/Music/Sailor.mp3' autostart='true' loop=false width=0 height=0 >";
				break;
			case 'Caba':
				echo "<embed src='Sound/Music/Caba.mp3' autostart='true' loop=false width=0 height=0 >";
				break;

			case 'INC':
				
				break;

			default:
				# code...
				break;
		}
		break;
	default:
		# code...
		break;
}


?>