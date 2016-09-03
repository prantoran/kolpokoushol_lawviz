

<!doctype html>
<meta charset="utf-8">

<!--<script src="//d3plus.org/js/d3.js"></script>
<script src="//d3plus.org/js/d3plus.js"></script>
-->
<script src="d3.js"></script>
<script src="d3plus.js"></script>
<div id="viz"></div>

<script>



//reference: http://d3plus.org/examples/advanced/9956853/


  
/*
  var sample_data = [
    {"name": "alpha", "size": 100},
    {"name": "beta", "size": 12},
    {"name": "gamma", "size": 30},
    {"name": "delta", "size": 26},
    {"name": "epsilon", "size": 12},
    {"name": "zeta", "size": 26},
    {"name": "theta", "size": 11},
    {"name": "eta", "size": 24}
  ]
  //Positions not that important, if not defined then D3plus will determine a layout that aims to reduce node and edge overlapping
  var positions = [
    {"name": "alpha", "x": 10, "y": 15},
    {"name": "beta", "x": 12, "y": 24},
    {"name": "gamma", "x": 16, "y": 18},
    {"name": "delta", "x": 26, "y": 21},
    {"name": "epsilon", "x": 13, "y": 4},
    {"name": "zeta", "x": 31, "y": 13},
    {"name": "theta", "x": 19, "y": 8},
    {"name": "eta", "x": 24, "y": 11}
  ]
  var connections = [
    {"source": "alpha", "target": "beta"},
    {"source": "alpha", "target": "gamma"},
    {"source": "beta", "target": "delta"},
    {"source": "beta", "target": "epsilon"},
    {"source": "zeta", "target": "gamma"},
    {"source": "theta", "target": "gamma"},
    {"source": "eta", "target": "gamma"}
  ]

*/
  var f = [];
  var id = [];
  var sd = []; //sample_data
  var edges = [];
  var alen = 0;
  d3.csv("gr2.csv",function(data){  //asynchronous process
    //console.log(data[0]);
    console.log(data.length);
    //console.log("data type: "+typeof(data));
    alen = data.length;
    var res = [];
    


    //for( var m in data[0]){
    //    console.log("item: "+m+" type: "+typeof(m)+" val:"+data[0][m]);
   // }
    for(var i = 0 , n = data.length;i<n;i++){
       // console.log(data[i])    
        if(data[i]["source"] == data[i]["destination"])continue; //self loop removal
        var tmp = {} //creating object
        tmp["source"] = data[i]["source"];
        tmp["target"] = data[i]["destination"];
        console.log(tmp);
        edges.push(tmp);
        for(var m in data[i]){

            //console.log("  value:"+data[i][m]+" type: "+typeof(data[i][m]));
            if (!(data[i][m] in f)){
                //console.log("    key if NaN");
                f[data[i][m]]=0;
            }
            f[data[i][m]]+=1;

        }
    }

    //for(var m in edges){
    //    console.log(edges[m]);
    //}
    
    for(var m in f){
        var tmp ={};
        tmp["name"]=m;
        tmp["size"]=f[m];
        //console.log(tmp["name"]+" "+tmp['size']);
       // console.log(tmp);
        sd.push(tmp);
        //console.log("f["+m+"]: "+f[m]);
    }
    //console.log(sd.length);

   // for(var m in sd){
     //   console.log(sd[m]);
    //}    

    var visualization = d3plus.viz()
        .container("#viz")
        .type("network")
        .data(sd)
        .edges(edges)
        .edges({"arrows": false})
        .size("size")
        .id("name")
        .draw()
  })

  /*

  var visualization = d3plus.viz()
    .container("#viz")
    .type("network")
    .data(sample_data)
    .nodes(positions)
    .edges(connections)
    .edges({"arrows": true})
    .size("size")
    .id("name")
    .draw()

*/
</script>