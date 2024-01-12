var express = require('express');
var router = express.Router();
const mongoose=require('mongoose');

mongoose.connect('mongodb://127.0.0.1:27017/Hackathon');

var signupasgoverns= mongoose.Schema(
    {
        username:{type:String,require:true} ,
        email:{type:String,unique:true},
        department:{type:String,require:true},
        phone:{type:Number,unique:true},
        Pan_number:{type:String,unique:true},
        logo:{type:String,unique:true},
        headOfDepartment:String
    }
)

module.exports=mongoose.model("SignUp",signupasgoverns);