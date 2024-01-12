var express = require('express');
var router = express.Router();
const mongoose=require('mongoose');
const Schema=mongoose.Schema;

mongoose.connect('mongodb://127.0.0.1:27017/Hackathon');

//  const commentSchema =mongoose.Schema({
//   text: { type: String, required: true },
//   userId: { type: Schema.Types.ObjectId, ref: 'User', required: true },
//   createdDate: { type: Date, default: Date.now }
// });

const postSchema = new Schema({
  subject: { type: String, required: true },
  createdDate: { type: Date, default: Date.now },
  description: { type: String, required: true },
  images: [String],
  videos: [String],
  upVote: { type: Number, default: 0 },
  downVote: { type: Number, default: 0 },
  userId: { type: Schema.Types.ObjectId, ref: 'userSchema', required: true },
  comments: String
});



module.exports = mongoose.model('Post', postSchema);