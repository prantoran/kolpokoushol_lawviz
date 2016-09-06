
function reloadViz(){

            console.log("ok lets reload");

            vizdiv = document.getElementById("viz");
            //d3plus.viz.update();
            vizdiv.innerHTML = '<iframe src="graphv.html" width="100%" height="720px" id="viziframe"></iframe>';
}