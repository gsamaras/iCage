//jQuery(document).ready(function() {
	function count($this){
		var current = parseInt($this.html(), 10);
		current = current + 20; /* Where 20 is increment */

		$this.html(++current);
		if(current > $this.data('count')){
			$this.html($this.data('count'));
		} else {
			setTimeout(function(){count($this)}, 1); // increase 1 and the rate of counting will be slower
		}
	}
	function update_views(a){
		$("span.stat-count").text(a);
		jQuery(".stat-count").each(function() {
	//		jQuery(this).data('count', parseInt(jQuery(this).html(), 10));
	//		jQuery(this).html('0');
	//		count(jQuery(this));
			jQuery(this).html(a);
		});
	}
//});
