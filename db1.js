// we create 'users' collection in newdb database
var url = "mongodb://localhost:27017/newdb";

// create a client to mongodb
var MongoClient = require('mongodb').MongoClient;
 
// make client connect to mongo service
MongoClient.connect(url, {useUnifiedTopology:true},function(err, client) {
    if (err) throw err;
    // db pointing to newdb
    //console.log("Switched to "+cl.databaseName+" database");
    //collection selection
    var cl=client.db("users");
 
    // document to be inserted
    var doc = { name: "Roshan", age: "22" };
    
    // insert document to 'users' collection using insertOne
   /* cl.collection("users").insertOne(doc, function(err, res) {
        if (err) {
            console.log(err);
        }
        console.log("Document inserted");
        // close the connection to db when you are done with it
        //cl.close();
    });*/
}); function add(a,b){


    var x=document.getElementById("answer").value;
    if(isNaN(x)){
        document.getElementById("output").innerHTML="Not an number"+" "+x;
    }
    else{
     
       
            if(x==c){
        document.getElementById("output").innerHTML=a+"+"+b+"= "+c+" Correct_Answer";
    }
    else{
        document.getElementById("output").innerHTML="wrong answer";

    }
    }}
function Newcard(){
    window.location.reload();
}
