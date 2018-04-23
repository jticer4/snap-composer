<?php
// did not properly follow psr4 for my file name
function numLivesPerSenator(string $name): int {
	if($name === "Arlo") {
		return 9;
	} else {
		return 1;
	}
}
?>