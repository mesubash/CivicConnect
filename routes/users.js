const mongoose = require('mongoose');
const plm=require('passport-local-mongoose');
var Login=require('./login');
const Schema=mongoose.Schema;

mongoose.connect('mongodb://127.0.0.1:27017/Hackathon');

const userSchema=new Schema({
uname:String,
upassword:String,
postId:{ type: Schema.Types.ObjectId, ref: 'postSchema', required: true }
})

mongoose.plugin(plm);
module.exports = mongoose.model('User', userSchema);