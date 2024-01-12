const mongoose = require('mongoose');

mongoose.connect('mongodb://127.0.0.1:27017/Hackathon');

const Login =  mongoose.Schema({
  userName: { 
    type: String,
     unique: true,
      required: true
   },
  password: { 
    type: String, 
    required: true 
  }

});


module.exports = mongoose.model('LogCivic', Login);





