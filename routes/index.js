var express = require('express');
var router = express.Router();
var userSchema=require('./users');
var postSchema=require('./post');
var Login=require('./login');
var SingupAsCivicSchema=require('./signup-as-civic');
var SingupAsGovernSchema=require('./signup-as-governs');
const localStrategy=require('passport-local');
const passport = require('passport');
passport.use(new localStrategy(userSchema.authenticate()));






/* GET home page. */
router.get('/', function(req, res) {
  res.render('index');
}); 

router.get('/about-us',isLoggedIn, function(req, res) {
  
});

router.get('/contact-us',isLoggedIn,function(req, res) {
  
});

router.get('/blogs',isLoggedIn,function(req, res) {
   
});

router.get('/userProfile',isLoggedIn,function(req, res) {
   
});



router.post('/sign-up-as-civic', function(req, res,next) {
  var userData=new SingupAsCivicSchema({
    userName: req.body.uname,
    email: req.body.email,
    password: req.body.password,
    name: req.body.birthName,
    profilePicture:req.body.profilePictureURL,
    address:req.body.Address
  })


  SingupAsCivicSchema.register(userData,req.body.password)
.then(function(registereduser){
  password.authenticate("local")(res,res,function(){
    res.redirect("/");
  })
})

});




router.get ('/signup-as-governs', function(req, res ) {
  res.render('index');
});


router.post('/login',passport.authenticate("local",{
  successRedirect:'/',
  failureRedirect:"/login"
}), function(req,res){})

router.get("/logout",function(req,res,next){
  req.logout(function(err){
    if(err) return next (err);
    res.redirect('/login');
  })
})

function isLoggedIn(req,res,next){
  if(req.isAuthenticated()){
    return next();
  }
  res.redirect('/login');
}
module.exports = router;
