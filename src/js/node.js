var Firebase = require('firebase');
var ElasticClient = require('elasticsearchclient')

// initialize our ElasticSearch API
var client = new ElasticClient({ host: 'localhost', port: 9200 });

// listen for changes to Firebase data
var fb = new Firebase('https://dazzling-inferno-1178.firebaseIO.com/widgets');
fb.on('child_added',   createOrUpdateIndex);
fb.on('child_changed', createOrUpdateIndex);
fb.on('child_removed', removeIndex);

function createOrUpdateIndex(snap) {
   client.index(this.index, this.type, snap.val(), snap.key())
     .on('data', function(data) { console.log('indexed ', snap.key()); })
     .on('error', function(err) { /* handle errors */ });
}

function removeIndex(snap) {
   client.deleteDocument(this.index, this.type, snap.key(), function(error, data) {
      if( error ) console.error('failed to delete', snap.key(), error);
      else console.log('deleted', snap.key());
   });
}
var Firebase = require('firebase');
var ElasticClient = require('elasticsearchclient')

// initialize our ElasticSearch API
var client = new ElasticClient({ host: 'localhost', port: 9200 });

// listen for requests at https://<INSTANCE>.firebaseio.com/search/request
var queue = new Firebase('https://dazzling-inferno-1178.firebaseIO.com/search');
queue.child('request').on('child_added', processRequest);

function processRequest(snap) {
   snap.ref().remove(); // clear the request after we receive it
   var data = snap.val();
   // Query ElasticSearch
   client.search(dat.index, dat.type, { "query": { 'query_string': { query: dat.query } })
   .on('data', function(data) {
       // Post the results to https://<INSTANCE>.firebaseio.com/search/response
       queue.child('response/'+snap.key()).set(results);
   })
   .on('error', function(error){ /* process errors */ });
   .exec();
   }
