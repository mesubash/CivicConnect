const mongoose = require('mongoose');

mongoose.connect('mongodb://127.0.0.1:27017/Hackathon');


const userSchema =  mongoose.Schema({
  userName: { 
    type: String,
     unique: true,
      required: true
   },
  email: { 
    type: String,
    unique: true, 
    required: true
   },
  password: { 
    type: String, 
    required: true 
  },
  name: { 
    type: String, 
    required: true 
  },
  profilePicture: String,
  address: String,
  
});


module.exports = mongoose.model('SignupCivic', userSchema);




