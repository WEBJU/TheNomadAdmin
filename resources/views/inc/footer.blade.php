<!-- Bootstrap core JavaScript

================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<hr>
<div class="footer">
  <div class="container">
    <div class="row">

      <div class="col-md-6">

        <p>The Nomad</p>
      </div>
      <div class="col-md-6">
            <p>Copyright &copy;2022</p>
      </div>

    </div>
  </div>

</div>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script src="https://kit.fontawesome.com/4683fdb7d0.js" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyCG0WMOmj-novL3WaaXM-fKBH78Ecbrigw",
    authDomain: "tourguide-51813.firebaseapp.com",
    databaseURL: "https://tourguide-51813-default-rtdb.firebaseio.com",
    projectId: "tourguide-51813",
    storageBucket: "tourguide-51813.appspot.com",
    messagingSenderId: "879281431956",
    appId: "1:879281431956:web:afe704de266d5ddf8a1b81",
    measurementId: "G-ZGTW9T0D7N"
  };  firebase.initializeApp(firebaseConfig);
  var siteRef=firebase.database().ref('Sites');


  var database=firebase.database();
  var lastIndex=0;
  var id=location.pathname.split('/')[2];
//get data
  firebase.database().ref('Sites/').on('value',function(snapshot){
    var value=snapshot.val();
    // console.log(value)
    var htmls=[];

    $.each(value,function(index,value){
      if (value) {

        htmls.push('<tr>\<td>'+value.siteName+'</td>\
          <td>'+value.siteType+'</td>\
          <td>'+value.siteLocation+'</td>\
          <td><img src="'+value.imageurl +'"/></td>\
          <td><button onclick="removeDetail()" class="btn btn-danger" id="delete" value="'+index+'">Delete</button></td>\
        </tr>');
      }
      lastIndex=index;
    });
    $("#tbody").html(htmls);
  });

  function removeDetail(){
    // e.stopPropagation();
      var id=document.getElementById('delete').value;
    // var siteRef = firebase.database().ref('Sites');
    // var newSiteRef=siteRef.child(id);
    // newSiteRef.remove();
    confirm("Are you sure you want to delete?");
    console.log("It worked!!");

    console.log(id);
    // alert("What the fuck!!");
  }
</script>
<script type="text/javascript">
// $(document).ready(function(){
  console.log("Hi there");
  function loginUser(){
    var email=$("#email").val();
    var password=$("#password").val();

    firebase.auth().signInWithEmailAndPassword(email, password)
      .then((userCredential) => {
        // Signed in
        var url='/view';
        var user = userCredential.user;
        // var message="<div class='success'>Loggedin successfully!!</div>"
        // $("#message").html(message);
        alert("Login success.Clikc ok to continue!!");
        window.location.href=url;

      })
      .catch((error) => {

        // var message="<div class='error'>Username or password incorrect!!</div>"
        // $("#message").html(message);
        alert("Username or password incorrect!!");
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorMessage);
      });
  }

</script>
<script type="text/javascript">
var messagesRef = firebase.database().ref('Sites');
// document.getElementById(
//    'contactForm').addEventListener('submit', submitForm);
//uploading file in storage
function uploadImage(){

var storage = firebase.storage();
var file=document.getElementById("files").files[0];
var storageref=storage.ref();
var thisref=storageref.child(file.name).put(file);
thisref.on('state_changed',function(snapshot) {


}, function(error) {

}, function() {
// Uploaded completed successfully, now we can get the download URL
thisref.snapshot.ref.getDownloadURL().then(function(downloadURL) {
  //getting url of image
  document.getElementById("url").value=downloadURL;
  var sitename=  document.getElementById("site_name").value;
  var sitetype=document.getElementById("type").value;
  var sitelocation=document.getElementById("location").value;
  console.log(name);
  alert('uploaded successfully');
  saveMessage(sitename,sitetype,sitelocation,downloadURL);
 });
});

// Get values
var url = getInputVal('url');
var name = getInputVal('site_name');
var type = getInputVal('type');
var location =getInputVal('location');
// Save message
// saveMessage(url);
}
function getInputVal(id){
  document.getElementById('addSite').reset();

}


// Function to get get form values
function getInputVal(id){
return document.getElementById(id).value;
}

// Save message to firebase database
function saveMessage(name,type,location,url){
var newMessageRef = messagesRef.push();
newMessageRef.set({
  siteName:name,
  siteType:type,
  siteLocation:location,
  imageurl:url,
});
}
</script>
</body>
</html>
