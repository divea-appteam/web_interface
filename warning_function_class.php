<?php
class WF{
	var $wfr;
	public function on() {
		$this->wfr = 1;
		//echo "wfrを1にしました";
	}
	public function off() {
		$this->wfr = 0;
		//echo "wfrを0にしました";
	}
}
//$a = new WF;
?>