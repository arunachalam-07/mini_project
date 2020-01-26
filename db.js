//mongo db connect drive
var Client=require('mongodb').MongoClient;
//for generation of unique id
var uid=require('uniqid');
//url for database
var url="mongodb://localhost:27017/sampledb";
//connecting to db
Client.connect(url,{useUnifiedTopology:true},function(err,client){
    if(err){
        console.log(err);
    }
    else{
        console.log("success");
    }
    //ar dbs=db.db("sampledb");
    var Name="arun";
    var obj={
        name:Name,
        Age:20,
        Dept:"Cse",
        uid:uid(Name)
    };
    //getting database form client
   var dbs=client.db("sample");

// insert document to 'users' collection using insertOne
dbs.collection("sample").insertOne(obj, function(err, res) {
    if (err) {
        throw Error(err);
    }
    console.log("Document inserted");
    // close the connection to db when you are done with it
    //cl.close();
});
//console.log(dbs.collection.find());
});