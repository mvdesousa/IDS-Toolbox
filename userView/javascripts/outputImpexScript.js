$().ready(function() {
	function downloadInnerHtml(filename, elId, mimeType) {
		var elHtml = document.getElementById(elId).innerHTML;
		var link = document.createElement('a');
		mimeType = mimeType || 'text/plain';

		link.setAttribute('download', filename);
		link.setAttribute('href', 'data:' + mimeType + ';charset=utf-8,' + encodeURIComponent(elHtml));
		link.click(); 
	}

	var fileName =  'tags.txt'; // You can use the .txt extension if you want

	$('#asscDoc_downloadLink').click(function(){
		downloadInnerHtml(fileName, 'outPutImpex','text/txt');
	});
});