$(document).ready(function()
{
  $('#inputFile').change( function(event) {
    var tmppath = "/home/pcmagas";
      $("#inputPath").val(tmppath.replace('blob:',''));
  });
});
