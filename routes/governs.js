const mongoose = require('mongoose');
const plm=require('passport-local-mongoose');
var Login=require('./login');

mongoose.connect('mongodb://127.0.0.1:27017/Hackathon');

const userSchema=mongoose.Schema({
uname:username,
upassword:password,
})
userSchema.plugin(plm);
module.exports = mongoose.model('User', userSchema);
